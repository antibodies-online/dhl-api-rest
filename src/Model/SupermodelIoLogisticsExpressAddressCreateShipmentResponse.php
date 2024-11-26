<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressAddressCreateShipmentResponse
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
     * Postal code
     *
     * @var string
     */
    protected $postalCode;
    /**
     * City name
     *
     * @var string
     */
    protected $cityName;
    /**
     * Country code
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Province or state code
     *
     * @var string
     */
    protected $provinceCode;
    /**
     * Address line 1
     *
     * @var string
     */
    protected $addressLine1;
    /**
     * Address line 2
     *
     * @var string
     */
    protected $addressLine2;
    /**
     * Address line 3
     *
     * @var string
     */
    protected $addressLine3;
    /**
     * Suburb or county name
     *
     * @var string
     */
    protected $cityDistrictName;
    /**
     * Please enter your state or province name
     *
     * @var string
     */
    protected $provinceName;
    /**
     * Please enter your country name
     *
     * @var string
     */
    protected $countryName;
    /**
     * Postal code
     *
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }
    /**
     * Postal code
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
     * City name
     *
     * @return string
     */
    public function getCityName(): string
    {
        return $this->cityName;
    }
    /**
     * City name
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
     * Country code
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * Country code
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
     * Province or state code
     *
     * @return string
     */
    public function getProvinceCode(): string
    {
        return $this->provinceCode;
    }
    /**
     * Province or state code
     *
     * @param string $provinceCode
     *
     * @return self
     */
    public function setProvinceCode(string $provinceCode): self
    {
        $this->initialized['provinceCode'] = true;
        $this->provinceCode = $provinceCode;
        return $this;
    }
    /**
     * Address line 1
     *
     * @return string
     */
    public function getAddressLine1(): string
    {
        return $this->addressLine1;
    }
    /**
     * Address line 1
     *
     * @param string $addressLine1
     *
     * @return self
     */
    public function setAddressLine1(string $addressLine1): self
    {
        $this->initialized['addressLine1'] = true;
        $this->addressLine1 = $addressLine1;
        return $this;
    }
    /**
     * Address line 2
     *
     * @return string
     */
    public function getAddressLine2(): string
    {
        return $this->addressLine2;
    }
    /**
     * Address line 2
     *
     * @param string $addressLine2
     *
     * @return self
     */
    public function setAddressLine2(string $addressLine2): self
    {
        $this->initialized['addressLine2'] = true;
        $this->addressLine2 = $addressLine2;
        return $this;
    }
    /**
     * Address line 3
     *
     * @return string
     */
    public function getAddressLine3(): string
    {
        return $this->addressLine3;
    }
    /**
     * Address line 3
     *
     * @param string $addressLine3
     *
     * @return self
     */
    public function setAddressLine3(string $addressLine3): self
    {
        $this->initialized['addressLine3'] = true;
        $this->addressLine3 = $addressLine3;
        return $this;
    }
    /**
     * Suburb or county name
     *
     * @return string
     */
    public function getCityDistrictName(): string
    {
        return $this->cityDistrictName;
    }
    /**
     * Suburb or county name
     *
     * @param string $cityDistrictName
     *
     * @return self
     */
    public function setCityDistrictName(string $cityDistrictName): self
    {
        $this->initialized['cityDistrictName'] = true;
        $this->cityDistrictName = $cityDistrictName;
        return $this;
    }
    /**
     * Please enter your state or province name
     *
     * @return string
     */
    public function getProvinceName(): string
    {
        return $this->provinceName;
    }
    /**
     * Please enter your state or province name
     *
     * @param string $provinceName
     *
     * @return self
     */
    public function setProvinceName(string $provinceName): self
    {
        $this->initialized['provinceName'] = true;
        $this->provinceName = $provinceName;
        return $this;
    }
    /**
     * Please enter your country name
     *
     * @return string
     */
    public function getCountryName(): string
    {
        return $this->countryName;
    }
    /**
     * Please enter your country name
     *
     * @param string $countryName
     *
     * @return self
     */
    public function setCountryName(string $countryName): self
    {
        $this->initialized['countryName'] = true;
        $this->countryName = $countryName;
        return $this;
    }
}