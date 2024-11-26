<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressBankDetailsItem
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
     * To be mapped in commercial Invoice - Russia Bank Name field
     *
     * @var string
     */
    protected $name;
    /**
     * To be mapped in commercial Invoice - Russia Bank Settlement Account Number in RUR field
     *
     * @var string
     */
    protected $settlementLocalCurrency;
    /**
     * To be mapped in commercial Invoice - Russia Bank Settlement Account Number in RUR field
     *
     * @var string
     */
    protected $settlementForeignCurrency;
    /**
     * To be mapped in commercial Invoice - Russia Bank Name field
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * To be mapped in commercial Invoice - Russia Bank Name field
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * To be mapped in commercial Invoice - Russia Bank Settlement Account Number in RUR field
     *
     * @return string
     */
    public function getSettlementLocalCurrency(): string
    {
        return $this->settlementLocalCurrency;
    }
    /**
     * To be mapped in commercial Invoice - Russia Bank Settlement Account Number in RUR field
     *
     * @param string $settlementLocalCurrency
     *
     * @return self
     */
    public function setSettlementLocalCurrency(string $settlementLocalCurrency): self
    {
        $this->initialized['settlementLocalCurrency'] = true;
        $this->settlementLocalCurrency = $settlementLocalCurrency;
        return $this;
    }
    /**
     * To be mapped in commercial Invoice - Russia Bank Settlement Account Number in RUR field
     *
     * @return string
     */
    public function getSettlementForeignCurrency(): string
    {
        return $this->settlementForeignCurrency;
    }
    /**
     * To be mapped in commercial Invoice - Russia Bank Settlement Account Number in RUR field
     *
     * @param string $settlementForeignCurrency
     *
     * @return self
     */
    public function setSettlementForeignCurrency(string $settlementForeignCurrency): self
    {
        $this->initialized['settlementForeignCurrency'] = true;
        $this->settlementForeignCurrency = $settlementForeignCurrency;
        return $this;
    }
}