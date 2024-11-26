<?php

namespace AntibodiesOnline\DHL\Api\Model;

class Suggestion extends \ArrayObject
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
     * Always holds null value
     *
     * @var string
     */
    protected $label;
    /**
     * Always holds null value
     *
     * @var string
     */
    protected $value;
    /**
     * Latitude of the geocoded search address (used for GREF web service search)
     *
     * @var float
     */
    protected $latitude;
    /**
     * Longitude of the geocoded search address (used for GREF web service search)
     *
     * @var float
     */
    protected $longitude;
    /**
     * Country code of the search address
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Place id of the search address
     *
     * @var string
     */
    protected $placeId;
    /**
     * Provider id of the search address
     *
     * @var string
     */
    protected $providerId;
    /**
     * Always holds null value
     *
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }
    /**
     * Always holds null value
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;
        return $this;
    }
    /**
     * Always holds null value
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * Always holds null value
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * Latitude of the geocoded search address (used for GREF web service search)
     *
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }
    /**
     * Latitude of the geocoded search address (used for GREF web service search)
     *
     * @param float $latitude
     *
     * @return self
     */
    public function setLatitude(float $latitude): self
    {
        $this->initialized['latitude'] = true;
        $this->latitude = $latitude;
        return $this;
    }
    /**
     * Longitude of the geocoded search address (used for GREF web service search)
     *
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }
    /**
     * Longitude of the geocoded search address (used for GREF web service search)
     *
     * @param float $longitude
     *
     * @return self
     */
    public function setLongitude(float $longitude): self
    {
        $this->initialized['longitude'] = true;
        $this->longitude = $longitude;
        return $this;
    }
    /**
     * Country code of the search address
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * Country code of the search address
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
     * Place id of the search address
     *
     * @return string
     */
    public function getPlaceId(): string
    {
        return $this->placeId;
    }
    /**
     * Place id of the search address
     *
     * @param string $placeId
     *
     * @return self
     */
    public function setPlaceId(string $placeId): self
    {
        $this->initialized['placeId'] = true;
        $this->placeId = $placeId;
        return $this;
    }
    /**
     * Provider id of the search address
     *
     * @return string
     */
    public function getProviderId(): string
    {
        return $this->providerId;
    }
    /**
     * Provider id of the search address
     *
     * @param string $providerId
     *
     * @return self
     */
    public function setProviderId(string $providerId): self
    {
        $this->initialized['providerId'] = true;
        $this->providerId = $providerId;
        return $this;
    }
}