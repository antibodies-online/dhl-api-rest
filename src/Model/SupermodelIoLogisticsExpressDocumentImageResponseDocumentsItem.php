<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressDocumentImageResponseDocumentsItem
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
     * Shipment Tracking Number
     *
     * @var string
     */
    protected $shipmentTrackingNumber;
    /**
     * Identifies type of the document like commercial invoice or waybill, or archived zip documents
     *
     * @var string
     */
    protected $typeCode;
    /**
     * Clearance code or document function whether for import, export or both.  Returned only for customs-entry
     *
     * @var string
     */
    protected $function;
    /**
     * Identifies image format the document is created in, like PDF, TIFF, or ZIP
     *
     * @var string
     */
    protected $encodingFormat;
    /**
     * Contains base64 encoded document image or archived zip
     *
     * @var string
     */
    protected $content;
    /**
     * Shipment Tracking Number
     *
     * @return string
     */
    public function getShipmentTrackingNumber(): string
    {
        return $this->shipmentTrackingNumber;
    }
    /**
     * Shipment Tracking Number
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
     * Identifies type of the document like commercial invoice or waybill, or archived zip documents
     *
     * @return string
     */
    public function getTypeCode(): string
    {
        return $this->typeCode;
    }
    /**
     * Identifies type of the document like commercial invoice or waybill, or archived zip documents
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
     * Clearance code or document function whether for import, export or both.  Returned only for customs-entry
     *
     * @return string
     */
    public function getFunction(): string
    {
        return $this->function;
    }
    /**
     * Clearance code or document function whether for import, export or both.  Returned only for customs-entry
     *
     * @param string $function
     *
     * @return self
     */
    public function setFunction(string $function): self
    {
        $this->initialized['function'] = true;
        $this->function = $function;
        return $this;
    }
    /**
     * Identifies image format the document is created in, like PDF, TIFF, or ZIP
     *
     * @return string
     */
    public function getEncodingFormat(): string
    {
        return $this->encodingFormat;
    }
    /**
     * Identifies image format the document is created in, like PDF, TIFF, or ZIP
     *
     * @param string $encodingFormat
     *
     * @return self
     */
    public function setEncodingFormat(string $encodingFormat): self
    {
        $this->initialized['encodingFormat'] = true;
        $this->encodingFormat = $encodingFormat;
        return $this;
    }
    /**
     * Contains base64 encoded document image or archived zip
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
    /**
     * Contains base64 encoded document image or archived zip
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }
}