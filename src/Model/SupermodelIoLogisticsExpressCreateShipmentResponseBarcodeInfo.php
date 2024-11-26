<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfo
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
     * Barcode base64 encoded airwaybill number
     *
     * @var string
     */
    protected $shipmentIdentificationNumberBarcodeContent;
    /**
     * Barcode base64 image of origin service area code, destination service area code and global product code
     *
     * @var string
     */
    protected $originDestinationServiceTypeBarcodeContent;
    /**
     * Barcode base64 image of DHL routing code
     *
     * @var string
     */
    protected $routingBarcodeContent;
    /**
     * Here you can find barcode details for each piece
     *
     * @var list<SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoTrackingNumberBarcodesItem>
     */
    protected $trackingNumberBarcodes;
    /**
     * Barcode base64 encoded airwaybill number
     *
     * @return string
     */
    public function getShipmentIdentificationNumberBarcodeContent(): string
    {
        return $this->shipmentIdentificationNumberBarcodeContent;
    }
    /**
     * Barcode base64 encoded airwaybill number
     *
     * @param string $shipmentIdentificationNumberBarcodeContent
     *
     * @return self
     */
    public function setShipmentIdentificationNumberBarcodeContent(string $shipmentIdentificationNumberBarcodeContent): self
    {
        $this->initialized['shipmentIdentificationNumberBarcodeContent'] = true;
        $this->shipmentIdentificationNumberBarcodeContent = $shipmentIdentificationNumberBarcodeContent;
        return $this;
    }
    /**
     * Barcode base64 image of origin service area code, destination service area code and global product code
     *
     * @return string
     */
    public function getOriginDestinationServiceTypeBarcodeContent(): string
    {
        return $this->originDestinationServiceTypeBarcodeContent;
    }
    /**
     * Barcode base64 image of origin service area code, destination service area code and global product code
     *
     * @param string $originDestinationServiceTypeBarcodeContent
     *
     * @return self
     */
    public function setOriginDestinationServiceTypeBarcodeContent(string $originDestinationServiceTypeBarcodeContent): self
    {
        $this->initialized['originDestinationServiceTypeBarcodeContent'] = true;
        $this->originDestinationServiceTypeBarcodeContent = $originDestinationServiceTypeBarcodeContent;
        return $this;
    }
    /**
     * Barcode base64 image of DHL routing code
     *
     * @return string
     */
    public function getRoutingBarcodeContent(): string
    {
        return $this->routingBarcodeContent;
    }
    /**
     * Barcode base64 image of DHL routing code
     *
     * @param string $routingBarcodeContent
     *
     * @return self
     */
    public function setRoutingBarcodeContent(string $routingBarcodeContent): self
    {
        $this->initialized['routingBarcodeContent'] = true;
        $this->routingBarcodeContent = $routingBarcodeContent;
        return $this;
    }
    /**
     * Here you can find barcode details for each piece
     *
     * @return list<SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoTrackingNumberBarcodesItem>
     */
    public function getTrackingNumberBarcodes(): array
    {
        return $this->trackingNumberBarcodes;
    }
    /**
     * Here you can find barcode details for each piece
     *
     * @param list<SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoTrackingNumberBarcodesItem> $trackingNumberBarcodes
     *
     * @return self
     */
    public function setTrackingNumberBarcodes(array $trackingNumberBarcodes): self
    {
        $this->initialized['trackingNumberBarcodes'] = true;
        $this->trackingNumberBarcodes = $trackingNumberBarcodes;
        return $this;
    }
}