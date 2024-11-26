<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsPostalAddress
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
     * Note: This field may be intentionally left empty in accordance with the General Data Protection Regulation (GDPR) requirements.
     *
     * @var string
     */
    protected $cityName;
    /**
     * Note: This field may be intentionally left empty in accordance with the General Data Protection Regulation (GDPR) requirements.
     *
     * @var string
     */
    protected $countyName;
    /**
     * Note: This field may be intentionally left empty in accordance with the General Data Protection Regulation (GDPR) requirements.
     *
     * @var string
     */
    protected $postalCode;
    /**
     * Note: This field may be intentionally left empty in accordance with the General Data Protection Regulation (GDPR) requirements.
     *
     * @var string
     */
    protected $provinceCode;
    /**
     * 
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Note: This field may be intentionally left empty in accordance with the General Data Protection Regulation (GDPR) requirements.
     *
     * @return string
     */
    public function getCityName(): string
    {
        return $this->cityName;
    }
    /**
     * Note: This field may be intentionally left empty in accordance with the General Data Protection Regulation (GDPR) requirements.
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
     * Note: This field may be intentionally left empty in accordance with the General Data Protection Regulation (GDPR) requirements.
     *
     * @return string
     */
    public function getCountyName(): string
    {
        return $this->countyName;
    }
    /**
     * Note: This field may be intentionally left empty in accordance with the General Data Protection Regulation (GDPR) requirements.
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
     * Note: This field may be intentionally left empty in accordance with the General Data Protection Regulation (GDPR) requirements.
     *
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }
    /**
     * Note: This field may be intentionally left empty in accordance with the General Data Protection Regulation (GDPR) requirements.
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
     * Note: This field may be intentionally left empty in accordance with the General Data Protection Regulation (GDPR) requirements.
     *
     * @return string
     */
    public function getProvinceCode(): string
    {
        return $this->provinceCode;
    }
    /**
     * Note: This field may be intentionally left empty in accordance with the General Data Protection Regulation (GDPR) requirements.
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
}