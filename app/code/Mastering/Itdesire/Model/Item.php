<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Item
 *
 * @author pramod
 */
namespace Mastering\Itdesire\Model;
use Magento\Framework\Model\AbstractModel;
class Item extends AbstractModel{
    //put your code here
    protected function _construct() {
        $this->_init(\Mastering\Itdesire\Model\ResourceModel\Item::class);
    }
}
