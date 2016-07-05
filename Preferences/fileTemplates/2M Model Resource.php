<?php
#parse("stmpfl_variables.txt")
#parse("stmpfl_header_php.php")

class ${NAME} extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        ${DS}this->_init('${DB_Table}', '${PRIMARY_FIELD}');
    }
}