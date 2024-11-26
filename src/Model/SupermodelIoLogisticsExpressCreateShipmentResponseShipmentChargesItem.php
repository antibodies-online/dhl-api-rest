<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItem
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
     * Possible Values :<BR>            - 'BILLC', billing currency<BR>            - 'PULCL', country public rates currency<BR>            - 'BASEC', base currency
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
     * The amount price of DHL product and services
     *
     * @var float
     */
    protected $price;
    /**
     * 
     *
     * @var list<SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItemServiceBreakdownItem>
     */
    protected $serviceBreakdown;
    /**
     * Possible Values :<BR>            - 'BILLC', billing currency<BR>            - 'PULCL', country public rates currency<BR>            - 'BASEC', base currency
     *
     * @return string
     */
    public function getCurrencyType(): string
    {
        return $this->currencyType;
    }
    /**
     * Possible Values :<BR>            - 'BILLC', billing currency<BR>            - 'PULCL', country public rates currency<BR>            - 'BASEC', base currency
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
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItemServiceBreakdownItem>
     */
    public function getServiceBreakdown(): array
    {
        return $this->serviceBreakdown;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressCreateShipmentResponseShipmentChargesItemServiceBreakdownItem> $serviceBreakdown
     *
     * @return self
     */
    public function setServiceBreakdown(array $serviceBreakdown): self
    {
        $this->initialized['serviceBreakdown'] = true;
        $this->serviceBreakdown = $serviceBreakdown;
        return $this;
    }
}