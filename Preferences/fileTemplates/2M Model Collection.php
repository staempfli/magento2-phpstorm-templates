<?php
#parse("stmpfl_variables.txt")
#parse("stmpfl_header_php.php")

class ${NAME} extends Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = '${PRIMARY_FIELD}';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        ${DS}this->_init('${MODEL}', '${RESOURCE_MODEL}');
    }
}