<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewAction
 *
 * @author pramod
 */
namespace Mastering\Itdesire\Controller\Adminhtml\Item;
use Magento\Framework\Controller\ResultFactory;
use Magento\Backend\App\Action;

class NewAction extends Action
{
    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
