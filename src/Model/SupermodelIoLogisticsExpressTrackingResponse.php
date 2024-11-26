<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressTrackingResponse
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
     * @var list<SupermodelIoLogisticsExpressTrackingResponseShipmentsItem>
     */
    protected $shipments;
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressTrackingResponseShipmentsItem>
     */
    public function getShipments(): array
    {
        return $this->shipments;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressTrackingResponseShipmentsItem> $shipments
     *
     * @return self
     */
    public function setShipments(array $shipments): self
    {
        $this->initialized['shipments'] = true;
        $this->shipments = $shipments;
        return $this;
    }
}