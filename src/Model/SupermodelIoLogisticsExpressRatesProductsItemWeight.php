<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressRatesProductsItemWeight
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
     * The dimensional weight of the shipment
     *
     * @var float
     */
    protected $volumetric;
    /**
     * The quoted weight of the shipment
     *
     * @var float
     */
    protected $provided;
    /**
     * The unit of measurement for the dimensions of the package.
     *
     * @var string
     */
    protected $unitOfMeasurement;
    /**
     * The dimensional weight of the shipment
     *
     * @return float
     */
    public function getVolumetric(): float
    {
        return $this->volumetric;
    }
    /**
     * The dimensional weight of the shipment
     *
     * @param float $volumetric
     *
     * @return self
     */
    public function setVolumetric(float $volumetric): self
    {
        $this->initialized['volumetric'] = true;
        $this->volumetric = $volumetric;
        return $this;
    }
    /**
     * The quoted weight of the shipment
     *
     * @return float
     */
    public function getProvided(): float
    {
        return $this->provided;
    }
    /**
     * The quoted weight of the shipment
     *
     * @param float $provided
     *
     * @return self
     */
    public function setProvided(float $provided): self
    {
        $this->initialized['provided'] = true;
        $this->provided = $provided;
        return $this;
    }
    /**
     * The unit of measurement for the dimensions of the package.
     *
     * @return string
     */
    public function getUnitOfMeasurement(): string
    {
        return $this->unitOfMeasurement;
    }
    /**
     * The unit of measurement for the dimensions of the package.
     *
     * @param string $unitOfMeasurement
     *
     * @return self
     */
    public function setUnitOfMeasurement(string $unitOfMeasurement): self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
}