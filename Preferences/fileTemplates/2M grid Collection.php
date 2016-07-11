<?php
#parse("stmpfl_variables.txt")
#parse("stmpfl_header_php.php")

use Magento\Framework\Api\Search\SearchResultInterface;
use Magento\Framework\Search\AggregationInterface;
use #[[$NamespaceCollection$]]# as #[[$type$]]#Collection;

/**
 * Class Collection
 * Collection for displaying grid of sales documents
 */
class ${NAME} extends #[[$type$]]#Collection implements SearchResultInterface
{
    /**
     * @var AggregationInterface
     */
    protected ${DS}aggregations;

    /**
     * @param \Magento\Framework\Data\Collection\EntityFactoryInterface ${DS}entityFactory
     * @param \Psr\Log\LoggerInterface ${DS}logger
     * @param \Magento\Framework\Data\Collection\Db\FetchStrategyInterface ${DS}fetchStrategy
     * @param \Magento\Framework\Event\ManagerInterface ${DS}eventManager
     * @param mixed|null ${DS}mainTable
     * @param \Magento\Framework\Model\ResourceModel\Db\AbstractDb ${DS}eventPrefix
     * @param mixed ${DS}eventObject
     * @param mixed ${DS}resourceModel
     * @param string ${DS}model
     * @param null ${DS}connection
     * @param \Magento\Framework\Model\ResourceModel\Db\AbstractDb|null ${DS}resource
     * 
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    public function __construct(
        \Magento\Framework\Data\Collection\EntityFactoryInterface ${DS}entityFactory,
        \Psr\Log\LoggerInterface ${DS}logger,
        \Magento\Framework\Data\Collection\Db\FetchStrategyInterface ${DS}fetchStrategy,
        \Magento\Framework\Event\ManagerInterface ${DS}eventManager,
        ${DS}mainTable,
        ${DS}eventPrefix,
        ${DS}eventObject,
        ${DS}resourceModel,
        ${DS}model = 'Magento\Framework\View\Element\UiComponent\DataProvider\Document',
        ${DS}connection = null,
        \Magento\Framework\Model\ResourceModel\Db\AbstractDb ${DS}resource = null
    ) {
        parent::__construct(
            ${DS}entityFactory,
            ${DS}logger,
            ${DS}fetchStrategy,
            ${DS}eventManager,
            ${DS}connection,
            ${DS}resource
        );
        ${DS}this->_eventPrefix = ${DS}eventPrefix;
        ${DS}this->_eventObject = ${DS}eventObject;
        ${DS}this->_init(${DS}model, ${DS}resourceModel);
        ${DS}this->setMainTable(${DS}mainTable);
    }

    /**
     * @return AggregationInterface
     */
    public function getAggregations()
    {
        return ${DS}this->aggregations;
    }

    /**
     * @param AggregationInterface ${DS}aggregations
     * @return ${DS}this
     */
    public function setAggregations(${DS}aggregations)
    {
        ${DS}this->aggregations = ${DS}aggregations;
    }


    /**
     * Retrieve all ids for collection
     * Backward compatibility with EAV collection
     *
     * @param int ${DS}limit
     * @param int ${DS}offset
     * @return array
     */
    public function getAllIds(${DS}limit = null, ${DS}offset = null)
    {
        return ${DS}this->getConnection()->fetchCol(${DS}this->_getAllIdsSelect(${DS}limit, ${DS}offset), ${DS}this->_bindParams);
    }

    /**
     * Get search criteria.
     *
     * @return \Magento\Framework\Api\SearchCriteriaInterface|null
     */
    public function getSearchCriteria()
    {
        return null;
    }

    /**
     * Set search criteria.
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface ${DS}searchCriteria
     * @return ${DS}this
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function setSearchCriteria(\Magento\Framework\Api\SearchCriteriaInterface ${DS}searchCriteria = null)
    {
        return ${DS}this;
    }

    /**
     * Get total count.
     *
     * @return int
     */
    public function getTotalCount()
    {
        return ${DS}this->getSize();
    }

    /**
     * Set total count.
     *
     * @param int ${DS}totalCount
     * @return ${DS}this
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function setTotalCount(${DS}totalCount)
    {
        return ${DS}this;
    }

    /**
     * Set items list.
     *
     * @param \Magento\Framework\Api\ExtensibleDataInterface[] ${DS}items
     * @return ${DS}this
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function setItems(array ${DS}items = null)
    {
        return ${DS}this;
    }
}