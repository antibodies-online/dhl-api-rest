<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCommodityCodesItem
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
     * Please provide type of the commodity code
     *
     * @var string
     */
    protected $typeCode;
    /**
     * Please provide the commodity code
     *
     * @var string
     */
    protected $value;
    /**
     * Please provide type of the commodity code
     *
     * @return string
     */
    public function getTypeCode(): string
    {
        return $this->typeCode;
    }
    /**
     * Please provide type of the commodity code
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
     * Please provide the commodity code
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * Please provide the commodity code
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