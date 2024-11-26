<?php

namespace AntibodiesOnline\DHL\Api\Model;

class ServicePointsRestResponseV3 extends \ArrayObject
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
     * Response status
     *
     * @var RestResponseStatus
     */
    protected $status;
    /**
     * The address used for the search (value of request parameter 'address')
     *
     * @var string
     */
    protected $searchAddress;
    /**
     * The geo coordinates of the facility’s location
     *
     * @var GeoLocation
     */
    protected $searchLocation;
    /**
     * The culture parameter for Bing Maps API (derived from the country parameter in the request)
     *
     * @var string
     */
    protected $mapCulture;
    /**
     * Map Culture Used for Third party Maps
     *
     * @var string
     */
    protected $mapLanguage;
    /**
     * Array of the found Service Points. Each Service Point entity contains details about the service point.
     *
     * @var list<ServicePoint>
     */
    protected $servicePoints;
    /**
     * Array of strings. Contains information messages  - e.g. required language is not available, result was filtered due to incoming holidays.
     *
     * @var list<string>
     */
    protected $messages;
    /**
     * Translations
     *
     * @var Translations
     */
    protected $translations;
    /**
     * Indicates whether lite mode is acitvated or not.
     *
     * @var bool
     */
    protected $liteMode;
    /**
     * Promotion on a SVP level
     *
     * @var Promotion
     */
    protected $promotion;
    /**
     * Response status
     *
     * @return RestResponseStatus
     */
    public function getStatus(): RestResponseStatus
    {
        return $this->status;
    }
    /**
     * Response status
     *
     * @param RestResponseStatus $status
     *
     * @return self
     */
    public function setStatus(RestResponseStatus $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * The address used for the search (value of request parameter 'address')
     *
     * @return string
     */
    public function getSearchAddress(): string
    {
        return $this->searchAddress;
    }
    /**
     * The address used for the search (value of request parameter 'address')
     *
     * @param string $searchAddress
     *
     * @return self
     */
    public function setSearchAddress(string $searchAddress): self
    {
        $this->initialized['searchAddress'] = true;
        $this->searchAddress = $searchAddress;
        return $this;
    }
    /**
     * The geo coordinates of the facility’s location
     *
     * @return GeoLocation
     */
    public function getSearchLocation(): GeoLocation
    {
        return $this->searchLocation;
    }
    /**
     * The geo coordinates of the facility’s location
     *
     * @param GeoLocation $searchLocation
     *
     * @return self
     */
    public function setSearchLocation(GeoLocation $searchLocation): self
    {
        $this->initialized['searchLocation'] = true;
        $this->searchLocation = $searchLocation;
        return $this;
    }
    /**
     * The culture parameter for Bing Maps API (derived from the country parameter in the request)
     *
     * @return string
     */
    public function getMapCulture(): string
    {
        return $this->mapCulture;
    }
    /**
     * The culture parameter for Bing Maps API (derived from the country parameter in the request)
     *
     * @param string $mapCulture
     *
     * @return self
     */
    public function setMapCulture(string $mapCulture): self
    {
        $this->initialized['mapCulture'] = true;
        $this->mapCulture = $mapCulture;
        return $this;
    }
    /**
     * Map Culture Used for Third party Maps
     *
     * @return string
     */
    public function getMapLanguage(): string
    {
        return $this->mapLanguage;
    }
    /**
     * Map Culture Used for Third party Maps
     *
     * @param string $mapLanguage
     *
     * @return self
     */
    public function setMapLanguage(string $mapLanguage): self
    {
        $this->initialized['mapLanguage'] = true;
        $this->mapLanguage = $mapLanguage;
        return $this;
    }
    /**
     * Array of the found Service Points. Each Service Point entity contains details about the service point.
     *
     * @return list<ServicePoint>
     */
    public function getServicePoints(): array
    {
        return $this->servicePoints;
    }
    /**
     * Array of the found Service Points. Each Service Point entity contains details about the service point.
     *
     * @param list<ServicePoint> $servicePoints
     *
     * @return self
     */
    public function setServicePoints(array $servicePoints): self
    {
        $this->initialized['servicePoints'] = true;
        $this->servicePoints = $servicePoints;
        return $this;
    }
    /**
     * Array of strings. Contains information messages  - e.g. required language is not available, result was filtered due to incoming holidays.
     *
     * @return list<string>
     */
    public function getMessages(): array
    {
        return $this->messages;
    }
    /**
     * Array of strings. Contains information messages  - e.g. required language is not available, result was filtered due to incoming holidays.
     *
     * @param list<string> $messages
     *
     * @return self
     */
    public function setMessages(array $messages): self
    {
        $this->initialized['messages'] = true;
        $this->messages = $messages;
        return $this;
    }
    /**
     * Translations
     *
     * @return Translations
     */
    public function getTranslations(): Translations
    {
        return $this->translations;
    }
    /**
     * Translations
     *
     * @param Translations $translations
     *
     * @return self
     */
    public function setTranslations(Translations $translations): self
    {
        $this->initialized['translations'] = true;
        $this->translations = $translations;
        return $this;
    }
    /**
     * Indicates whether lite mode is acitvated or not.
     *
     * @return bool
     */
    public function getLiteMode(): bool
    {
        return $this->liteMode;
    }
    /**
     * Indicates whether lite mode is acitvated or not.
     *
     * @param bool $liteMode
     *
     * @return self
     */
    public function setLiteMode(bool $liteMode): self
    {
        $this->initialized['liteMode'] = true;
        $this->liteMode = $liteMode;
        return $this;
    }
    /**
     * Promotion on a SVP level
     *
     * @return Promotion
     */
    public function getPromotion(): Promotion
    {
        return $this->promotion;
    }
    /**
     * Promotion on a SVP level
     *
     * @param Promotion $promotion
     *
     * @return self
     */
    public function setPromotion(Promotion $promotion): self
    {
        $this->initialized['promotion'] = true;
        $this->promotion = $promotion;
        return $this;
    }
}