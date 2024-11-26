<?php

namespace AntibodiesOnline\DHL\Api\Model;

class Address extends \ArrayObject
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
     * First line of the facility address
     *
     * @var string
     */
    protected $addressLine1;
    /**
     * Second line of the facility address (only present if field is filled in GREF database)
     *
     * @var string
     */
    protected $addressLine2;
    /**
     * Third line of the facility address (only present if field is filled in GREF database)
     *
     * @var string
     */
    protected $addressLine3;
    /**
     * Street details in facility address
     *
     * @var string
     */
    protected $street;
    /**
     * House number in facility address
     *
     * @var string
     */
    protected $houseNumber;
    /**
     * Additional details in facility address
     *
     * @var string
     */
    protected $additionalInfo;
    /**
     * Facility city
     *
     * @var string
     */
    protected $city;
    /**
     * Zip code of the facility
     *
     * @var string
     */
    protected $zipCode;
    /**
     * State
     *
     * @var string
     */
    protected $state;
    /**
     * Country
     *
     * @var string
     */
    protected $country;
    /**
     * DHL country
     *
     * @var string
     */
    protected $dhlCountry;
    /**
     * Country Division Code
     *
     * @var string
     */
    protected $countryDivisionCode;
    /**
     * Enumeration (State, Province)
     *
     * @var string
     */
    protected $countryDivisionCodeType;
    /**
     * Obsolete. This is planned to be removed in future releases.
     *
     * @var string
     */
    protected $html;
    /**
     * First line of the facility address
     *
     * @return string
     */
    public function getAddressLine1(): string
    {
        return $this->addressLine1;
    }
    /**
     * First line of the facility address
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
     * Second line of the facility address (only present if field is filled in GREF database)
     *
     * @return string
     */
    public function getAddressLine2(): string
    {
        return $this->addressLine2;
    }
    /**
     * Second line of the facility address (only present if field is filled in GREF database)
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
     * Third line of the facility address (only present if field is filled in GREF database)
     *
     * @return string
     */
    public function getAddressLine3(): string
    {
        return $this->addressLine3;
    }
    /**
     * Third line of the facility address (only present if field is filled in GREF database)
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
     * Street details in facility address
     *
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }
    /**
     * Street details in facility address
     *
     * @param string $street
     *
     * @return self
     */
    public function setStreet(string $street): self
    {
        $this->initialized['street'] = true;
        $this->street = $street;
        return $this;
    }
    /**
     * House number in facility address
     *
     * @return string
     */
    public function getHouseNumber(): string
    {
        return $this->houseNumber;
    }
    /**
     * House number in facility address
     *
     * @param string $houseNumber
     *
     * @return self
     */
    public function setHouseNumber(string $houseNumber): self
    {
        $this->initialized['houseNumber'] = true;
        $this->houseNumber = $houseNumber;
        return $this;
    }
    /**
     * Additional details in facility address
     *
     * @return string
     */
    public function getAdditionalInfo(): string
    {
        return $this->additionalInfo;
    }
    /**
     * Additional details in facility address
     *
     * @param string $additionalInfo
     *
     * @return self
     */
    public function setAdditionalInfo(string $additionalInfo): self
    {
        $this->initialized['additionalInfo'] = true;
        $this->additionalInfo = $additionalInfo;
        return $this;
    }
    /**
     * Facility city
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }
    /**
     * Facility city
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city): self
    {
        $this->initialized['city'] = true;
        $this->city = $city;
        return $this;
    }
    /**
     * Zip code of the facility
     *
     * @return string
     */
    public function getZipCode(): string
    {
        return $this->zipCode;
    }
    /**
     * Zip code of the facility
     *
     * @param string $zipCode
     *
     * @return self
     */
    public function setZipCode(string $zipCode): self
    {
        $this->initialized['zipCode'] = true;
        $this->zipCode = $zipCode;
        return $this;
    }
    /**
     * State
     *
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
    /**
     * State
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * Country
     *
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }
    /**
     * Country
     *
     * @param string $country
     *
     * @return self
     */
    public function setCountry(string $country): self
    {
        $this->initialized['country'] = true;
        $this->country = $country;
        return $this;
    }
    /**
     * DHL country
     *
     * @return string
     */
    public function getDhlCountry(): string
    {
        return $this->dhlCountry;
    }
    /**
     * DHL country
     *
     * @param string $dhlCountry
     *
     * @return self
     */
    public function setDhlCountry(string $dhlCountry): self
    {
        $this->initialized['dhlCountry'] = true;
        $this->dhlCountry = $dhlCountry;
        return $this;
    }
    /**
     * Country Division Code
     *
     * @return string
     */
    public function getCountryDivisionCode(): string
    {
        return $this->countryDivisionCode;
    }
    /**
     * Country Division Code
     *
     * @param string $countryDivisionCode
     *
     * @return self
     */
    public function setCountryDivisionCode(string $countryDivisionCode): self
    {
        $this->initialized['countryDivisionCode'] = true;
        $this->countryDivisionCode = $countryDivisionCode;
        return $this;
    }
    /**
     * Enumeration (State, Province)
     *
     * @return string
     */
    public function getCountryDivisionCodeType(): string
    {
        return $this->countryDivisionCodeType;
    }
    /**
     * Enumeration (State, Province)
     *
     * @param string $countryDivisionCodeType
     *
     * @return self
     */
    public function setCountryDivisionCodeType(string $countryDivisionCodeType): self
    {
        $this->initialized['countryDivisionCodeType'] = true;
        $this->countryDivisionCodeType = $countryDivisionCodeType;
        return $this;
    }
    /**
     * Obsolete. This is planned to be removed in future releases.
     *
     * @return string
     */
    public function getHtml(): string
    {
        return $this->html;
    }
    /**
     * Obsolete. This is planned to be removed in future releases.
     *
     * @param string $html
     *
     * @return self
     */
    public function setHtml(string $html): self
    {
        $this->initialized['html'] = true;
        $this->html = $html;
        return $this;
    }
}