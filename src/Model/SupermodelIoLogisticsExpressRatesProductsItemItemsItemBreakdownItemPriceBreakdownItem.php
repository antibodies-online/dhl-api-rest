<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItemPriceBreakdownItem
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
     * Discount or tax type codes as provided by DHL.<BR>                              Example values;<BR>                              For discount;<BR>                              P: promotional<BR>                              S: special
     *
     * @var string
     */
    protected $priceType;
    /**
     * If a breakdown is provided, details can either be; - "TAX",<BR>                              - "DISCOUNT"
     *
     * @var string
     */
    protected $typeCode;
    /**
     * The actual amount of the discount/tax
     *
     * @var float
     */
    protected $price;
    /**
     * Percentage of the discount/tax
     *
     * @var float
     */
    protected $rate;
    /**
     * The base amount of the service charge
     *
     * @var float
     */
    protected $basePrice;
    /**
     * Discount or tax type codes as provided by DHL.<BR>                              Example values;<BR>                              For discount;<BR>                              P: promotional<BR>                              S: special
     *
     * @return string
     */
    public function getPriceType(): string
    {
        return $this->priceType;
    }
    /**
     * Discount or tax type codes as provided by DHL.<BR>                              Example values;<BR>                              For discount;<BR>                              P: promotional<BR>                              S: special
     *
     * @param string $priceType
     *
     * @return self
     */
    public function setPriceType(string $priceType): self
    {
        $this->initialized['priceType'] = true;
        $this->priceType = $priceType;
        return $this;
    }
    /**
     * If a breakdown is provided, details can either be; - "TAX",<BR>                              - "DISCOUNT"
     *
     * @return string
     */
    public function getTypeCode(): string
    {
        return $this->typeCode;
    }
    /**
     * If a breakdown is provided, details can either be; - "TAX",<BR>                              - "DISCOUNT"
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
     * The actual amount of the discount/tax
     *
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
    /**
     * The actual amount of the discount/tax
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
    /**
     * Percentage of the discount/tax
     *
     * @return float
     */
    public function getRate(): float
    {
        return $this->rate;
    }
    /**
     * Percentage of the discount/tax
     *
     * @param float $rate
     *
     * @return self
     */
    public function setRate(float $rate): self
    {
        $this->initialized['rate'] = true;
        $this->rate = $rate;
        return $this;
    }
    /**
     * The base amount of the service charge
     *
     * @return float
     */
    public function getBasePrice(): float
    {
        return $this->basePrice;
    }
    /**
     * The base amount of the service charge
     *
     * @param float $basePrice
     *
     * @return self
     */
    public function setBasePrice(float $basePrice): self
    {
        $this->initialized['basePrice'] = true;
        $this->basePrice = $basePrice;
        return $this;
    }
}