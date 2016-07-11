<?php
#parse("stmpfl_variables.txt")
#parse("stmpfl_header_php.php")

use Magento\Backend\App\Action\Context;
use Magento\Ui\Component\MassAction\Filter;
use Magento\Framework\Controller\ResultFactory;

class ${NAME} extends \Magento\Backend\App\Action
{
    /**
     * @var Filter
     */
    protected ${DS}filter;

    /** @var \#[[$COLLECTION_MODEL$]]# ${DS}objectCollection */
    protected ${DS}objectCollection;

    /**
     * @param Context ${DS}context
     * @param Filter ${DS}filter
     * \#[[$COLLECTION_MODEL$]]# ${DS}objectCollection
     */
    public function __construct(Context ${DS}context, Filter ${DS}filter, \#[[$COLLECTION_MODEL$]]# ${DS}objectCollection)
    {
        ${DS}this->filter = ${DS}filter;
        ${DS}this->objectCollection = ${DS}objectCollection;
        parent::__construct(${DS}context);
    }

    /**
     * Execute action
     *
     * @return \Magento\Backend\Model\View\Result\Redirect
     * @throws \Magento\Framework\Exception\LocalizedException|\Exception
     */
    public function execute()
    {
        ${DS}collection = ${DS}this->filter->getCollection(${DS}this->objectCollection);
        ${DS}collectionSize = ${DS}collection->getSize();

        foreach (${DS}collection as ${DS}item) {
            ${DS}item->delete();
        }

        ${DS}this->messageManager->addSuccess(__('A total of %1 record(s) have been deleted.', ${DS}collectionSize));

        /** @var \Magento\Backend\Model\View\Result\Redirect ${DS}resultRedirect */
        ${DS}resultRedirect = ${DS}this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        return ${DS}resultRedirect->setPath('*/*/');
    }
}