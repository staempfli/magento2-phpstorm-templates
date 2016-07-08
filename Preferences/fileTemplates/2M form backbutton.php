<?php
#parse("stmpfl_variables.txt")
#parse("stmpfl_header_php.php")

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

/**
 * Class BackButton
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
     * Constructor
     *
     * @param \Magento\Backend\Block\Widget\Context ${DS}context
     */
    public function __construct(\Magento\Backend\Block\Widget\Context ${DS}context)
    {
        ${DS}this->urlBuilder = ${DS}context->getUrlBuilder();
    }

    /**
     * @return array
     */
    public function getButtonData()
    {
        return [
            'label' => __('Back'),
            'on_click' => sprintf("location.href = '%s';", ${DS}this->getBackUrl()),
            'class' => 'back',
            'sort_order' => 10
        ];
    }

    /**
     * Get URL for back (reset) button
     *
     * @return string
     */
    public function getBackUrl()
    {
        return ${DS}this->urlBuilder->getUrl('*/*/');
    }
}