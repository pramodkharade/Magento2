<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Hello
 *
 * @author pramod
 */
namespace Mastering\Itdesire\Block;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Mastering\Itdesire\Model\ResourceModel\Item\Collection;
use Mastering\Itdesire\Model\ResourceModel\Item\CollectionFactory;
class Hello extends Template{
    //put your code here
    private $collectionFactory;
    public function __construct(Context $context,
            CollectionFactory $collectionFactory,
            array $data = array()) {
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
    }
    
   /**
     * @return \Mastering\Itdesire\Model\Item[]
     */
    public function getItems()
    {
        return $this->collectionFactory->create()->getItems();
    }
}
