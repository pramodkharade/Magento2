<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Mastering\Itdesire\Model;

/**
 * Description of ItemRepository
 *
 * @author pramod
 */
use Mastering\Itdesire\Api\ItemRepositoryInterface;
use Mastering\Itdesire\Model\ResourceModel\Item\CollectionFactory;
class ItemRepository implements ItemRepositoryInterface {
    private $collectionFactory;
    
    public function __construct(CollectionFactory $collectionFactory) {
        $this->collectionFactory = $collectionFactory;
    }
    
    public function getList() {
        return $this->collectionFactory->create()->getItems();
    }

    }
