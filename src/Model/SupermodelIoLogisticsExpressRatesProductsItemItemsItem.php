<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressRatesProductsItemItemsItem
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
     * Item line number
     *
     * @var float
     */
    protected $number;
    /**
     * 
     *
     * @var list<SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItem>
     */
    protected $breakdown;
    /**
     * Item line number
     *
     * @return float
     */
    public function getNumber(): float
    {
        return $this->number;
    }
    /**
     * Item line number
     *
     * @param float $number
     *
     * @return self
     */
    public function setNumber(float $number): self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItem>
     */
    public function getBreakdown(): array
    {
        return $this->breakdown;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItem> $breakdown
     *
     * @return self
     */
    public function setBreakdown(array $breakdown): self
    {
        $this->initialized['breakdown'] = true;
        $this->breakdown = $breakdown;
        return $this;
    }
}