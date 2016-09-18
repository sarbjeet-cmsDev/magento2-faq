<?php
namespace Expert\Faq\Block\Adminhtml;

class Faq extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_blockGroup = 'Expert_Faq';
        $this->_controller = 'adminhtml_faq';
        $this->_headerText = __('FAQ List');
        $this->_addButtonLabel = __('Add New Faq');
        parent::_construct();
    }
}
