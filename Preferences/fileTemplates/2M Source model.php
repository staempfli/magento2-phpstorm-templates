<?php
#parse("stmpfl_variables.txt")
#parse("stmpfl_header_php.php")

use Magento\Framework\Data\OptionSourceInterface;
use Magento\Framework\Option\ArrayInterface;

class ${NAME} implements OptionSourceInterface, ArrayInterface
{
    /**
     * @var array ${DS}options
     */
    protected ${DS}options;

    /**
     * Category Options
     *
     * @return array
     */
    public function toOptionArray()
    {
        if (${DS}this->options == null) {
            ${DS}this->options = ['value' => '', 'label' => ''];      
        }

        return ${DS}this->options;
    }
}