<?php

namespace Expert\Faq\Controller\Adminhtml;


abstract class Index extends \Magento\Backend\App\Action
{
    
    protected $_coreRegistry = null;

    
    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry)
    {
        $this->_coreRegistry = $coreRegistry;
        parent::__construct($context);
    }

    
    protected function initPage($resultPage)
    {
        $resultPage->setActiveMenu('Expert_Faq::list')
            ->addBreadcrumb(__('FAQ'), __('FAQ'));
        return $resultPage;
    }

    
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Expert_Faq::elements');
    }
}
