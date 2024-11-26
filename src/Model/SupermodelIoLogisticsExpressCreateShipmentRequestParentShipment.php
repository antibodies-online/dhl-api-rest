<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestParentShipment
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
     * Please provide the parent (mother) Product Code
     *
     * @var string
     */
    protected $productCode;
    /**
     * Please provide the parent (mother) shipment's Number of Packages
     *
     * @var float
     */
    protected $packagesCount;
    /**
     * Please provide the parent (mother) Product Code
     *
     * @return string
     */
    public function getProductCode(): string
    {
        return $this->productCode;
    }
    /**
     * Please provide the parent (mother) Product Code
     *
     * @param string $productCode
     *
     * @return self
     */
    public function setProductCode(string $productCode): self
    {
        $this->initialized['productCode'] = true;
        $this->productCode = $productCode;
        return $this;
    }
    /**
     * Please provide the parent (mother) shipment's Number of Packages
     *
     * @return float
     */
    public function getPackagesCount(): float
    {
        return $this->packagesCount;
    }
    /**
     * Please provide the parent (mother) shipment's Number of Packages
     *
     * @param float $packagesCount
     *
     * @return self
     */
    public function setPackagesCount(float $packagesCount): self
    {
        $this->initialized['packagesCount'] = true;
        $this->packagesCount = $packagesCount;
        return $this;
    }
}