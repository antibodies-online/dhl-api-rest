<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationCustomsDocumentsItem
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
     * Please provide the Customs Document type code at invoice level
     *
     * @var string
     */
    protected $typeCode;
    /**
     * Please provide the Customs Document ID at invoice level
     *
     * @var string
     */
    protected $value;
    /**
     * Please provide the Customs Document type code at invoice level
     *
     * @return string
     */
    public function getTypeCode(): string
    {
        return $this->typeCode;
    }
    /**
     * Please provide the Customs Document type code at invoice level
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
     * Please provide the Customs Document ID at invoice level
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * Please provide the Customs Document ID at invoice level
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