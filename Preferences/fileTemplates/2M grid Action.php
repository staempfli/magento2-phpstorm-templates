<?php
#parse("stmpfl_variables.txt")
#parse("stmpfl_header_php.php")

use Magento\Framework\UrlInterface;
use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Ui\Component\Listing\Columns\Column;

class ${NAME} extends Column
{
     /**
     * Url path
     */
    const URL_PATH_EDIT = '${FRONTNAME}/${CONTROLLER}/edit';

    /**
     * @var UrlInterface
     */
    protected ${DS}urlBuilder;

    /**
     * Constructor
     *
     * @param ContextInterface ${DS}context
     * @param UiComponentFactory ${DS}uiComponentFactory
     * @param UrlInterface ${DS}urlBuilder
     * @param array ${DS}components
     * @param array ${DS}data
     */
    public function __construct(
        ContextInterface ${DS}context,
        UiComponentFactory ${DS}uiComponentFactory,
        UrlInterface ${DS}urlBuilder,
        array ${DS}components = [],
        array ${DS}data = []
    ) {
        ${DS}this->urlBuilder = ${DS}urlBuilder;
        parent::__construct(${DS}context, ${DS}uiComponentFactory, ${DS}components, ${DS}data);
    }

    /**
     * Prepare Data Source
     *
     * @param array ${DS}dataSource
     * @return array
     */
    public function prepareDataSource(array ${DS}dataSource)
    {
        if (isset(${DS}dataSource['data']['items'])) {
            ${DS}storeId = ${DS}this->context->getFilterParam('store_id');

            foreach (${DS}dataSource['data']['items'] as &${DS}item) {
                if (isset(${DS}item['${PRIMARY_FIELDNAME}'])) {
                    ${DS}item[${DS}this->getData('name')]['edit'] = [
                        'href' => ${DS}this->urlBuilder->getUrl(
                            self::URL_PATH_EDIT,
                            ['${PRIMARY_FIELDNAME}' => ${DS}item['${PRIMARY_FIELDNAME}'], 'store' => ${DS}storeId]
                        ),
                        'label' => __('Edit'),
                        'hidden' => false,
                    ];
                }
            }
        }

        return ${DS}dataSource;
    }
}