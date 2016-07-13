<?php
#parse("stmpfl_variables.txt")
#parse("stmpfl_header_php.php")

use Magento\Framework\DataObject\IdentityInterface;

class ${NAME} extends \Magento\Framework\Model\AbstractModel implements IdentityInterface
{
    /**
     * Cache tag
     */
    const CACHE_TAG = '${CACHE_TAG}';

    /**
     * @var string
     */
    protected ${DS}_cacheTag = '${CACHE_TAG}';

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected ${DS}_eventPrefix = '${EVENT_PREFIX}';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        ${DS}this->_init('#[[$Namespace$]]#\ResourceModel\\${NAME}');
    }

    /**
     * Get identities
     *
     * @return array
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . ${DS}this->getId()];
    }
}