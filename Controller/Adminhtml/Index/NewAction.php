<?php
namespace Expert\Faq\Controller\Adminhtml\Index;

class NewAction extends \Expert\Faq\Controller\Adminhtml\Index
{
    protected $_coreRegistry = null;
    protected $_resultForwardFactory;

    
    public function __construct(\Magento\Backend\App\Action\Context $context, 
        \Magento\Backend\Model\View\Result\ForwardFactory $resultForwardFactory,
        \Magento\Framework\Registry $coreRegistry
        )
    {
        $this->_resultForwardFactory = $resultForwardFactory;
        $this->_coreRegistry = $coreRegistry;
        parent::__construct($context,$coreRegistry);
    }
    public function execute()
    {
        $resultForward = $this->_resultForwardFactory->create();

        return $resultForward->forward('edit');
    }
}