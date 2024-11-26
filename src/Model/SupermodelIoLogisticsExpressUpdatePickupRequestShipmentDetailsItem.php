<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressUpdatePickupRequestShipmentDetailsItem
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
     * Please provide DHL Express Global product code of the shipment
     *
     * @var string
     */
    protected $productCode;
    /**
     * Please provide DHL Express Local product code of the shipment
     *
     * @var string
     */
    protected $localProductCode;
    /**
     * 
     *
     * @var list<SupermodelIoLogisticsExpressAccount>
     */
    protected $accounts;
    /**
     * 
     *
     * @var list<SupermodelIoLogisticsExpressValueAddedServicesRates>
     */
    protected $valueAddedServices;
    /**
     * For customs purposes please advise if your shipment is dutiable (true) or non dutiable (false)
     *
     * @var bool
     */
    protected $isCustomsDeclarable;
    /**
     * For customs purposes please advise on declared value of the shipment
     *
     * @var float
     */
    protected $declaredValue;
    /**
     * For customs purposes please advise on declared value currency code of the shipment
     *
     * @var string
     */
    protected $declaredValueCurrency;
    /**
     * Please enter Unit of measurement - metric,imperial
     *
     * @var string
     */
    protected $unitOfMeasurement;
    /**
     * Please provide Shipment Identification number (AWB number)
     *
     * @var string
     */
    protected $shipmentTrackingNumber;
    /**
     * 
     *
     * @var list<SupermodelIoLogisticsExpressPackageRR>
     */
    protected $packages;
    /**
     * Please provide DHL Express Global product code of the shipment
     *
     * @return string
     */
    public function getProductCode(): string
    {
        return $this->productCode;
    }
    /**
     * Please provide DHL Express Global product code of the shipment
     *
     * @param string $productCode
     *
     * @return self
     */
    public function setProductCode(string $productCode): self
    {
        $this->initialized['productCode'] = true;
        $this->productCode = $productCode;
        return $this;
    }
    /**
     * Please provide DHL Express Local product code of the shipment
     *
     * @return string
     */
    public function getLocalProductCode(): string
    {
        return $this->localProductCode;
    }
    /**
     * Please provide DHL Express Local product code of the shipment
     *
     * @param string $localProductCode
     *
     * @return self
     */
    public function setLocalProductCode(string $localProductCode): self
    {
        $this->initialized['localProductCode'] = true;
        $this->localProductCode = $localProductCode;
        return $this;
    }
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressAccount>
     */
    public function getAccounts(): array
    {
        return $this->accounts;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressAccount> $accounts
     *
     * @return self
     */
    public function setAccounts(array $accounts): self
    {
        $this->initialized['accounts'] = true;
        $this->accounts = $accounts;
        return $this;
    }
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressValueAddedServicesRates>
     */
    public function getValueAddedServices(): array
    {
        return $this->valueAddedServices;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressValueAddedServicesRates> $valueAddedServices
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
     * For customs purposes please advise if your shipment is dutiable (true) or non dutiable (false)
     *
     * @return bool
     */
    public function getIsCustomsDeclarable(): bool
    {
        return $this->isCustomsDeclarable;
    }
    /**
     * For customs purposes please advise if your shipment is dutiable (true) or non dutiable (false)
     *
     * @param bool $isCustomsDeclarable
     *
     * @return self
     */
    public function setIsCustomsDeclarable(bool $isCustomsDeclarable): self
    {
        $this->initialized['isCustomsDeclarable'] = true;
        $this->isCustomsDeclarable = $isCustomsDeclarable;
        return $this;
    }
    /**
     * For customs purposes please advise on declared value of the shipment
     *
     * @return float
     */
    public function getDeclaredValue(): float
    {
        return $this->declaredValue;
    }
    /**
     * For customs purposes please advise on declared value of the shipment
     *
     * @param float $declaredValue
     *
     * @return self
     */
    public function setDeclaredValue(float $declaredValue): self
    {
        $this->initialized['declaredValue'] = true;
        $this->declaredValue = $declaredValue;
        return $this;
    }
    /**
     * For customs purposes please advise on declared value currency code of the shipment
     *
     * @return string
     */
    public function getDeclaredValueCurrency(): string
    {
        return $this->declaredValueCurrency;
    }
    /**
     * For customs purposes please advise on declared value currency code of the shipment
     *
     * @param string $declaredValueCurrency
     *
     * @return self
     */
    public function setDeclaredValueCurrency(string $declaredValueCurrency): self
    {
        $this->initialized['declaredValueCurrency'] = true;
        $this->declaredValueCurrency = $declaredValueCurrency;
        return $this;
    }
    /**
     * Please enter Unit of measurement - metric,imperial
     *
     * @return string
     */
    public function getUnitOfMeasurement(): string
    {
        return $this->unitOfMeasurement;
    }
    /**
     * Please enter Unit of measurement - metric,imperial
     *
     * @param string $unitOfMeasurement
     *
     * @return self
     */
    public function setUnitOfMeasurement(string $unitOfMeasurement): self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
    /**
     * Please provide Shipment Identification number (AWB number)
     *
     * @return string
     */
    public function getShipmentTrackingNumber(): string
    {
        return $this->shipmentTrackingNumber;
    }
    /**
     * Please provide Shipment Identification number (AWB number)
     *
     * @param string $shipmentTrackingNumber
     *
     * @return self
     */
    public function setShipmentTrackingNumber(string $shipmentTrackingNumber): self
    {
        $this->initialized['shipmentTrackingNumber'] = true;
        $this->shipmentTrackingNumber = $shipmentTrackingNumber;
        return $this;
    }
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressPackageRR>
     */
    public function getPackages(): array
    {
        return $this->packages;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressPackageRR> $packages
     *
     * @return self
     */
    public function setPackages(array $packages): self
    {
        $this->initialized['packages'] = true;
        $this->packages = $packages;
        return $this;
    }
}