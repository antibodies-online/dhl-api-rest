<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItemPriceBreakdownItem
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
     * Expected values in Breakdown/Type are below:<BR>                        STTXA:  Total tax for the shipment<BR>                        STDIS: Total discount for the shipment<BR>                        SPRQT: Net shipment / weight charge
     *
     * @var string
     */
    protected $typeCode;
    /**
     * The amount price of DHL product and services
     *
     * @var float
     */
    protected $price;
    /**
     * Expected values in Breakdown/Type are below:<BR>                        STTXA:  Total tax for the shipment<BR>                        STDIS: Total discount for the shipment<BR>                        SPRQT: Net shipment / weight charge
     *
     * @return string
     */
    public function getTypeCode(): string
    {
        return $this->typeCode;
    }
    /**
     * Expected values in Breakdown/Type are below:<BR>                        STTXA:  Total tax for the shipment<BR>                        STDIS: Total discount for the shipment<BR>                        SPRQT: Net shipment / weight charge
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
     * The amount price of DHL product and services
     *
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
    /**
     * The amount price of DHL product and services
     *
     * @param float $price
     *
     * @return self
     */
    public function setPrice(float $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
}