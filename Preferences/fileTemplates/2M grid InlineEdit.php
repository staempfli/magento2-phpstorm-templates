<?php
#parse("stmpfl_variables.txt")
#parse("stmpfl_header_php.php")

use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;

/**
 * Grid inline edit controller
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class ${NAME} extends \Magento\Backend\App\Action
{
    
    /** @var \#[[$OBJECT_MODEL$]]# ${DS}objectModel */
    protected ${DS}objectModel;

    /** @var JsonFactory ${DS}jsonFactory */
    protected ${DS}jsonFactory;

    /**
     * @param Context ${DS}context
     * @param \#[[$OBJECT_MODEL$]]# ${DS}objectModel
     * @param JsonFactory ${DS}jsonFactory
     */
    public function __construct(
        Context ${DS}context,
        \#[[$OBJECT_MODEL$]]# ${DS}objectModel,
        JsonFactory ${DS}jsonFactory
    ) {
        parent::__construct(${DS}context);
        ${DS}this->objectModel = ${DS}objectModel;
        ${DS}this->jsonFactory = ${DS}jsonFactory;
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
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /** @var \Magento\Framework\Controller\Result\Json ${DS}resultJson */
        ${DS}resultJson = ${DS}this->jsonFactory->create();
        ${DS}error = false;
        ${DS}messages = [];

        ${DS}postItems = ${DS}this->getRequest()->getParam('items', []);
        if (!(${DS}this->getRequest()->getParam('isAjax') && count(${DS}postItems))) {
            return ${DS}resultJson->setData([
                'messages' => [__('Please correct the data sent.')],
                'error' => true,
            ]);
        }

         foreach (array_keys(${DS}postItems) as ${DS}objectId) {
            try {
                ${DS}object = ${DS}this->objectModel->load(${DS}objectId);
                ${DS}object->setData(array_merge(${DS}object->getData(), ${DS}postItems[${DS}objectId]));
                ${DS}this->objectModel->save(${DS}object);
            } catch (\Exception ${DS}e) {
                ${DS}messages[] = '[Record ID: ' . ${DS}object->getId() . '] ' . ${DS}e->getMessage();
                ${DS}error = true;
            } 
        }

        return ${DS}resultJson->setData([
            'messages' => ${DS}messages,
            'error' => ${DS}error
        ]);
    }
    
    /**
     * Add record id to error message
     *
     * @param ${DS}object
     * @param string ${DS}errorText
     * @return string
     */
    protected function getErrorWithObjectId(${DS}object, ${DS}errorText)
    {
        return '[Record ID: ' . ${DS}object->getId() . '] ' . ${DS}errorText;
    }
}