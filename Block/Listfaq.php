<?php
namespace Expert\Faq\Block;

use Magento\Store\Model\ScopeInterface;

/**
 * Main faq list block
 */
class Listfaq extends \Magento\Framework\View\Element\Template
{
	protected $faqFactory;

    const XML_PATH_ITEMS_PER_PAGE = 'expert_faq/expert_faq/items';

    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    protected $storeManager;

	public function __construct(
    \Magento\Framework\View\Element\Template\Context $context,
    \Expert\Faq\Model\Faq $faqFactory,
    \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
    \Magento\Store\Model\StoreManagerInterface $storeManager,
    array $data = []
	) { 
	    $this->faqFactory = $faqFactory;

        $this->scopeConfig = $scopeConfig;
        $this->storeManager = $storeManager;

        parent::__construct($context);
	}

	public function getFaqs(){
		return $this->faqFactory->getCollection();
	}


   /**
     * Set news collection
     */
    protected  function _construct()
    {
        parent::_construct();
        $collection = $this->faqFactory->getCollection()
            ->setOrder('id', 'DESC');
        $this->setCollection($collection);
    }
 
   /**
     * @return $this
     */
    protected function _prepareLayout()
    {
        parent::_prepareLayout();
        /** @var \Magento\Theme\Block\Html\Pager */
        $pager = $this->getLayout()->createBlock(
           'Magento\Theme\Block\Html\Pager',
           'expert.faq.list.pager'
        );
        $pager->setLimit($this->scopeConfig->getValue(self::XML_PATH_ITEMS_PER_PAGE, ScopeInterface::SCOPE_STORE))
            ->setShowAmounts(false)
            ->setCollection($this->getCollection());
        $this->setChild('pager', $pager);
        $this->getCollection()->load();
 
        return $this;
    }
 
   /**
     * @return string
     */
    public function getPagerHtml()
    {
        return $this->getChildHtml('pager');
    }

}
