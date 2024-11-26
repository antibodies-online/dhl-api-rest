<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItem
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
     * Here is provided each piece its Identification number
     *
     * @var string
     */
    protected $trackingNumber;
    /**
     * You can use ths URL to track your shipment by Piece Identification Number
     *
     * @var string
     */
    protected $trackingUrl;
    /**
     * Here is provided each piece volumetric/ dimensional weight
     *
     * @var float
     */
    protected $volumetricWeight;
    /**
     * Here you can find all documents created for the piece's QRcode
     *
     * @var list<SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItemDocumentsItem>
     */
    protected $documents;
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
     * Here is provided each piece its Identification number
     *
     * @return string
     */
    public function getTrackingNumber(): string
    {
        return $this->trackingNumber;
    }
    /**
     * Here is provided each piece its Identification number
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
     * You can use ths URL to track your shipment by Piece Identification Number
     *
     * @return string
     */
    public function getTrackingUrl(): string
    {
        return $this->trackingUrl;
    }
    /**
     * You can use ths URL to track your shipment by Piece Identification Number
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
     * Here is provided each piece volumetric/ dimensional weight
     *
     * @return float
     */
    public function getVolumetricWeight(): float
    {
        return $this->volumetricWeight;
    }
    /**
     * Here is provided each piece volumetric/ dimensional weight
     *
     * @param float $volumetricWeight
     *
     * @return self
     */
    public function setVolumetricWeight(float $volumetricWeight): self
    {
        $this->initialized['volumetricWeight'] = true;
        $this->volumetricWeight = $volumetricWeight;
        return $this;
    }
    /**
     * Here you can find all documents created for the piece's QRcode
     *
     * @return list<SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItemDocumentsItem>
     */
    public function getDocuments(): array
    {
        return $this->documents;
    }
    /**
     * Here you can find all documents created for the piece's QRcode
     *
     * @param list<SupermodelIoLogisticsExpressCreateShipmentResponsePackagesItemDocumentsItem> $documents
     *
     * @return self
     */
    public function setDocuments(array $documents): self
    {
        $this->initialized['documents'] = true;
        $this->documents = $documents;
        return $this;
    }
}