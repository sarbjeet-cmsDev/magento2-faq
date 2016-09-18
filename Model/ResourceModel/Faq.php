<?php
namespace Expert\Faq\Model\ResourceModel;
class Faq extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('expert_faq','id');
    }
}