<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery
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
     * Please choose from one of the delivery options
     *
     * @var string
     */
    protected $deliveryOption;
    /**
     * If delivery option is signatureDelivery please specify location where to leave the shipment
     *
     * @var string
     */
    protected $location;
    /**
     * Please enter additional information that might be useful for the DHL Express courier. This field is conditionally mandatory if selected location is 'Other'.
     *
     * @var string
     */
    protected $specialInstructions;
    /**
     * Please provide entry code to gain access to an apartment complex or gate
     *
     * @var string
     */
    protected $gateCode;
    /**
     * In ase your deliveryOption is 'neighbour' please specify where to leave the package 
     *
     * @var string
     */
    protected $whereToLeave;
    /**
     * In case you wish to leave the package with neighbour please provide the neighbour's name
     *
     * @var string
     */
    protected $neighbourName;
    /**
     * In case you wish to leave the package with neighbour please provide the neighbour's house number
     *
     * @var string
     */
    protected $neighbourHouseNumber;
    /**
     * In case your delivery option is 'signatureRelease' please provide name of the person who is authorized to sign and receive the package
     *
     * @var string
     */
    protected $authorizerName;
    /**
     * In case your delivery option is 'servicepoint' please provide unique DHL Express Service point location ID of where the parcel should be delieverd (please contact your local DHL Express Account Manager to obtain the list of the servicepoint IDs)
     *
     * @var string
     */
    protected $servicePointId;
    /**
     * for future use
     *
     * @var string
     */
    protected $requestedDeliveryDate;
    /**
     * Please choose from one of the delivery options
     *
     * @return string
     */
    public function getDeliveryOption(): string
    {
        return $this->deliveryOption;
    }
    /**
     * Please choose from one of the delivery options
     *
     * @param string $deliveryOption
     *
     * @return self
     */
    public function setDeliveryOption(string $deliveryOption): self
    {
        $this->initialized['deliveryOption'] = true;
        $this->deliveryOption = $deliveryOption;
        return $this;
    }
    /**
     * If delivery option is signatureDelivery please specify location where to leave the shipment
     *
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }
    /**
     * If delivery option is signatureDelivery please specify location where to leave the shipment
     *
     * @param string $location
     *
     * @return self
     */
    public function setLocation(string $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;
        return $this;
    }
    /**
     * Please enter additional information that might be useful for the DHL Express courier. This field is conditionally mandatory if selected location is 'Other'.
     *
     * @return string
     */
    public function getSpecialInstructions(): string
    {
        return $this->specialInstructions;
    }
    /**
     * Please enter additional information that might be useful for the DHL Express courier. This field is conditionally mandatory if selected location is 'Other'.
     *
     * @param string $specialInstructions
     *
     * @return self
     */
    public function setSpecialInstructions(string $specialInstructions): self
    {
        $this->initialized['specialInstructions'] = true;
        $this->specialInstructions = $specialInstructions;
        return $this;
    }
    /**
     * Please provide entry code to gain access to an apartment complex or gate
     *
     * @return string
     */
    public function getGateCode(): string
    {
        return $this->gateCode;
    }
    /**
     * Please provide entry code to gain access to an apartment complex or gate
     *
     * @param string $gateCode
     *
     * @return self
     */
    public function setGateCode(string $gateCode): self
    {
        $this->initialized['gateCode'] = true;
        $this->gateCode = $gateCode;
        return $this;
    }
    /**
     * In ase your deliveryOption is 'neighbour' please specify where to leave the package 
     *
     * @return string
     */
    public function getWhereToLeave(): string
    {
        return $this->whereToLeave;
    }
    /**
     * In ase your deliveryOption is 'neighbour' please specify where to leave the package 
     *
     * @param string $whereToLeave
     *
     * @return self
     */
    public function setWhereToLeave(string $whereToLeave): self
    {
        $this->initialized['whereToLeave'] = true;
        $this->whereToLeave = $whereToLeave;
        return $this;
    }
    /**
     * In case you wish to leave the package with neighbour please provide the neighbour's name
     *
     * @return string
     */
    public function getNeighbourName(): string
    {
        return $this->neighbourName;
    }
    /**
     * In case you wish to leave the package with neighbour please provide the neighbour's name
     *
     * @param string $neighbourName
     *
     * @return self
     */
    public function setNeighbourName(string $neighbourName): self
    {
        $this->initialized['neighbourName'] = true;
        $this->neighbourName = $neighbourName;
        return $this;
    }
    /**
     * In case you wish to leave the package with neighbour please provide the neighbour's house number
     *
     * @return string
     */
    public function getNeighbourHouseNumber(): string
    {
        return $this->neighbourHouseNumber;
    }
    /**
     * In case you wish to leave the package with neighbour please provide the neighbour's house number
     *
     * @param string $neighbourHouseNumber
     *
     * @return self
     */
    public function setNeighbourHouseNumber(string $neighbourHouseNumber): self
    {
        $this->initialized['neighbourHouseNumber'] = true;
        $this->neighbourHouseNumber = $neighbourHouseNumber;
        return $this;
    }
    /**
     * In case your delivery option is 'signatureRelease' please provide name of the person who is authorized to sign and receive the package
     *
     * @return string
     */
    public function getAuthorizerName(): string
    {
        return $this->authorizerName;
    }
    /**
     * In case your delivery option is 'signatureRelease' please provide name of the person who is authorized to sign and receive the package
     *
     * @param string $authorizerName
     *
     * @return self
     */
    public function setAuthorizerName(string $authorizerName): self
    {
        $this->initialized['authorizerName'] = true;
        $this->authorizerName = $authorizerName;
        return $this;
    }
    /**
     * In case your delivery option is 'servicepoint' please provide unique DHL Express Service point location ID of where the parcel should be delieverd (please contact your local DHL Express Account Manager to obtain the list of the servicepoint IDs)
     *
     * @return string
     */
    public function getServicePointId(): string
    {
        return $this->servicePointId;
    }
    /**
     * In case your delivery option is 'servicepoint' please provide unique DHL Express Service point location ID of where the parcel should be delieverd (please contact your local DHL Express Account Manager to obtain the list of the servicepoint IDs)
     *
     * @param string $servicePointId
     *
     * @return self
     */
    public function setServicePointId(string $servicePointId): self
    {
        $this->initialized['servicePointId'] = true;
        $this->servicePointId = $servicePointId;
        return $this;
    }
    /**
     * for future use
     *
     * @return string
     */
    public function getRequestedDeliveryDate(): string
    {
        return $this->requestedDeliveryDate;
    }
    /**
     * for future use
     *
     * @param string $requestedDeliveryDate
     *
     * @return self
     */
    public function setRequestedDeliveryDate(string $requestedDeliveryDate): self
    {
        $this->initialized['requestedDeliveryDate'] = true;
        $this->requestedDeliveryDate = $requestedDeliveryDate;
        return $this;
    }
}