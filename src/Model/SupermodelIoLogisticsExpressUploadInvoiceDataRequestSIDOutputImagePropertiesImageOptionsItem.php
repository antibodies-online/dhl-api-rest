<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImagePropertiesImageOptionsItem
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
     * Please enter the document type you want to wish set properties for
     *
     * @var string
     */
    protected $typeCode;
    /**
     * Please enter DHL Express document template name.
     *
     * @var string
     */
    protected $templateName;
    /**
     * If set to true then the document is rendered otherwise not
     *
     * @var bool
     */
    protected $isRequested;
    /**
     * Please enter the document type you want to wish set properties for
     *
     * @return string
     */
    public function getTypeCode(): string
    {
        return $this->typeCode;
    }
    /**
     * Please enter the document type you want to wish set properties for
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
     * Please enter DHL Express document template name.
     *
     * @return string
     */
    public function getTemplateName(): string
    {
        return $this->templateName;
    }
    /**
     * Please enter DHL Express document template name.
     *
     * @param string $templateName
     *
     * @return self
     */
    public function setTemplateName(string $templateName): self
    {
        $this->initialized['templateName'] = true;
        $this->templateName = $templateName;
        return $this;
    }
    /**
     * If set to true then the document is rendered otherwise not
     *
     * @return bool
     */
    public function getIsRequested(): bool
    {
        return $this->isRequested;
    }
    /**
     * If set to true then the document is rendered otherwise not
     *
     * @param bool $isRequested
     *
     * @return self
     */
    public function setIsRequested(bool $isRequested): self
    {
        $this->initialized['isRequested'] = true;
        $this->isRequested = $isRequested;
        return $this;
    }
}