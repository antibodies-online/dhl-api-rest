<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressRateRequestProductsAndServicesItem
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
     * Please enter DHL Express Global Product code
     *
     * @var string
     */
    protected $productCode;
    /**
     * Please enter DHL Express Local Product code
     *
     * @var string
     */
    protected $localProductCode;
    /**
     * Please use if you wish to filter the response by value added services
     *
     * @var list<SupermodelIoLogisticsExpressValueAddedServicesRates>
     */
    protected $valueAddedServices;
    /**
     * Please enter DHL Express Global Product code
     *
     * @return string
     */
    public function getProductCode(): string
    {
        return $this->productCode;
    }
    /**
     * Please enter DHL Express Global Product code
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
     * Please enter DHL Express Local Product code
     *
     * @return string
     */
    public function getLocalProductCode(): string
    {
        return $this->localProductCode;
    }
    /**
     * Please enter DHL Express Local Product code
     *
     * @param string $localProductCode
     *
     * @return self
     */
    public function setLocalProductCode(string $localProductCode): self
    {
        $this->initialized['localProductCode'] = true;
        $this->localProductCode = $localProductCode;
        return $this;
    }
    /**
     * Please use if you wish to filter the response by value added services
     *
     * @return list<SupermodelIoLogisticsExpressValueAddedServicesRates>
     */
    public function getValueAddedServices(): array
    {
        return $this->valueAddedServices;
    }
    /**
     * Please use if you wish to filter the response by value added services
     *
     * @param list<SupermodelIoLogisticsExpressValueAddedServicesRates> $valueAddedServices
     *
     * @return self
     */
    public function setValueAddedServices(array $valueAddedServices): self
    {
        $this->initialized['valueAddedServices'] = true;
        $this->valueAddedServices = $valueAddedServices;
        return $this;
    }
}