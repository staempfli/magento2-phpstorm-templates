<?php
#parse("stmpfl_variables.txt")
#parse("stmpfl_header_php.php")

use Magento\Framework\Data\OptionSourceInterface;

class ${NAME} implements OptionSourceInterface, \Magento\Framework\Option\ArrayInterface
{
    /**
     * @var array $options
     */
    protected $options;

    /**
     * Category Options
     *
     * @return array
     */
    public function toOptionArray()
    {
        if ($this->options == null) {
            $this->options = ['value' => '', 'label' => ''];      
        }

        return $this->options;
    }
}