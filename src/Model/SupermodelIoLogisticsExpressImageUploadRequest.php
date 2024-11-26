<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressImageUploadRequest
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
    protected $originalPlannedShippingDate;
    /**
     * Please enter all the DHL Express accounts and types to be used for this shipment
     *
     * @var list<SupermodelIoLogisticsExpressAccount>
     */
    protected $accounts;
    /**
     * Please enter DHL Express Global Product code
     *
     * @var string
     */
    protected $productCode;
    /**
     * This section is to support multiple base64 encoded string with the image of export documentation for Paperless Trade images. When an invalid base64 encoded string is provided, an error message will be returned
     *
     * @var list<SupermodelIoLogisticsExpressDocumentImagesItem>
     */
    protected $documentImages;
    /**
     * 
     *
     * @return string
     */
    public function getOriginalPlannedShippingDate(): string
    {
        return $this->originalPlannedShippingDate;
    }
    /**
     * 
     *
     * @param string $originalPlannedShippingDate
     *
     * @return self
     */
    public function setOriginalPlannedShippingDate(string $originalPlannedShippingDate): self
    {
        $this->initialized['originalPlannedShippingDate'] = true;
        $this->originalPlannedShippingDate = $originalPlannedShippingDate;
        return $this;
    }
    /**
     * Please enter all the DHL Express accounts and types to be used for this shipment
     *
     * @return list<SupermodelIoLogisticsExpressAccount>
     */
    public function getAccounts(): array
    {
        return $this->accounts;
    }
    /**
     * Please enter all the DHL Express accounts and types to be used for this shipment
     *
     * @param list<SupermodelIoLogisticsExpressAccount> $accounts
     *
     * @return self
     */
    public function setAccounts(array $accounts): self
    {
        $this->initialized['accounts'] = true;
        $this->accounts = $accounts;
        return $this;
    }
    /**
     * Please enter DHL Express Global Product code
     *
     * @return string
     */
    public function getProductCode(): string
    {
        return $this->productCode;
    }
    /**
     * Please enter DHL Express Global Product code
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
     * This section is to support multiple base64 encoded string with the image of export documentation for Paperless Trade images. When an invalid base64 encoded string is provided, an error message will be returned
     *
     * @return list<SupermodelIoLogisticsExpressDocumentImagesItem>
     */
    public function getDocumentImages(): array
    {
        return $this->documentImages;
    }
    /**
     * This section is to support multiple base64 encoded string with the image of export documentation for Paperless Trade images. When an invalid base64 encoded string is provided, an error message will be returned
     *
     * @param list<SupermodelIoLogisticsExpressDocumentImagesItem> $documentImages
     *
     * @return self
     */
    public function setDocumentImages(array $documentImages): self
    {
        $this->initialized['documentImages'] = true;
        $this->documentImages = $documentImages;
        return $this;
    }
}