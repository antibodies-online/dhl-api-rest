<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressDeliveryOptionsResponse
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
     * Contains available deliveryOptions for the shipment
     *
     * @var list<SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItem>
     */
    protected $deliveryOptions;
    /**
     * 
     *
     * @var list<string>
     */
    protected $warnings;
    /**
     * Contains available deliveryOptions for the shipment
     *
     * @return list<SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItem>
     */
    public function getDeliveryOptions(): array
    {
        return $this->deliveryOptions;
    }
    /**
     * Contains available deliveryOptions for the shipment
     *
     * @param list<SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItem> $deliveryOptions
     *
     * @return self
     */
    public function setDeliveryOptions(array $deliveryOptions): self
    {
        $this->initialized['deliveryOptions'] = true;
        $this->deliveryOptions = $deliveryOptions;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getWarnings(): array
    {
        return $this->warnings;
    }
    /**
     * 
     *
     * @param list<string> $warnings
     *
     * @return self
     */
    public function setWarnings(array $warnings): self
    {
        $this->initialized['warnings'] = true;
        $this->warnings = $warnings;
        return $this;
    }
}