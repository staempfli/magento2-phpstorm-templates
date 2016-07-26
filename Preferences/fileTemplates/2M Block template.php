<?php
#parse("stmpfl_variables.txt")
#parse("stmpfl_header_php.php")

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class ${NAME} extends Template implements BlockInterface
{
     //protected ${DS}_template = "template_path.phtml";

    /**
     * Constructor
     *
     * @param Template\Context ${DS}context
     * @param array ${DS}data
     */
    public function __construct(Template\Context ${DS}context, array ${DS}data = [])
    {
        parent::__construct(${DS}context, ${DS}data);
    }

}