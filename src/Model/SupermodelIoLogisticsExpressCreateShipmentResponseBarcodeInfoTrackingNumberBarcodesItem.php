<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponseBarcodeInfoTrackingNumberBarcodesItem
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
     * Piece serial number
     *
     * @var float
     */
    protected $referenceNumber;
    /**
     * Barcode base4 image of each piece of the shipment
     *
     * @var string
     */
    protected $trackingNumberBarcodeContent;
    /**
     * Piece serial number
     *
     * @return float
     */
    public function getReferenceNumber(): float
    {
        return $this->referenceNumber;
    }
    /**
     * Piece serial number
     *
     * @param float $referenceNumber
     *
     * @return self
     */
    public function setReferenceNumber(float $referenceNumber): self
    {
        $this->initialized['referenceNumber'] = true;
        $this->referenceNumber = $referenceNumber;
        return $this;
    }
    /**
     * Barcode base4 image of each piece of the shipment
     *
     * @return string
     */
    public function getTrackingNumberBarcodeContent(): string
    {
        return $this->trackingNumberBarcodeContent;
    }
    /**
     * Barcode base4 image of each piece of the shipment
     *
     * @param string $trackingNumberBarcodeContent
     *
     * @return self
     */
    public function setTrackingNumberBarcodeContent(string $trackingNumberBarcodeContent): self
    {
        $this->initialized['trackingNumberBarcodeContent'] = true;
        $this->trackingNumberBarcodeContent = $trackingNumberBarcodeContent;
        return $this;
    }
}