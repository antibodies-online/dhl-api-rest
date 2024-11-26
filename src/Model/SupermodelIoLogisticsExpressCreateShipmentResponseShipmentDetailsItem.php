<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItem
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
     * This array contains all the DHL Express special handling feature codes
     *
     * @var list<string>
     */
    protected $serviceHandlingFeatureCodes;
    /**
     * Here you can find calculated volumetric weight based on dimensions provided in the request
     *
     * @var float
     */
    protected $volumetricWeight;
    /**
     * Here you can find billing code which was applied on your shipment
     *
     * @var string
     */
    protected $billingCode;
    /**
     * Here you can find the DHL Express shipment content code of your shipment
     *
     * @var string
     */
    protected $serviceContentCode;
    /**
     * Here you need to define all the parties needed to ship the package
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetails
     */
    protected $customerDetails;
    /**
     * 
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceArea
     */
    protected $originServiceArea;
    /**
     * 
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemDestinationServiceArea
     */
    protected $destinationServiceArea;
    /**
     * Here you can find DHL Routing Code which was applied on your shipment
     *
     * @var string
     */
    protected $dhlRoutingCode;
    /**
     * Here you can find DHL Routing Data ID which was applied on your shipment
     *
     * @var string
     */
    protected $dhlRoutingDataId;
    /**
     * Here you can find Delivery Date Code which was applied on your shipment
     *
     * @var string
     */
    protected $deliveryDateCode;
    /**
     * Here you can find Delivery Time Code which was applied on your shipment
     *
     * @var string
     */
    protected $deliveryTimeCode;
    /**
     * Here you can find the product short name of your shipment
     *
     * @var string
     */
    protected $productShortName;
    /**
     * 
     *
     * @var list<SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemValueAddedServicesItem>
     */
    protected $valueAddedServices;
    /**
     * Here you can find pickup details
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetails
     */
    protected $pickupDetails;
    /**
     * This array contains all the DHL Express special handling feature codes
     *
     * @return list<string>
     */
    public function getServiceHandlingFeatureCodes(): array
    {
        return $this->serviceHandlingFeatureCodes;
    }
    /**
     * This array contains all the DHL Express special handling feature codes
     *
     * @param list<string> $serviceHandlingFeatureCodes
     *
     * @return self
     */
    public function setServiceHandlingFeatureCodes(array $serviceHandlingFeatureCodes): self
    {
        $this->initialized['serviceHandlingFeatureCodes'] = true;
        $this->serviceHandlingFeatureCodes = $serviceHandlingFeatureCodes;
        return $this;
    }
    /**
     * Here you can find calculated volumetric weight based on dimensions provided in the request
     *
     * @return float
     */
    public function getVolumetricWeight(): float
    {
        return $this->volumetricWeight;
    }
    /**
     * Here you can find calculated volumetric weight based on dimensions provided in the request
     *
     * @param float $volumetricWeight
     *
     * @return self
     */
    public function setVolumetricWeight(float $volumetricWeight): self
    {
        $this->initialized['volumetricWeight'] = true;
        $this->volumetricWeight = $volumetricWeight;
        return $this;
    }
    /**
     * Here you can find billing code which was applied on your shipment
     *
     * @return string
     */
    public function getBillingCode(): string
    {
        return $this->billingCode;
    }
    /**
     * Here you can find billing code which was applied on your shipment
     *
     * @param string $billingCode
     *
     * @return self
     */
    public function setBillingCode(string $billingCode): self
    {
        $this->initialized['billingCode'] = true;
        $this->billingCode = $billingCode;
        return $this;
    }
    /**
     * Here you can find the DHL Express shipment content code of your shipment
     *
     * @return string
     */
    public function getServiceContentCode(): string
    {
        return $this->serviceContentCode;
    }
    /**
     * Here you can find the DHL Express shipment content code of your shipment
     *
     * @param string $serviceContentCode
     *
     * @return self
     */
    public function setServiceContentCode(string $serviceContentCode): self
    {
        $this->initialized['serviceContentCode'] = true;
        $this->serviceContentCode = $serviceContentCode;
        return $this;
    }
    /**
     * Here you need to define all the parties needed to ship the package
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetails
     */
    public function getCustomerDetails(): SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetails
    {
        return $this->customerDetails;
    }
    /**
     * Here you need to define all the parties needed to ship the package
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetails $customerDetails
     *
     * @return self
     */
    public function setCustomerDetails(SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemCustomerDetails $customerDetails): self
    {
        $this->initialized['customerDetails'] = true;
        $this->customerDetails = $customerDetails;
        return $this;
    }
    /**
     * 
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceArea
     */
    public function getOriginServiceArea(): SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceArea
    {
        return $this->originServiceArea;
    }
    /**
     * 
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceArea $originServiceArea
     *
     * @return self
     */
    public function setOriginServiceArea(SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceArea $originServiceArea): self
    {
        $this->initialized['originServiceArea'] = true;
        $this->originServiceArea = $originServiceArea;
        return $this;
    }
    /**
     * 
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemDestinationServiceArea
     */
    public function getDestinationServiceArea(): SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemDestinationServiceArea
    {
        return $this->destinationServiceArea;
    }
    /**
     * 
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemDestinationServiceArea $destinationServiceArea
     *
     * @return self
     */
    public function setDestinationServiceArea(SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemDestinationServiceArea $destinationServiceArea): self
    {
        $this->initialized['destinationServiceArea'] = true;
        $this->destinationServiceArea = $destinationServiceArea;
        return $this;
    }
    /**
     * Here you can find DHL Routing Code which was applied on your shipment
     *
     * @return string
     */
    public function getDhlRoutingCode(): string
    {
        return $this->dhlRoutingCode;
    }
    /**
     * Here you can find DHL Routing Code which was applied on your shipment
     *
     * @param string $dhlRoutingCode
     *
     * @return self
     */
    public function setDhlRoutingCode(string $dhlRoutingCode): self
    {
        $this->initialized['dhlRoutingCode'] = true;
        $this->dhlRoutingCode = $dhlRoutingCode;
        return $this;
    }
    /**
     * Here you can find DHL Routing Data ID which was applied on your shipment
     *
     * @return string
     */
    public function getDhlRoutingDataId(): string
    {
        return $this->dhlRoutingDataId;
    }
    /**
     * Here you can find DHL Routing Data ID which was applied on your shipment
     *
     * @param string $dhlRoutingDataId
     *
     * @return self
     */
    public function setDhlRoutingDataId(string $dhlRoutingDataId): self
    {
        $this->initialized['dhlRoutingDataId'] = true;
        $this->dhlRoutingDataId = $dhlRoutingDataId;
        return $this;
    }
    /**
     * Here you can find Delivery Date Code which was applied on your shipment
     *
     * @return string
     */
    public function getDeliveryDateCode(): string
    {
        return $this->deliveryDateCode;
    }
    /**
     * Here you can find Delivery Date Code which was applied on your shipment
     *
     * @param string $deliveryDateCode
     *
     * @return self
     */
    public function setDeliveryDateCode(string $deliveryDateCode): self
    {
        $this->initialized['deliveryDateCode'] = true;
        $this->deliveryDateCode = $deliveryDateCode;
        return $this;
    }
    /**
     * Here you can find Delivery Time Code which was applied on your shipment
     *
     * @return string
     */
    public function getDeliveryTimeCode(): string
    {
        return $this->deliveryTimeCode;
    }
    /**
     * Here you can find Delivery Time Code which was applied on your shipment
     *
     * @param string $deliveryTimeCode
     *
     * @return self
     */
    public function setDeliveryTimeCode(string $deliveryTimeCode): self
    {
        $this->initialized['deliveryTimeCode'] = true;
        $this->deliveryTimeCode = $deliveryTimeCode;
        return $this;
    }
    /**
     * Here you can find the product short name of your shipment
     *
     * @return string
     */
    public function getProductShortName(): string
    {
        return $this->productShortName;
    }
    /**
     * Here you can find the product short name of your shipment
     *
     * @param string $productShortName
     *
     * @return self
     */
    public function setProductShortName(string $productShortName): self
    {
        $this->initialized['productShortName'] = true;
        $this->productShortName = $productShortName;
        return $this;
    }
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemValueAddedServicesItem>
     */
    public function getValueAddedServices(): array
    {
        return $this->valueAddedServices;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemValueAddedServicesItem> $valueAddedServices
     *
     * @return self
     */
    public function setValueAddedServices(array $valueAddedServices): self
    {
        $this->initialized['valueAddedServices'] = true;
        $this->valueAddedServices = $valueAddedServices;
        return $this;
    }
    /**
     * Here you can find pickup details
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetails
     */
    public function getPickupDetails(): SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetails
    {
        return $this->pickupDetails;
    }
    /**
     * Here you can find pickup details
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetails $pickupDetails
     *
     * @return self
     */
    public function setPickupDetails(SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetails $pickupDetails): self
    {
        $this->initialized['pickupDetails'] = true;
        $this->pickupDetails = $pickupDetails;
        return $this;
    }
}