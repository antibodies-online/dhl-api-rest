<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressTrackingResponseShipmentsItem
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
    protected $shipmentTrackingNumber;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var string
     */
    protected $shipmentTimestamp;
    /**
     * DHL product code
     *
     * @var string
     */
    protected $productCode;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetails
     */
    protected $shipperDetails;
    /**
     * 
     *
     * @var SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetails
     */
    protected $receiverDetails;
    /**
     * 
     *
     * @var float
     */
    protected $totalWeight;
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
     * @var list<SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItem>
     */
    protected $events;
    /**
     * 
     *
     * @var float
     */
    protected $numberOfPieces;
    /**
     * 
     *
     * @var list<SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem>
     */
    protected $pieces;
    /**
     * 
     *
     * @var string
     */
    protected $estimatedDeliveryDate;
    /**
     * 
     *
     * @var list<string>
     */
    protected $childrenShipmentIdentificationNumbers;
    /**
     * controlled access data codes such as 'SHPR_CTY' for shipper's city, 'CNSGN_CTY' for consignee's city, 'SVP_URL' for service point URL, 'SVP_FAC' for service point facility code and 'SIGN_NM' for signatory name.
     *
     * @var list<string>
     */
    protected $controlledAccessDataCodes;
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
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getShipmentTimestamp(): string
    {
        return $this->shipmentTimestamp;
    }
    /**
     * 
     *
     * @param string $shipmentTimestamp
     *
     * @return self
     */
    public function setShipmentTimestamp(string $shipmentTimestamp): self
    {
        $this->initialized['shipmentTimestamp'] = true;
        $this->shipmentTimestamp = $shipmentTimestamp;
        return $this;
    }
    /**
     * DHL product code
     *
     * @return string
     */
    public function getProductCode(): string
    {
        return $this->productCode;
    }
    /**
     * DHL product code
     *
     * @param string $productCode
     *
     * @return self
     */
    public function setProductCode(string $productCode): self
    {
        $this->initialized['productCode'] = true;
        $this->productCode = $productCode;
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
     * 
     *
     * @return SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetails
     */
    public function getShipperDetails(): SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetails
    {
        return $this->shipperDetails;
    }
    /**
     * 
     *
     * @param SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetails $shipperDetails
     *
     * @return self
     */
    public function setShipperDetails(SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetails $shipperDetails): self
    {
        $this->initialized['shipperDetails'] = true;
        $this->shipperDetails = $shipperDetails;
        return $this;
    }
    /**
     * 
     *
     * @return SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetails
     */
    public function getReceiverDetails(): SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetails
    {
        return $this->receiverDetails;
    }
    /**
     * 
     *
     * @param SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetails $receiverDetails
     *
     * @return self
     */
    public function setReceiverDetails(SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetails $receiverDetails): self
    {
        $this->initialized['receiverDetails'] = true;
        $this->receiverDetails = $receiverDetails;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTotalWeight(): float
    {
        return $this->totalWeight;
    }
    /**
     * 
     *
     * @param float $totalWeight
     *
     * @return self
     */
    public function setTotalWeight(float $totalWeight): self
    {
        $this->initialized['totalWeight'] = true;
        $this->totalWeight = $totalWeight;
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
     * @return list<SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItem>
     */
    public function getEvents(): array
    {
        return $this->events;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItem> $events
     *
     * @return self
     */
    public function setEvents(array $events): self
    {
        $this->initialized['events'] = true;
        $this->events = $events;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getNumberOfPieces(): float
    {
        return $this->numberOfPieces;
    }
    /**
     * 
     *
     * @param float $numberOfPieces
     *
     * @return self
     */
    public function setNumberOfPieces(float $numberOfPieces): self
    {
        $this->initialized['numberOfPieces'] = true;
        $this->numberOfPieces = $numberOfPieces;
        return $this;
    }
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem>
     */
    public function getPieces(): array
    {
        return $this->pieces;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressTrackingResponseShipmentsItemPiecesItem> $pieces
     *
     * @return self
     */
    public function setPieces(array $pieces): self
    {
        $this->initialized['pieces'] = true;
        $this->pieces = $pieces;
        return $this;
    }
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
     * 
     *
     * @return list<string>
     */
    public function getChildrenShipmentIdentificationNumbers(): array
    {
        return $this->childrenShipmentIdentificationNumbers;
    }
    /**
     * 
     *
     * @param list<string> $childrenShipmentIdentificationNumbers
     *
     * @return self
     */
    public function setChildrenShipmentIdentificationNumbers(array $childrenShipmentIdentificationNumbers): self
    {
        $this->initialized['childrenShipmentIdentificationNumbers'] = true;
        $this->childrenShipmentIdentificationNumbers = $childrenShipmentIdentificationNumbers;
        return $this;
    }
    /**
     * controlled access data codes such as 'SHPR_CTY' for shipper's city, 'CNSGN_CTY' for consignee's city, 'SVP_URL' for service point URL, 'SVP_FAC' for service point facility code and 'SIGN_NM' for signatory name.
     *
     * @return list<string>
     */
    public function getControlledAccessDataCodes(): array
    {
        return $this->controlledAccessDataCodes;
    }
    /**
     * controlled access data codes such as 'SHPR_CTY' for shipper's city, 'CNSGN_CTY' for consignee's city, 'SVP_URL' for service point URL, 'SVP_FAC' for service point facility code and 'SIGN_NM' for signatory name.
     *
     * @param list<string> $controlledAccessDataCodes
     *
     * @return self
     */
    public function setControlledAccessDataCodes(array $controlledAccessDataCodes): self
    {
        $this->initialized['controlledAccessDataCodes'] = true;
        $this->controlledAccessDataCodes = $controlledAccessDataCodes;
        return $this;
    }
}