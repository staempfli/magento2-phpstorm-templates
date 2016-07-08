<?php
#parse("stmpfl_variables.txt")
#parse("stmpfl_header_php.php")

use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;

class ${NAME} extends \Magento\Framework\App\Action\Action
{
    /**
     * @var PageFactory
     */
    protected ${DS}pageFactory;

    /**
     * @param Context ${DS}context
     * @param PageFactory ${DS}pageFactory
     */
    public function __construct(Context ${DS}context, PageFactory ${DS}pageFactory)
    {
        ${DS}this->pageFactory = ${DS}pageFactory;
        return parent::__construct(${DS}context);
    }

    /**
     * Index Action
     * 
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Framework\View\Result\Page ${DS}resultPage */
        ${DS}resultPage = ${DS}this->pageFactory->create();
        return ${DS}resultPage;
    }
}
