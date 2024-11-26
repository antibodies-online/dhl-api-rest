<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressReferenceData extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The reference data dataset name
     *
     * @var string
     */
    protected $datasetName;
    /**
     * 
     *
     * @var string
     */
    protected $dataSetCaptions;
    /**
     * 
     *
     * @var list<list<SupermodelIoLogisticsExpressReferenceDataDataItemItem>>
     */
    protected $data;
    /**
     * The reference data dataset name
     *
     * @return string
     */
    public function getDatasetName(): string
    {
        return $this->datasetName;
    }
    /**
     * The reference data dataset name
     *
     * @param string $datasetName
     *
     * @return self
     */
    public function setDatasetName(string $datasetName): self
    {
        $this->initialized['datasetName'] = true;
        $this->datasetName = $datasetName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDataSetCaptions(): string
    {
        return $this->dataSetCaptions;
    }
    /**
     * 
     *
     * @param string $dataSetCaptions
     *
     * @return self
     */
    public function setDataSetCaptions(string $dataSetCaptions): self
    {
        $this->initialized['dataSetCaptions'] = true;
        $this->dataSetCaptions = $dataSetCaptions;
        return $this;
    }
    /**
     * 
     *
     * @return list<list<SupermodelIoLogisticsExpressReferenceDataDataItemItem>>
     */
    public function getData(): array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param list<list<SupermodelIoLogisticsExpressReferenceDataDataItemItem>> $data
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}