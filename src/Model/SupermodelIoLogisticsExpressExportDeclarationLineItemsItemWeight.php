<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeight
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
     * Please enter the net weight value
     *
     * @var float
     */
    protected $netValue;
    /**
     * Please enter the gross weight value
     *
     * @var float
     */
    protected $grossValue;
    /**
     * Please enter the net weight value
     *
     * @return float
     */
    public function getNetValue(): float
    {
        return $this->netValue;
    }
    /**
     * Please enter the net weight value
     *
     * @param float $netValue
     *
     * @return self
     */
    public function setNetValue(float $netValue): self
    {
        $this->initialized['netValue'] = true;
        $this->netValue = $netValue;
        return $this;
    }
    /**
     * Please enter the gross weight value
     *
     * @return float
     */
    public function getGrossValue(): float
    {
        return $this->grossValue;
    }
    /**
     * Please enter the gross weight value
     *
     * @param float $grossValue
     *
     * @return self
     */
    public function setGrossValue(float $grossValue): self
    {
        $this->initialized['grossValue'] = true;
        $this->grossValue = $grossValue;
        return $this;
    }
}