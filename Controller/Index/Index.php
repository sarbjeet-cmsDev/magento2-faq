<?php
namespace Expert\Faq\Controller\Index;

class Index extends \Expert\Faq\Controller\Index
{
    /**
     * Show Faq List page
     *
     * @return void
     */
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}
