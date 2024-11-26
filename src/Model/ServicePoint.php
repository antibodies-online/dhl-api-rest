<?php

namespace AntibodiesOnline\DHL\Api\Model;

class ServicePoint extends \ArrayObject
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
     * The facility ID from GREF database
     *
     * @var int
     */
    protected $id;
    /**
    * Service Point ID is a unique key with 6 characters, consisting of Service Area for first 3 characters (e.g. BRU) and the last 3 characters is the Facility code (e.g. 001); Service point ID = BRU001.
    If address is used id not possible to use.
    
    *
    * @var string
    */
    protected $facilityId;
    /**
     * The facility type code from GREF database
     *
     * @var string
     */
    protected $facilityTypeCode;
    /**
     * The service point’s Service Area Code
     *
     * @var string
     */
    protected $serviceAreaCode;
    /**
     * Name of the service point
     *
     * @var string
     */
    protected $servicePointName;
    /**
     * Formatted name of the service point
     *
     * @var string
     */
    protected $servicePointNameFormatted;
    /**
     * The local trading name of the Service Point
     *
     * @var string
     */
    protected $localName;
    /**
     * The type of the Service Point. CITY, STATION, PARTNER or TWENTYFOURSEVEN.
     *
     * @var string
     */
    protected $servicePointType;
    /**
     * Sub-entity holding the facility address
     *
     * @var Address
     */
    protected $address;
    /**
     * The geo coordinates of the facility’s location
     *
     * @var GeoLocation
     */
    protected $geoLocation;
    /**
     * The distance from the search address to this Service Point (beeline). 
     *
     * @var string
     */
    protected $distance;
    /**
     * Time until which a shipment can be handed in at the Service Point, and is still shipped on the same day
     *
     * @var string
     */
    protected $shippingCutOffTime;
    /**
     * Array of openingHours entities, each consisting of week day, opening time and closing time.
     *
     * @var OpeningHours
     */
    protected $openingHours;
    /**
     * An entity that lists all capabilities of a Service Point.
     *
     * @var ServicePointCapabilities
     */
    protected $servicePointCapabilities;
    /**
     * Information about how the Service Point can be contacted
     *
     * @var ContactDetails
     */
    protected $contactDetails;
    /**
     * Obsolete. This is planned to be removed in future releases.
     *
     * @var string
     */
    protected $shippingCutOffTimeHtml;
    /**
     * Distance of SVP from searched location
     *
     * @var string
     */
    protected $distanceValue;
    /**
     * Metric of distance
     *
     * @var float
     */
    protected $distanceMetric;
    /**
     * Information about language used for search
     *
     * @var Language
     */
    protected $language;
    /**
     * Information about shipment piece / size
     *
     * @var ShipmentLimitations
     */
    protected $shipmentLimitations;
    /**
     * Shipment Piece Limitations in this Service Point.
     *
     * @var ShipmentLimitationsByPiece
     */
    protected $shipmentLimitationsByPiece;
    /**
     * Charge code, e.g. XX
     *
     * @var string
     */
    protected $chargeCode;
    /**
     * Partner information (when SVP type is PRT)
     *
     * @var Partner
     */
    protected $partner;
    /**
     * Promotion on a SVP level
     *
     * @var Promotion
     */
    protected $promotion;
    /**
     * Capacity information – only if additional call to SCMS was triggered
     *
     * @var CapacityStatus
     */
    protected $capacityStatus;
    /**
     * Status of the service point(Active or Inactive)
     *
     * @var string
     */
    protected $svpStatus;
    /**
     * Number of day when the work week starts. It starts from 0 to 6(Sunday to Saturday)
     *
     * @var int
     */
    protected $workWeekStart;
    /**
     * 
     *
     * @var string
     */
    protected $locatedAt;
    /**
     * 
     *
     * @var DateTimeZone
     */
    protected $timeZone;
    /**
     * The facility ID from GREF database
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * The facility ID from GREF database
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
    * Service Point ID is a unique key with 6 characters, consisting of Service Area for first 3 characters (e.g. BRU) and the last 3 characters is the Facility code (e.g. 001); Service point ID = BRU001.
    If address is used id not possible to use.
    
    *
    * @return string
    */
    public function getFacilityId(): string
    {
        return $this->facilityId;
    }
    /**
    * Service Point ID is a unique key with 6 characters, consisting of Service Area for first 3 characters (e.g. BRU) and the last 3 characters is the Facility code (e.g. 001); Service point ID = BRU001.
    If address is used id not possible to use.
    
    *
    * @param string $facilityId
    *
    * @return self
    */
    public function setFacilityId(string $facilityId): self
    {
        $this->initialized['facilityId'] = true;
        $this->facilityId = $facilityId;
        return $this;
    }
    /**
     * The facility type code from GREF database
     *
     * @return string
     */
    public function getFacilityTypeCode(): string
    {
        return $this->facilityTypeCode;
    }
    /**
     * The facility type code from GREF database
     *
     * @param string $facilityTypeCode
     *
     * @return self
     */
    public function setFacilityTypeCode(string $facilityTypeCode): self
    {
        $this->initialized['facilityTypeCode'] = true;
        $this->facilityTypeCode = $facilityTypeCode;
        return $this;
    }
    /**
     * The service point’s Service Area Code
     *
     * @return string
     */
    public function getServiceAreaCode(): string
    {
        return $this->serviceAreaCode;
    }
    /**
     * The service point’s Service Area Code
     *
     * @param string $serviceAreaCode
     *
     * @return self
     */
    public function setServiceAreaCode(string $serviceAreaCode): self
    {
        $this->initialized['serviceAreaCode'] = true;
        $this->serviceAreaCode = $serviceAreaCode;
        return $this;
    }
    /**
     * Name of the service point
     *
     * @return string
     */
    public function getServicePointName(): string
    {
        return $this->servicePointName;
    }
    /**
     * Name of the service point
     *
     * @param string $servicePointName
     *
     * @return self
     */
    public function setServicePointName(string $servicePointName): self
    {
        $this->initialized['servicePointName'] = true;
        $this->servicePointName = $servicePointName;
        return $this;
    }
    /**
     * Formatted name of the service point
     *
     * @return string
     */
    public function getServicePointNameFormatted(): string
    {
        return $this->servicePointNameFormatted;
    }
    /**
     * Formatted name of the service point
     *
     * @param string $servicePointNameFormatted
     *
     * @return self
     */
    public function setServicePointNameFormatted(string $servicePointNameFormatted): self
    {
        $this->initialized['servicePointNameFormatted'] = true;
        $this->servicePointNameFormatted = $servicePointNameFormatted;
        return $this;
    }
    /**
     * The local trading name of the Service Point
     *
     * @return string
     */
    public function getLocalName(): string
    {
        return $this->localName;
    }
    /**
     * The local trading name of the Service Point
     *
     * @param string $localName
     *
     * @return self
     */
    public function setLocalName(string $localName): self
    {
        $this->initialized['localName'] = true;
        $this->localName = $localName;
        return $this;
    }
    /**
     * The type of the Service Point. CITY, STATION, PARTNER or TWENTYFOURSEVEN.
     *
     * @return string
     */
    public function getServicePointType(): string
    {
        return $this->servicePointType;
    }
    /**
     * The type of the Service Point. CITY, STATION, PARTNER or TWENTYFOURSEVEN.
     *
     * @param string $servicePointType
     *
     * @return self
     */
    public function setServicePointType(string $servicePointType): self
    {
        $this->initialized['servicePointType'] = true;
        $this->servicePointType = $servicePointType;
        return $this;
    }
    /**
     * Sub-entity holding the facility address
     *
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }
    /**
     * Sub-entity holding the facility address
     *
     * @param Address $address
     *
     * @return self
     */
    public function setAddress(Address $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * The geo coordinates of the facility’s location
     *
     * @return GeoLocation
     */
    public function getGeoLocation(): GeoLocation
    {
        return $this->geoLocation;
    }
    /**
     * The geo coordinates of the facility’s location
     *
     * @param GeoLocation $geoLocation
     *
     * @return self
     */
    public function setGeoLocation(GeoLocation $geoLocation): self
    {
        $this->initialized['geoLocation'] = true;
        $this->geoLocation = $geoLocation;
        return $this;
    }
    /**
     * The distance from the search address to this Service Point (beeline). 
     *
     * @return string
     */
    public function getDistance(): string
    {
        return $this->distance;
    }
    /**
     * The distance from the search address to this Service Point (beeline). 
     *
     * @param string $distance
     *
     * @return self
     */
    public function setDistance(string $distance): self
    {
        $this->initialized['distance'] = true;
        $this->distance = $distance;
        return $this;
    }
    /**
     * Time until which a shipment can be handed in at the Service Point, and is still shipped on the same day
     *
     * @return string
     */
    public function getShippingCutOffTime(): string
    {
        return $this->shippingCutOffTime;
    }
    /**
     * Time until which a shipment can be handed in at the Service Point, and is still shipped on the same day
     *
     * @param string $shippingCutOffTime
     *
     * @return self
     */
    public function setShippingCutOffTime(string $shippingCutOffTime): self
    {
        $this->initialized['shippingCutOffTime'] = true;
        $this->shippingCutOffTime = $shippingCutOffTime;
        return $this;
    }
    /**
     * Array of openingHours entities, each consisting of week day, opening time and closing time.
     *
     * @return OpeningHours
     */
    public function getOpeningHours(): OpeningHours
    {
        return $this->openingHours;
    }
    /**
     * Array of openingHours entities, each consisting of week day, opening time and closing time.
     *
     * @param OpeningHours $openingHours
     *
     * @return self
     */
    public function setOpeningHours(OpeningHours $openingHours): self
    {
        $this->initialized['openingHours'] = true;
        $this->openingHours = $openingHours;
        return $this;
    }
    /**
     * An entity that lists all capabilities of a Service Point.
     *
     * @return ServicePointCapabilities
     */
    public function getServicePointCapabilities(): ServicePointCapabilities
    {
        return $this->servicePointCapabilities;
    }
    /**
     * An entity that lists all capabilities of a Service Point.
     *
     * @param ServicePointCapabilities $servicePointCapabilities
     *
     * @return self
     */
    public function setServicePointCapabilities(ServicePointCapabilities $servicePointCapabilities): self
    {
        $this->initialized['servicePointCapabilities'] = true;
        $this->servicePointCapabilities = $servicePointCapabilities;
        return $this;
    }
    /**
     * Information about how the Service Point can be contacted
     *
     * @return ContactDetails
     */
    public function getContactDetails(): ContactDetails
    {
        return $this->contactDetails;
    }
    /**
     * Information about how the Service Point can be contacted
     *
     * @param ContactDetails $contactDetails
     *
     * @return self
     */
    public function setContactDetails(ContactDetails $contactDetails): self
    {
        $this->initialized['contactDetails'] = true;
        $this->contactDetails = $contactDetails;
        return $this;
    }
    /**
     * Obsolete. This is planned to be removed in future releases.
     *
     * @return string
     */
    public function getShippingCutOffTimeHtml(): string
    {
        return $this->shippingCutOffTimeHtml;
    }
    /**
     * Obsolete. This is planned to be removed in future releases.
     *
     * @param string $shippingCutOffTimeHtml
     *
     * @return self
     */
    public function setShippingCutOffTimeHtml(string $shippingCutOffTimeHtml): self
    {
        $this->initialized['shippingCutOffTimeHtml'] = true;
        $this->shippingCutOffTimeHtml = $shippingCutOffTimeHtml;
        return $this;
    }
    /**
     * Distance of SVP from searched location
     *
     * @return string
     */
    public function getDistanceValue(): string
    {
        return $this->distanceValue;
    }
    /**
     * Distance of SVP from searched location
     *
     * @param string $distanceValue
     *
     * @return self
     */
    public function setDistanceValue(string $distanceValue): self
    {
        $this->initialized['distanceValue'] = true;
        $this->distanceValue = $distanceValue;
        return $this;
    }
    /**
     * Metric of distance
     *
     * @return float
     */
    public function getDistanceMetric(): float
    {
        return $this->distanceMetric;
    }
    /**
     * Metric of distance
     *
     * @param float $distanceMetric
     *
     * @return self
     */
    public function setDistanceMetric(float $distanceMetric): self
    {
        $this->initialized['distanceMetric'] = true;
        $this->distanceMetric = $distanceMetric;
        return $this;
    }
    /**
     * Information about language used for search
     *
     * @return Language
     */
    public function getLanguage(): Language
    {
        return $this->language;
    }
    /**
     * Information about language used for search
     *
     * @param Language $language
     *
     * @return self
     */
    public function setLanguage(Language $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;
        return $this;
    }
    /**
     * Information about shipment piece / size
     *
     * @return ShipmentLimitations
     */
    public function getShipmentLimitations(): ShipmentLimitations
    {
        return $this->shipmentLimitations;
    }
    /**
     * Information about shipment piece / size
     *
     * @param ShipmentLimitations $shipmentLimitations
     *
     * @return self
     */
    public function setShipmentLimitations(ShipmentLimitations $shipmentLimitations): self
    {
        $this->initialized['shipmentLimitations'] = true;
        $this->shipmentLimitations = $shipmentLimitations;
        return $this;
    }
    /**
     * Shipment Piece Limitations in this Service Point.
     *
     * @return ShipmentLimitationsByPiece
     */
    public function getShipmentLimitationsByPiece(): ShipmentLimitationsByPiece
    {
        return $this->shipmentLimitationsByPiece;
    }
    /**
     * Shipment Piece Limitations in this Service Point.
     *
     * @param ShipmentLimitationsByPiece $shipmentLimitationsByPiece
     *
     * @return self
     */
    public function setShipmentLimitationsByPiece(ShipmentLimitationsByPiece $shipmentLimitationsByPiece): self
    {
        $this->initialized['shipmentLimitationsByPiece'] = true;
        $this->shipmentLimitationsByPiece = $shipmentLimitationsByPiece;
        return $this;
    }
    /**
     * Charge code, e.g. XX
     *
     * @return string
     */
    public function getChargeCode(): string
    {
        return $this->chargeCode;
    }
    /**
     * Charge code, e.g. XX
     *
     * @param string $chargeCode
     *
     * @return self
     */
    public function setChargeCode(string $chargeCode): self
    {
        $this->initialized['chargeCode'] = true;
        $this->chargeCode = $chargeCode;
        return $this;
    }
    /**
     * Partner information (when SVP type is PRT)
     *
     * @return Partner
     */
    public function getPartner(): Partner
    {
        return $this->partner;
    }
    /**
     * Partner information (when SVP type is PRT)
     *
     * @param Partner $partner
     *
     * @return self
     */
    public function setPartner(Partner $partner): self
    {
        $this->initialized['partner'] = true;
        $this->partner = $partner;
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
    /**
     * Capacity information – only if additional call to SCMS was triggered
     *
     * @return CapacityStatus
     */
    public function getCapacityStatus(): CapacityStatus
    {
        return $this->capacityStatus;
    }
    /**
     * Capacity information – only if additional call to SCMS was triggered
     *
     * @param CapacityStatus $capacityStatus
     *
     * @return self
     */
    public function setCapacityStatus(CapacityStatus $capacityStatus): self
    {
        $this->initialized['capacityStatus'] = true;
        $this->capacityStatus = $capacityStatus;
        return $this;
    }
    /**
     * Status of the service point(Active or Inactive)
     *
     * @return string
     */
    public function getSvpStatus(): string
    {
        return $this->svpStatus;
    }
    /**
     * Status of the service point(Active or Inactive)
     *
     * @param string $svpStatus
     *
     * @return self
     */
    public function setSvpStatus(string $svpStatus): self
    {
        $this->initialized['svpStatus'] = true;
        $this->svpStatus = $svpStatus;
        return $this;
    }
    /**
     * Number of day when the work week starts. It starts from 0 to 6(Sunday to Saturday)
     *
     * @return int
     */
    public function getWorkWeekStart(): int
    {
        return $this->workWeekStart;
    }
    /**
     * Number of day when the work week starts. It starts from 0 to 6(Sunday to Saturday)
     *
     * @param int $workWeekStart
     *
     * @return self
     */
    public function setWorkWeekStart(int $workWeekStart): self
    {
        $this->initialized['workWeekStart'] = true;
        $this->workWeekStart = $workWeekStart;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLocatedAt(): string
    {
        return $this->locatedAt;
    }
    /**
     * 
     *
     * @param string $locatedAt
     *
     * @return self
     */
    public function setLocatedAt(string $locatedAt): self
    {
        $this->initialized['locatedAt'] = true;
        $this->locatedAt = $locatedAt;
        return $this;
    }
    /**
     * 
     *
     * @return DateTimeZone
     */
    public function getTimeZone(): DateTimeZone
    {
        return $this->timeZone;
    }
    /**
     * 
     *
     * @param DateTimeZone $timeZone
     *
     * @return self
     */
    public function setTimeZone(DateTimeZone $timeZone): self
    {
        $this->initialized['timeZone'] = true;
        $this->timeZone = $timeZone;
        return $this;
    }
}