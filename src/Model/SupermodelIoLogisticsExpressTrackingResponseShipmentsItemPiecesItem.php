<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem
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
     * @var float
     */
    protected $number;
    /**
     * 
     *
     * @var string
     */
    protected $typeCode;
    /**
     * 
     *
     * @var string
     */
    protected $shipmentTrackingNumber;
    /**
     * 
     *
     * @var string
     */
    protected $trackingNumber;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * The weight of the package.
     *
     * @var float
     */
    protected $weight;
    /**
     * The weight of the package.
     *
     * @var float
     */
    protected $dimensionalWeight;
    /**
     * The weight of the package.
     *
     * @var float
     */
    protected $actualWeight;
    /**
     * Dimensions of the package
     *
     * @var SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemDimensions
     */
    protected $dimensions;
    /**
     * Dimensions of the package
     *
     * @var SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemActualDimensions
     */
    protected $actualDimensions;
    /**
     * 
     *
     * @var string
     */
    protected $unitOfMeasurements;
    /**
     * 
     *
     * @var list<SupermodelIoLogisticsExpressReference>
     */
    protected $shipperReferences;
    /**
     * 
     *
     * @var list<SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItem>
     */
    protected $events;
    /**
     * 
     *
     * @return float
     */
    public function getNumber(): float
    {
        return $this->number;
    }
    /**
     * 
     *
     * @param float $number
     *
     * @return self
     */
    public function setNumber(float $number): self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTypeCode(): string
    {
        return $this->typeCode;
    }
    /**
     * 
     *
     * @param string $typeCode
     *
     * @return self
     */
    public function setTypeCode(string $typeCode): self
    {
        $this->initialized['typeCode'] = true;
        $this->typeCode = $typeCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getShipmentTrackingNumber(): string
    {
        return $this->shipmentTrackingNumber;
    }
    /**
     * 
     *
     * @param string $shipmentTrackingNumber
     *
     * @return self
     */
    public function setShipmentTrackingNumber(string $shipmentTrackingNumber): self
    {
        $this->initialized['shipmentTrackingNumber'] = true;
        $this->shipmentTrackingNumber = $shipmentTrackingNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTrackingNumber(): string
    {
        return $this->trackingNumber;
    }
    /**
     * 
     *
     * @param string $trackingNumber
     *
     * @return self
     */
    public function setTrackingNumber(string $trackingNumber): self
    {
        $this->initialized['trackingNumber'] = true;
        $this->trackingNumber = $trackingNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * The weight of the package.
     *
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }
    /**
     * The weight of the package.
     *
     * @param float $weight
     *
     * @return self
     */
    public function setWeight(float $weight): self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
     * The weight of the package.
     *
     * @return float
     */
    public function getDimensionalWeight(): float
    {
        return $this->dimensionalWeight;
    }
    /**
     * The weight of the package.
     *
     * @param float $dimensionalWeight
     *
     * @return self
     */
    public function setDimensionalWeight(float $dimensionalWeight): self
    {
        $this->initialized['dimensionalWeight'] = true;
        $this->dimensionalWeight = $dimensionalWeight;
        return $this;
    }
    /**
     * The weight of the package.
     *
     * @return float
     */
    public function getActualWeight(): float
    {
        return $this->actualWeight;
    }
    /**
     * The weight of the package.
     *
     * @param float $actualWeight
     *
     * @return self
     */
    public function setActualWeight(float $actualWeight): self
    {
        $this->initialized['actualWeight'] = true;
        $this->actualWeight = $actualWeight;
        return $this;
    }
    /**
     * Dimensions of the package
     *
     * @return SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemDimensions
     */
    public function getDimensions(): SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemDimensions
    {
        return $this->dimensions;
    }
    /**
     * Dimensions of the package
     *
     * @param SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemDimensions $dimensions
     *
     * @return self
     */
    public function setDimensions(SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemDimensions $dimensions): self
    {
        $this->initialized['dimensions'] = true;
        $this->dimensions = $dimensions;
        return $this;
    }
    /**
     * Dimensions of the package
     *
     * @return SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemActualDimensions
     */
    public function getActualDimensions(): SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemActualDimensions
    {
        return $this->actualDimensions;
    }
    /**
     * Dimensions of the package
     *
     * @param SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemActualDimensions $actualDimensions
     *
     * @return self
     */
    public function setActualDimensions(SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemActualDimensions $actualDimensions): self
    {
        $this->initialized['actualDimensions'] = true;
        $this->actualDimensions = $actualDimensions;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUnitOfMeasurements(): string
    {
        return $this->unitOfMeasurements;
    }
    /**
     * 
     *
     * @param string $unitOfMeasurements
     *
     * @return self
     */
    public function setUnitOfMeasurements(string $unitOfMeasurements): self
    {
        $this->initialized['unitOfMeasurements'] = true;
        $this->unitOfMeasurements = $unitOfMeasurements;
        return $this;
    }
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressReference>
     */
    public function getShipperReferences(): array
    {
        return $this->shipperReferences;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressReference> $shipperReferences
     *
     * @return self
     */
    public function setShipperReferences(array $shipperReferences): self
    {
        $this->initialized['shipperReferences'] = true;
        $this->shipperReferences = $shipperReferences;
        return $this;
    }
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItem>
     */
    public function getEvents(): array
    {
        return $this->events;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItemEventsItem> $events
     *
     * @return self
     */
    public function setEvents(array $events): self
    {
        $this->initialized['events'] = true;
        $this->events = $events;
        return $this;
    }
}