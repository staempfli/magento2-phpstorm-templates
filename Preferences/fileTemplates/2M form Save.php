<?php
#parse("stmpfl_variables.txt")
#parse("stmpfl_header_php.php")

class ${NAME} extends \Magento\Backend\App\Action
{
    /** @var ${MODEL_NAMESPACE} ${DS}objectModel */
    protected ${DS}objectModel;

    /**
     * @param \Magento\Backend\App\Action\Context ${DS}context
     * @param ${MODEL_NAMESPACE} ${DS}objectModel
     */
    public function __construct(
        \Magento\Backend\App\Action\Context ${DS}context,
        ${MODEL_NAMESPACE} ${DS}objectModel
    ){
        ${DS}this->objectModel = ${DS}objectModel;
        parent::__construct(${DS}context);
    }

    /**
     * {@inheritdoc}
     */
    protected function _isAllowed()
    {
        return ${DS}this->_authorization->isAllowed('${ACL_is_allow}');
    }

    /**
     * Save action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        ${DS}data = ${DS}this->getRequest()->getParam('main_fieldset', []);
        /** @var \Magento\Backend\Model\View\Result\Redirect ${DS}resultRedirect */
        ${DS}resultRedirect = ${DS}this->resultRedirectFactory->create();
        if (${DS}data) {
            ${DS}params = [];
            if (isset(${DS}data['${PRIMARY_FIELDNAME}'])) {
                ${DS}this->objectModel = ${DS}this->objectModel->load(${DS}data['${PRIMARY_FIELDNAME}']);
                ${DS}params['${PRIMARY_FIELDNAME}'] = ${DS}data['${PRIMARY_FIELDNAME}'];
            }
            ${DS}this->objectModel->setData(${DS}data);

            ${DS}this->_eventManager->dispatch(
                '${EVENT_PREFIX}_prepare_save',
                ['object' => ${DS}this->objectModel, 'request' => ${DS}this->getRequest()]
            );

            try {
                ${DS}this->objectModel->save();
                ${DS}this->messageManager->addSuccess(__('You saved this record.'));
                ${DS}this->_objectManager->get('Magento\Backend\Model\Session')->setFormData(false);
                if (${DS}this->getRequest()->getParam('back')) {
                    ${DS}params = ['${PRIMARY_FIELDNAME}' => ${DS}this->objectModel->getId(), '_current' => true];
                    return ${DS}resultRedirect->setPath('*/*/edit', ${DS}params);
                }
                return ${DS}resultRedirect->setPath('*/*/');
            } catch (\Exception ${DS}e) {
                ${DS}this->messageManager->addError(${DS}e->getMessage());
                ${DS}this->messageManager->addException(${DS}e, __('Something went wrong while saving the record.'));
            }

            ${DS}this->_getSession()->setFormData(${DS}this->getRequest()->getPostValue());
            return ${DS}resultRedirect->setPath('*/*/edit', ${DS}params);
        }
        return ${DS}resultRedirect->setPath('*/*/');
    }

}
