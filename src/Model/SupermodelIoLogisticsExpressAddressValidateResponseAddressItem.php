<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressAddressValidateResponseAddressItem
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
     * @var string
     */
    protected $countryCode;
    /**
     * 
     *
     * @var string
     */
    protected $postalCode;
    /**
     * 
     *
     * @var string
     */
    protected $cityName;
    /**
     * Please enter your suburb or county name
     *
     * @var string
     */
    protected $countyName;
    /**
     * 
     *
     * @var SupermodelIoLogisticsExpressAddressValidateResponseAddressItemServiceArea
     */
    protected $serviceArea;
    /**
     * 
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * 
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }
    /**
     * 
     *
     * @param string $postalCode
     *
     * @return self
     */
    public function setPostalCode(string $postalCode): self
    {
        $this->initialized['postalCode'] = true;
        $this->postalCode = $postalCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCityName(): string
    {
        return $this->cityName;
    }
    /**
     * 
     *
     * @param string $cityName
     *
     * @return self
     */
    public function setCityName(string $cityName): self
    {
        $this->initialized['cityName'] = true;
        $this->cityName = $cityName;
        return $this;
    }
    /**
     * Please enter your suburb or county name
     *
     * @return string
     */
    public function getCountyName(): string
    {
        return $this->countyName;
    }
    /**
     * Please enter your suburb or county name
     *
     * @param string $countyName
     *
     * @return self
     */
    public function setCountyName(string $countyName): self
    {
        $this->initialized['countyName'] = true;
        $this->countyName = $countyName;
        return $this;
    }
    /**
     * 
     *
     * @return SupermodelIoLogisticsExpressAddressValidateResponseAddressItemServiceArea
     */
    public function getServiceArea(): SupermodelIoLogisticsExpressAddressValidateResponseAddressItemServiceArea
    {
        return $this->serviceArea;
    }
    /**
     * 
     *
     * @param SupermodelIoLogisticsExpressAddressValidateResponseAddressItemServiceArea $serviceArea
     *
     * @return self
     */
    public function setServiceArea(SupermodelIoLogisticsExpressAddressValidateResponseAddressItemServiceArea $serviceArea): self
    {
        $this->initialized['serviceArea'] = true;
        $this->serviceArea = $serviceArea;
        return $this;
    }
}