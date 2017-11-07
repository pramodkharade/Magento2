<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Index
 *
 * @author pramod
 */
namespace Mastering\Itdesire\Controller\Index;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Action;
class Index extends Action{
    //put your code here
    public function execute() {
        /** @var \Magento\Framework\Controller\Result\Raw $result */
        /*
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $result->setContents('Hello World!');
        return $result; */
      return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }

}
