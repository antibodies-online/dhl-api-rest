<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressRatesProductsItemTotalPriceItem
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
     * Possible Values :<BR>                  'BILLC', billing currency<BR>                  'PULCL', country public rates currency<BR>                  'BASEC', base currency
     *
     * @var string
     */
    protected $currencyType;
    /**
     * This the currency of the rated shipment for the prices listed.
     *
     * @var string
     */
    protected $priceCurrency;
    /**
     * This is the total price of the rated shipment for the product listed.
     *
     * @var float
     */
    protected $price;
    /**
     * Possible Values :<BR>                  'BILLC', billing currency<BR>                  'PULCL', country public rates currency<BR>                  'BASEC', base currency
     *
     * @return string
     */
    public function getCurrencyType(): string
    {
        return $this->currencyType;
    }
    /**
     * Possible Values :<BR>                  'BILLC', billing currency<BR>                  'PULCL', country public rates currency<BR>                  'BASEC', base currency
     *
     * @param string $currencyType
     *
     * @return self
     */
    public function setCurrencyType(string $currencyType): self
    {
        $this->initialized['currencyType'] = true;
        $this->currencyType = $currencyType;
        return $this;
    }
    /**
     * This the currency of the rated shipment for the prices listed.
     *
     * @return string
     */
    public function getPriceCurrency(): string
    {
        return $this->priceCurrency;
    }
    /**
     * This the currency of the rated shipment for the prices listed.
     *
     * @param string $priceCurrency
     *
     * @return self
     */
    public function setPriceCurrency(string $priceCurrency): self
    {
        $this->initialized['priceCurrency'] = true;
        $this->priceCurrency = $priceCurrency;
        return $this;
    }
    /**
     * This is the total price of the rated shipment for the product listed.
     *
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
    /**
     * This is the total price of the rated shipment for the product listed.
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