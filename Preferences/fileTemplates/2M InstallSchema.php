<?php
#parse("stmpfl_variables.txt")
#parse("stmpfl_header_php.php")

/**
 * @codeCoverageIgnore
 */
class ${NAME} implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(SchemaSetupInterface ${DS}setup, ModuleContextInterface ${DS}context)
    {
        ${DS}installer = ${DS}setup;

        ${DS}installer->startSetup();

        // Install actions here...

        ${DS}installer->endSetup();
    }
}
