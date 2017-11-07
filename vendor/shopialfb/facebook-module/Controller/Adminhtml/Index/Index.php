<?php
/**
 * Copyright 2017 Shopial. All rights reserved.
 */

namespace Shopial\Facebook\Controller\Adminhtml\Index;

/**
 * Responsible for loading page content.
 *
 * This is a basic controller that only loads the corresponding layout file. It may duplicate other such
 * controllers, and thus it is considered tech debt. This code duplication will be resolved in future releases.
 */
class Index extends \Magento\Backend\App\AbstractAction
{
    /** @var \Magento\Framework\View\Result\PageFactory  */
    private $resultPageFactory;
    
     /** 
      * @inheritdoc
      * @param \Magento\Backend\App\Action\Context $context
      * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
      */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute() 
    {
        return $this->resultPageFactory->create();
    }    
}
