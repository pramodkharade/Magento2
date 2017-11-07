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
namespace Mastering\Itdesire\Model\ResourceModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
class Item extends AbstractDb {
   protected function _construct()
    {
        $this->_init('mastering_itdesire_item', 'id');
    }

}
