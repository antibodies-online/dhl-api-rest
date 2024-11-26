<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponse
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
     * URL where the request has been sent to
     *
     * @var string
     */
    protected $url;
    /**
     * Here you will receive Shipment Identification Number of your package
     *
     * @var string
     */
    protected $shipmentTrackingNumber;
    /**
     * If you requested pickup for your shipment you can use this URL to cancel the pickup
     *
     * @var string
     */
    protected $cancelPickupUrl;
    /**
     * You can use ths URL to track your shipment
     *
     * @var string
     */
    protected $trackingUrl;
    /**
     * If you asked for pickup service here you will find Dispach Confirmation Number which identifies your pickup booking
     *
     * @var string
     */
    protected $dispatchConfirmationNumber;
    /**
     * Here you can find information for all pieces your shipment is having like Piece Identification Number 
     *
     * @var list<SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItem>
     */
    protected $packages;
    /**
     * Here you can find all documents created for the shipment like Transport and WaybillDoc labels, Invoice, Receipt
     *
     * @var list<SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsItem>
     */
    protected $documents;
    /**
     * In this field you will find the On Demand Delivery (ODD) URL link if requested
     *
     * @var string
     */
    protected $onDemandDeliveryURL;
    /**
     * Here you can find additional information related to your shipment when you ask for it in the request
     *
     * @var list<SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem>
     */
    protected $shipmentDetails;
    /**
     * Here you can find rates related to your shipment
     *
     * @var list<SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItem>
     */
    protected $shipmentCharges;
    /**
     * Here you can find barcode details in base64
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo
     */
    protected $barcodeInfo;
    /**
     * Here you can find details of estimated delivery date
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentResponseEstimatedDeliveryDate
     */
    protected $estimatedDeliveryDate;
    /**
     * 
     *
     * @var list<string>
     */
    protected $warnings;
    /**
     * URL where the request has been sent to
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * URL where the request has been sent to
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * Here you will receive Shipment Identification Number of your package
     *
     * @return string
     */
    public function getShipmentTrackingNumber(): string
    {
        return $this->shipmentTrackingNumber;
    }
    /**
     * Here you will receive Shipment Identification Number of your package
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
     * If you requested pickup for your shipment you can use this URL to cancel the pickup
     *
     * @return string
     */
    public function getCancelPickupUrl(): string
    {
        return $this->cancelPickupUrl;
    }
    /**
     * If you requested pickup for your shipment you can use this URL to cancel the pickup
     *
     * @param string $cancelPickupUrl
     *
     * @return self
     */
    public function setCancelPickupUrl(string $cancelPickupUrl): self
    {
        $this->initialized['cancelPickupUrl'] = true;
        $this->cancelPickupUrl = $cancelPickupUrl;
        return $this;
    }
    /**
     * You can use ths URL to track your shipment
     *
     * @return string
     */
    public function getTrackingUrl(): string
    {
        return $this->trackingUrl;
    }
    /**
     * You can use ths URL to track your shipment
     *
     * @param string $trackingUrl
     *
     * @return self
     */
    public function setTrackingUrl(string $trackingUrl): self
    {
        $this->initialized['trackingUrl'] = true;
        $this->trackingUrl = $trackingUrl;
        return $this;
    }
    /**
     * If you asked for pickup service here you will find Dispach Confirmation Number which identifies your pickup booking
     *
     * @return string
     */
    public function getDispatchConfirmationNumber(): string
    {
        return $this->dispatchConfirmationNumber;
    }
    /**
     * If you asked for pickup service here you will find Dispach Confirmation Number which identifies your pickup booking
     *
     * @param string $dispatchConfirmationNumber
     *
     * @return self
     */
    public function setDispatchConfirmationNumber(string $dispatchConfirmationNumber): self
    {
        $this->initialized['dispatchConfirmationNumber'] = true;
        $this->dispatchConfirmationNumber = $dispatchConfirmationNumber;
        return $this;
    }
    /**
     * Here you can find information for all pieces your shipment is having like Piece Identification Number 
     *
     * @return list<SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItem>
     */
    public function getPackages(): array
    {
        return $this->packages;
    }
    /**
     * Here you can find information for all pieces your shipment is having like Piece Identification Number 
     *
     * @param list<SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItem> $packages
     *
     * @return self
     */
    public function setPackages(array $packages): self
    {
        $this->initialized['packages'] = true;
        $this->packages = $packages;
        return $this;
    }
    /**
     * Here you can find all documents created for the shipment like Transport and WaybillDoc labels, Invoice, Receipt
     *
     * @return list<SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsItem>
     */
    public function getDocuments(): array
    {
        return $this->documents;
    }
    /**
     * Here you can find all documents created for the shipment like Transport and WaybillDoc labels, Invoice, Receipt
     *
     * @param list<SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsItem> $documents
     *
     * @return self
     */
    public function setDocuments(array $documents): self
    {
        $this->initialized['documents'] = true;
        $this->documents = $documents;
        return $this;
    }
    /**
     * In this field you will find the On Demand Delivery (ODD) URL link if requested
     *
     * @return string
     */
    public function getOnDemandDeliveryURL(): string
    {
        return $this->onDemandDeliveryURL;
    }
    /**
     * In this field you will find the On Demand Delivery (ODD) URL link if requested
     *
     * @param string $onDemandDeliveryURL
     *
     * @return self
     */
    public function setOnDemandDeliveryURL(string $onDemandDeliveryURL): self
    {
        $this->initialized['onDemandDeliveryURL'] = true;
        $this->onDemandDeliveryURL = $onDemandDeliveryURL;
        return $this;
    }
    /**
     * Here you can find additional information related to your shipment when you ask for it in the request
     *
     * @return list<SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem>
     */
    public function getShipmentDetails(): array
    {
        return $this->shipmentDetails;
    }
    /**
     * Here you can find additional information related to your shipment when you ask for it in the request
     *
     * @param list<SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem> $shipmentDetails
     *
     * @return self
     */
    public function setShipmentDetails(array $shipmentDetails): self
    {
        $this->initialized['shipmentDetails'] = true;
        $this->shipmentDetails = $shipmentDetails;
        return $this;
    }
    /**
     * Here you can find rates related to your shipment
     *
     * @return list<SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItem>
     */
    public function getShipmentCharges(): array
    {
        return $this->shipmentCharges;
    }
    /**
     * Here you can find rates related to your shipment
     *
     * @param list<SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItem> $shipmentCharges
     *
     * @return self
     */
    public function setShipmentCharges(array $shipmentCharges): self
    {
        $this->initialized['shipmentCharges'] = true;
        $this->shipmentCharges = $shipmentCharges;
        return $this;
    }
    /**
     * Here you can find barcode details in base64
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo
     */
    public function getBarcodeInfo(): SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo
    {
        return $this->barcodeInfo;
    }
    /**
     * Here you can find barcode details in base64
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo $barcodeInfo
     *
     * @return self
     */
    public function setBarcodeInfo(SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo $barcodeInfo): self
    {
        $this->initialized['barcodeInfo'] = true;
        $this->barcodeInfo = $barcodeInfo;
        return $this;
    }
    /**
     * Here you can find details of estimated delivery date
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentResponseEstimatedDeliveryDate
     */
    public function getEstimatedDeliveryDate(): SupermodelIoLogisticsExpressCreateShipmentResponseEstimatedDeliveryDate
    {
        return $this->estimatedDeliveryDate;
    }
    /**
     * Here you can find details of estimated delivery date
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentResponseEstimatedDeliveryDate $estimatedDeliveryDate
     *
     * @return self
     */
    public function setEstimatedDeliveryDate(SupermodelIoLogisticsExpressCreateShipmentResponseEstimatedDeliveryDate $estimatedDeliveryDate): self
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