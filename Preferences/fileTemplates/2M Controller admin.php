<?php
#parse("stmpfl_variables.txt")
#parse("stmpfl_header_php.php")

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class ${NAME} extends \Magento\Backend\App\Action
{
    /**
     * @var PageFactory
     */
    protected ${DS}resultPageFactory;

    /**
     * @param Context ${DS}context
     * @param PageFactory ${DS}resultPageFactory
     */
    public function __construct(
        Context ${DS}context,
        PageFactory ${DS}resultPageFactory
    ) {
        parent::__construct(${DS}context);
        ${DS}this->resultPageFactory = ${DS}resultPageFactory;
    }

    /**
     * Check the permission to run it
     *
     * @return boolean
     */
    protected function _isAllowed()
    {
        return ${DS}this->_authorization->isAllowed('${ACL_is_allowed}');
    }

    /**
     * Index action
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page ${DS}resultPage */
        ${DS}resultPage = ${DS}this->resultPageFactory->create();

        return ${DS}resultPage;
    }
}
