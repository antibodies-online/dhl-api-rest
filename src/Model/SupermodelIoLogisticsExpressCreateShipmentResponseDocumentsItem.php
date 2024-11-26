<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponseDocumentsItem
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
     * Identifie image format the document is created in, like PDF, JPG etc.
     *
     * @var string
     */
    protected $imageFormat;
    /**
     * Contains base64 encoded document image
     *
     * @var string
     */
    protected $content;
    /**
     * Identifie type of the document, like invoice, label or receipt
     *
     * @var string
     */
    protected $typeCode;
    /**
     * Package reference number
     *
     * @var float
     */
    protected $packageReferenceNumber;
    /**
     * Identifie image format the document is created in, like PDF, JPG etc.
     *
     * @return string
     */
    public function getImageFormat(): string
    {
        return $this->imageFormat;
    }
    /**
     * Identifie image format the document is created in, like PDF, JPG etc.
     *
     * @param string $imageFormat
     *
     * @return self
     */
    public function setImageFormat(string $imageFormat): self
    {
        $this->initialized['imageFormat'] = true;
        $this->imageFormat = $imageFormat;
        return $this;
    }
    /**
     * Contains base64 encoded document image
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
    /**
     * Contains base64 encoded document image
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
    /**
     * Identifie type of the document, like invoice, label or receipt
     *
     * @return string
     */
    public function getTypeCode(): string
    {
        return $this->typeCode;
    }
    /**
     * Identifie type of the document, like invoice, label or receipt
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
     * Package reference number
     *
     * @return float
     */
    public function getPackageReferenceNumber(): float
    {
        return $this->packageReferenceNumber;
    }
    /**
     * Package reference number
     *
     * @param float $packageReferenceNumber
     *
     * @return self
     */
    public function setPackageReferenceNumber(float $packageReferenceNumber): self
    {
        $this->initialized['packageReferenceNumber'] = true;
        $this->packageReferenceNumber = $packageReferenceNumber;
        return $this;
    }
}