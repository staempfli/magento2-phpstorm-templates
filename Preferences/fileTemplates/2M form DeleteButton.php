<?php
#parse("stmpfl_variables.txt")
#parse("stmpfl_header_php.php")

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

/**
 * Class DeleteButton
 */
class ${NAME} implements ButtonProviderInterface
{
    /**
     * Url Builder
     *
     * @var \Magento\Framework\UrlInterface
     */
    protected ${DS}urlBuilder;

    /**
     * Registry
     *
     * @var \Magento\Framework\Registry
     */
    protected ${DS}registry;

    /**
     * Constructor
     *
     * @param \Magento\Backend\Block\Widget\Context ${DS}context
     * @param \Magento\Framework\Registry ${DS}registry
     */
    public function __construct(
        \Magento\Backend\Block\Widget\Context ${DS}context,
        \Magento\Framework\Registry ${DS}registry
    ) {
        ${DS}this->urlBuilder = ${DS}context->getUrlBuilder();
        ${DS}this->registry = ${DS}registry;
    }

    /**
     * @return array
     */
    public function getButtonData()
    {
        ${DS}data = [
            'label' => __('Delete'),
            'class' => 'delete',
            'id' => 'edit-delete-button',
            'data_attribute' => [
                'url' => ${DS}this->getDeleteUrl()
            ],
            'on_click' => 'deleteConfirm(\'' . __("Are you sure you want to do this?") . '\', \'' . ${DS}this->getDeleteUrl() . '\')',
            'sort_order' => 20,
        ];
        return ${DS}data;
    }

    /**
     * @return string
     */
    public function getDeleteUrl()
    {
        return ${DS}this->urlBuilder->getUrl('*/*/delete', ['${PRIMARY_FIELDNAME}' => ${DS}this->registry->registry('${PRIMARY_FIELDNAME}')]);
    }
}