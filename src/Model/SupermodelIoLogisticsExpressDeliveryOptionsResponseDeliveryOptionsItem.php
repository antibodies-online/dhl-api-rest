<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItem
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
     * The name of delivery option"
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var list<SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItemParametersItem>
     */
    protected $parameters;
    /**
     * Returned only for type=servicePoint
     *
     * @var string
     */
    protected $servicePointURL;
    /**
     * Returned only for type=scheduleDelivery and vacationHold. Important: the start and end datetime field values must be among the options provided in GET delivery-option response.
     *
     * @var list<SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItemDeliveryWindowsItem>
     */
    protected $deliveryWindows;
    /**
     * The name of delivery option"
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * The name of delivery option"
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItemParametersItem>
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItemParametersItem> $parameters
     *
     * @return self
     */
    public function setParameters(array $parameters): self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;
        return $this;
    }
    /**
     * Returned only for type=servicePoint
     *
     * @return string
     */
    public function getServicePointURL(): string
    {
        return $this->servicePointURL;
    }
    /**
     * Returned only for type=servicePoint
     *
     * @param string $servicePointURL
     *
     * @return self
     */
    public function setServicePointURL(string $servicePointURL): self
    {
        $this->initialized['servicePointURL'] = true;
        $this->servicePointURL = $servicePointURL;
        return $this;
    }
    /**
     * Returned only for type=scheduleDelivery and vacationHold. Important: the start and end datetime field values must be among the options provided in GET delivery-option response.
     *
     * @return list<SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItemDeliveryWindowsItem>
     */
    public function getDeliveryWindows(): array
    {
        return $this->deliveryWindows;
    }
    /**
     * Returned only for type=scheduleDelivery and vacationHold. Important: the start and end datetime field values must be among the options provided in GET delivery-option response.
     *
     * @param list<SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItemDeliveryWindowsItem> $deliveryWindows
     *
     * @return self
     */
    public function setDeliveryWindows(array $deliveryWindows): self
    {
        $this->initialized['deliveryWindows'] = true;
        $this->deliveryWindows = $deliveryWindows;
        return $this;
    }
}