<?php

namespace AntibodiesOnline\DHL\Api\Model;

class GeoLocation extends \ArrayObject
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
     * Suggestion for the search address
     *
     * @var Suggestion
     */
    protected $suggestion;
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
     * Suggestion for the search address
     *
     * @return Suggestion
     */
    public function getSuggestion(): Suggestion
    {
        return $this->suggestion;
    }
    /**
     * Suggestion for the search address
     *
     * @param Suggestion $suggestion
     *
     * @return self
     */
    public function setSuggestion(Suggestion $suggestion): self
    {
        $this->initialized['suggestion'] = true;
        $this->suggestion = $suggestion;
        return $this;
    }
}