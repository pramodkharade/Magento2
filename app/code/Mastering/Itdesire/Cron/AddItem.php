<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of addItem
 *
 * @author pramod
 */
namespace Mastering\Itdesire\Cron;
use Mastering\Itdesire\Model\ItemFactory;
use Mastering\Itdesire\Model\Config;
class AddItem {
    private $itemFactory;
    private  $config;
    public function __construct(ItemFactory $itemFactory,Config $config) {
        $this->itemFactory = $itemFactory;
        $this->config = $config;
    }
    
    public function execute()
    {
        if($this->config->isEnabled()){
            $this->itemFactory->create()
            ->setName('Scheduled item')
            ->setDescription('Created at ' . time())
            ->save();
        }
        
    }
}
