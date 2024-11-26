<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationAdditionalChargesItem
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
     * Please provide the charge value
     *
     * @var float
     */
    protected $value;
    /**
     * Please enter charge caption
     *
     * @var string
     */
    protected $caption;
    /**
     * Please enter charge type
     *
     * @var string
     */
    protected $typeCode;
    /**
     * Please provide the charge value
     *
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }
    /**
     * Please provide the charge value
     *
     * @param float $value
     *
     * @return self
     */
    public function setValue(float $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * Please enter charge caption
     *
     * @return string
     */
    public function getCaption(): string
    {
        return $this->caption;
    }
    /**
     * Please enter charge caption
     *
     * @param string $caption
     *
     * @return self
     */
    public function setCaption(string $caption): self
    {
        $this->initialized['caption'] = true;
        $this->caption = $caption;
        return $this;
    }
    /**
     * Please enter charge type
     *
     * @return string
     */
    public function getTypeCode(): string
    {
        return $this->typeCode;
    }
    /**
     * Please enter charge type
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
}