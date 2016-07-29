<?php
#parse("stmpfl_variables.txt")
#parse("stmpfl_header_php.php")

use Magento\Framework\View\Element\Template\Context;
use Magento\Widget\Block\BlockInterface;

class ${NAME} extends Template implements BlockInterface
{
     //protected ${DS}_template = "template_path.phtml";

    /**
     * Constructor
     *
     * @param Context ${DS}context
     * @param array ${DS}data
     */
    public function __construct(Context ${DS}context, array ${DS}data = [])
    {
        parent::__construct(${DS}context, ${DS}data);
    }

}