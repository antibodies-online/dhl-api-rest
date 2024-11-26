<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponseEstimatedDeliveryDate
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
     * 
     *
     * @var string
     */
    protected $estimatedDeliveryDate;
    /**
     * EDD type
     *
     * @var string
     */
    protected $estimatedDeliveryType;
    /**
     * 
     *
     * @return string
     */
    public function getEstimatedDeliveryDate(): string
    {
        return $this->estimatedDeliveryDate;
    }
    /**
     * 
     *
     * @param string $estimatedDeliveryDate
     *
     * @return self
     */
    public function setEstimatedDeliveryDate(string $estimatedDeliveryDate): self
    {
        $this->initialized['estimatedDeliveryDate'] = true;
        $this->estimatedDeliveryDate = $estimatedDeliveryDate;
        return $this;
    }
    /**
     * EDD type
     *
     * @return string
     */
    public function getEstimatedDeliveryType(): string
    {
        return $this->estimatedDeliveryType;
    }
    /**
     * EDD type
     *
     * @param string $estimatedDeliveryType
     *
     * @return self
     */
    public function setEstimatedDeliveryType(string $estimatedDeliveryType): self
    {
        $this->initialized['estimatedDeliveryType'] = true;
        $this->estimatedDeliveryType = $estimatedDeliveryType;
        return $this;
    }
}