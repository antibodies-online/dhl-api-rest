<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressLandedCostRequestItemsItemAdditionalQuantityDefinitionsItem
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
     * Item additional quantity value UOM:<BR>                  example PFL=percent of alcohol
     *
     * @var string
     */
    protected $typeCode;
    /**
     * An Item's additional quantity value:<BR>                  example is percent of alcohol
     *
     * @var float
     */
    protected $amount;
    /**
     * Item additional quantity value UOM:<BR>                  example PFL=percent of alcohol
     *
     * @return string
     */
    public function getTypeCode(): string
    {
        return $this->typeCode;
    }
    /**
     * Item additional quantity value UOM:<BR>                  example PFL=percent of alcohol
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
     * An Item's additional quantity value:<BR>                  example is percent of alcohol
     *
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }
    /**
     * An Item's additional quantity value:<BR>                  example is percent of alcohol
     *
     * @param float $amount
     *
     * @return self
     */
    public function setAmount(float $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
}