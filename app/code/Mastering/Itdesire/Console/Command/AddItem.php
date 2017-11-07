<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AddItem
 *
 * @author pramod
 */
namespace Mastering\Itdesire\Console\Command;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Mastering\Itdesire\Model\ItemFactory;
use Magento\Framework\Console\Cli;

class AddItem extends Command{
    
    const INPUT_KEY_NAME ="name";
    const INPUT_KEY_DESCRIPTION ="description";
    private $itemFactory;
    
    public function __construct(ItemFactory $itemFactory) {
        $this->itemFactory = $itemFactory;
        parent::__construct();
    }
    
    protected function configure() {
        $this->setName("itdesire:item:add")
                ->addArgument(
                               self::INPUT_KEY_NAME,
                               InputArgument::REQUIRED,
                               'Input Name'
                             )->addArgument(
                                     self::INPUT_KEY_DESCRIPTION,
                                     InputArgument::OPTIONAL,
                                     "Input Description"
                            );
        parent::configure();
    }
    
    protected function execute(InputInterface $input, OutputInterface $output) {
        $item = $this->itemFactory->create();
        $item->setName($input->getArgument(self::INPUT_KEY_NAME));
        $item->setDescription($input->getArgument(self::INPUT_KEY_DESCRIPTION));
        $item->setIsObjectNew(true);
        $item->save();
        return Cli::RETURN_SUCCESS;
    }
}
