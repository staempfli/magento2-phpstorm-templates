<?php
#parse("stmpfl_variables.txt")
#parse("stmpfl_header_php.php")

class ${NAME} extends \Magento\Backend\App\Action
{
    /** @var \${OBJECT_MODEL} ${DS}objectModel */
    protected ${DS}objectModel;

    /**
     * @param \Magento\Backend\App\Action\Context ${DS}context
     * @param ${OBJECT_MODEL} ${DS}objectModel
     */
    public function __construct(
    \Magento\Backend\App\Action\Context ${DS}context,
    ${OBJECT_MODEL} ${DS}objectModel
    ){
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
     * Delete action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        ${DS}resultRedirect = ${DS}this->resultRedirectFactory->create();
        ${DS}id = ${DS}this->getRequest()->getParam('${PRIMARY_FIELDNAME}', null);

        try {
            ${DS}this->objectModel->load(${DS}id);
            if (${DS}this->objectModel->getId()) {
                ${DS}this->objectModel->delete();
                ${DS}this->messageManager->addSuccess(__('You deleted the record.'));
            }
            ${DS}this->messageManager->addError(__('Record does not exist.'));
        } catch (\Exception ${DS}exception) {
            ${DS}this->messageManager->addError(${DS}exception->getMessage());
        }
        
        return ${DS}resultRedirect->setPath('*/*');
    }
}
