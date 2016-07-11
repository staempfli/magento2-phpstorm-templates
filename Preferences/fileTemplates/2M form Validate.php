<?php
#parse("stmpfl_variables.txt")
#parse("stmpfl_header_php.php")

use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;

class ${NAME} extends \Magento\Backend\App\Action
{
    /** @var JsonFactory ${DS}jsonFactory */
    protected ${DS}jsonFactory;

    /** @var  \Magento\Framework\DataObject ${DS}response */
    protected ${DS}response;

    /**
     * @param Context ${DS}context
     * @param JsonFactory ${DS}jsonFactory
     */
    public function __construct(
        Context ${DS}context,
        JsonFactory ${DS}jsonFactory
    ) {
        parent::__construct(${DS}context);
        ${DS}this->jsonFactory = ${DS}jsonFactory;
        ${DS}this->response = new \Magento\Framework\DataObject();
    }

    /**
     * Check if required fields is not empty
     *
     * @param array ${DS}data
     */
    public function validateRequireEntries(array ${DS}data)
    {
        ${DS}requiredFields = [
            '#[[$fieldName$]]#' => __('#[[$fieldName$]]#'),
            // Add more fields to validate here
        ];
        foreach (${DS}data as ${DS}field => ${DS}value) {
            if (in_array(${DS}field, array_keys(${DS}requiredFields)) && ${DS}value == '') {
                ${DS}this->_addErrorMessage(
                    __('To apply changes you should fill in required "%1" field', ${DS}requiredFields[${DS}field])
                );
            }
        }
    }

    /**
     * Add error message validation
     *
     * @param ${DS}message
     */
    protected function _addErrorMessage(${DS}message)
    {
        ${DS}this->response->setError(true);
        if (!is_array(${DS}this->response->getMessages())) {
            ${DS}this->response->setMessages([]);
        }
        ${DS}messages = ${DS}this->response->getMessages();
        ${DS}messages[] = ${DS}message;
        ${DS}this->response->setMessages(${DS}messages);
    }

    /**
     * AJAX customer validation action
     *
     * @return \Magento\Framework\Controller\Result\Json
     */
    public function execute()
    {
        ${DS}this->response->setError(0);

        ${DS}this->validateRequireEntries(${DS}this->getRequest()->getParam('main_fieldset'));

        // Add more validations here

        ${DS}resultJson = ${DS}this->jsonFactory->create()->setData(${DS}this->response);
        return ${DS}resultJson;
    }
}

