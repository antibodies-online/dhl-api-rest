<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressRates
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
     * @var list<SupermodelIoLogisticsExpressRatesProductsItem>
     */
    protected $products;
    /**
     * 
     *
     * @var list<SupermodelIoLogisticsExpressRatesExchangeRatesItem>
     */
    protected $exchangeRates;
    /**
     * 
     *
     * @var list<string>
     */
    protected $warnings;
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressRatesProductsItem>
     */
    public function getProducts(): array
    {
        return $this->products;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressRatesProductsItem> $products
     *
     * @return self
     */
    public function setProducts(array $products): self
    {
        $this->initialized['products'] = true;
        $this->products = $products;
        return $this;
    }
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressRatesExchangeRatesItem>
     */
    public function getExchangeRates(): array
    {
        return $this->exchangeRates;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressRatesExchangeRatesItem> $exchangeRates
     *
     * @return self
     */
    public function setExchangeRates(array $exchangeRates): self
    {
        $this->initialized['exchangeRates'] = true;
        $this->exchangeRates = $exchangeRates;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getWarnings(): array
    {
        return $this->warnings;
    }
    /**
     * 
     *
     * @param list<string> $warnings
     *
     * @return self
     */
    public function setWarnings(array $warnings): self
    {
        $this->initialized['warnings'] = true;
        $this->warnings = $warnings;
        return $this;
    }
}