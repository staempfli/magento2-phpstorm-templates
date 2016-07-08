<?php
#parse("stmpfl_variables.txt")
#parse("stmpfl_header_php.php")

class ${NAME} extends \Magento\Backend\App\Action
{
    /**
     * Core registry
     *
     * @var \Magento\Framework\Registry
     */
    protected ${DS}_coreRegistry = null;

    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected ${DS}resultPageFactory;

    /** @var ${OBJECT_MODEL} ${DS}objectModel */
    protected ${DS}objectModel;

    /**
     * @param \Magento\Backend\App\Action\Context ${DS}context
     * @param \Magento\Framework\View\Result\PageFactory ${DS}resultPageFactory
     * @param \Magento\Framework\Registry ${DS}registry
     * @param ${OBJECT_MODEL} ${DS}objectModel
     */
    public function __construct(
        \Magento\Backend\App\Action\Context ${DS}context,
        \Magento\Framework\View\Result\PageFactory ${DS}resultPageFactory,
        \Magento\Framework\Registry ${DS}registry,
        ${OBJECT_MODEL} ${DS}objectModel
    ) {
        ${DS}this->resultPageFactory = ${DS}resultPageFactory;
        ${DS}this->_coreRegistry = ${DS}registry;
        ${DS}this->objectModel = ${DS}objectModel;
        parent::__construct(${DS}context);
    }

    /**
     * {@inheritdoc}
     */
    protected function _isAllowed()
    {
        return ${DS}this->_authorization->isAllowed('${ACL_is_allowed}');
    }

    /**
     * ${NAME}
     *
     * @return \Magento\Backend\Model\View\Result\Page|\Magento\Backend\Model\View\Result\Redirect
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function execute()
    {
        // 1. Get ID
        ${DS}id = ${DS}this->getRequest()->getParam('${PRIMARY_FIELDNAME}');

        // 2. Initial checking
        if (${DS}id) {
            ${DS}this->objectModel->load(${DS}id);
            if (!${DS}this->objectModel->getId()) {
                ${DS}this->messageManager->addError(__('This record no longer exists.'));
                /** \Magento\Backend\Model\View\Result\Redirect ${DS}resultRedirect */
                ${DS}resultRedirect = ${DS}this->resultRedirectFactory->create();

                return ${DS}resultRedirect->setPath('*/*/');
            }
        }

        // 3. Set entered data if was error when we do save
        ${DS}data = ${DS}this->_objectManager->get('Magento\Backend\Model\Session')->getFormData(true);
        if (!empty(${DS}data)) {
            ${DS}this->objectModel->setData(${DS}data);
        }

        // 4. Register model to use later in blocks
        ${DS}this->_coreRegistry->register('form_record', ${DS}this->objectModel);
        ${DS}this->_coreRegistry->register('${PRIMARY_FIELDNAME}', ${DS}id);

        // 5. Build edit form
        /** @var \Magento\Backend\Model\View\Result\Page ${DS}resultPage */
        ${DS}resultPage = ${DS}this->resultPageFactory->create();

        return ${DS}resultPage;
    }
}