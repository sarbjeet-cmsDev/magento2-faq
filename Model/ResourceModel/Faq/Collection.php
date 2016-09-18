<?php
namespace Expert\Faq\Model\ResourceModel\Faq;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Expert\Faq\Model\Faq','Expert\Faq\Model\ResourceModel\Faq');
    }
}