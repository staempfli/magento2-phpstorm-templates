<?php
#parse("stmpfl_variables.txt")
#parse("stmpfl_header_php.php")

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class ${NAME} extends Template implements BlockInterface
{
    //$(DS)_template = "template_path.phtml";

    /**
     * References constructor.
     * @param Template\Context ${DS}context
     */
    public function __construct(
        Template\Context ${DS}context    
    )
    {
        parent::__construct(${DS}context);
    }

}