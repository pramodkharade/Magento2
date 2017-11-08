<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Collection
 *
 * @author pramod
 */
namespace Mastering\Itdesire\Model\ResourceModel\Item;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Mastering\Itdesire\Model\Item;
use Mastering\Itdesire\Model\ResourceModel\Item as ItemResource;
class Collection extends AbstractCollection {
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init(Item::class, ItemResource::class);
    }
}
