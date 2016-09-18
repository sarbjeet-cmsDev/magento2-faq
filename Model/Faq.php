<?php
namespace Expert\Faq\Model;

class Faq extends \Magento\Framework\Model\AbstractModel 
{
	const CACHE_TAG = 'expert_faq';
    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Expert\Faq\Model\ResourceModel\Faq');
    }

}