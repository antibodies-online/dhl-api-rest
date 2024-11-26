<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomsDocumentsItem
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
     * Please provide the line item customs document type code. Please refer to the YAML Reference Data Guide PDF file for valid enumeration values.
     *
     * @var string
     */
    protected $typeCode;
    /**
     * Please provide the line item customs document ID
     *
     * @var string
     */
    protected $value;
    /**
     * Please provide the line item customs document type code. Please refer to the YAML Reference Data Guide PDF file for valid enumeration values.
     *
     * @return string
     */
    public function getTypeCode(): string
    {
        return $this->typeCode;
    }
    /**
     * Please provide the line item customs document type code. Please refer to the YAML Reference Data Guide PDF file for valid enumeration values.
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
     * Please provide the line item customs document ID
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * Please provide the line item customs document ID
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}