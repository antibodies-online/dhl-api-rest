<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBuyerDetails
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
     * 
     *
     * @var SupermodelIoLogisticsExpressAddressCreateShipmentRequest
     */
    protected $postalAddress;
    /**
     * 
     *
     * @var SupermodelIoLogisticsExpressContactBuyer
     */
    protected $contactInformation;
    /**
     * 
     *
     * @var list<SupermodelIoLogisticsExpressRegistrationNumbers>
     */
    protected $registrationNumbers;
    /**
     * 
     *
     * @var list<SupermodelIoLogisticsExpressBankDetailsItem>
     */
    protected $bankDetails;
    /**
     * Please enter the business party type of the buyer
     *
     * @var string
     */
    protected $typeCode;
    /**
     * 
     *
     * @return SupermodelIoLogisticsExpressAddressCreateShipmentRequest
     */
    public function getPostalAddress(): SupermodelIoLogisticsExpressAddressCreateShipmentRequest
    {
        return $this->postalAddress;
    }
    /**
     * 
     *
     * @param SupermodelIoLogisticsExpressAddressCreateShipmentRequest $postalAddress
     *
     * @return self
     */
    public function setPostalAddress(SupermodelIoLogisticsExpressAddressCreateShipmentRequest $postalAddress): self
    {
        $this->initialized['postalAddress'] = true;
        $this->postalAddress = $postalAddress;
        return $this;
    }
    /**
     * 
     *
     * @return SupermodelIoLogisticsExpressContactBuyer
     */
    public function getContactInformation(): SupermodelIoLogisticsExpressContactBuyer
    {
        return $this->contactInformation;
    }
    /**
     * 
     *
     * @param SupermodelIoLogisticsExpressContactBuyer $contactInformation
     *
     * @return self
     */
    public function setContactInformation(SupermodelIoLogisticsExpressContactBuyer $contactInformation): self
    {
        $this->initialized['contactInformation'] = true;
        $this->contactInformation = $contactInformation;
        return $this;
    }
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressRegistrationNumbers>
     */
    public function getRegistrationNumbers(): array
    {
        return $this->registrationNumbers;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressRegistrationNumbers> $registrationNumbers
     *
     * @return self
     */
    public function setRegistrationNumbers(array $registrationNumbers): self
    {
        $this->initialized['registrationNumbers'] = true;
        $this->registrationNumbers = $registrationNumbers;
        return $this;
    }
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressBankDetailsItem>
     */
    public function getBankDetails(): array
    {
        return $this->bankDetails;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressBankDetailsItem> $bankDetails
     *
     * @return self
     */
    public function setBankDetails(array $bankDetails): self
    {
        $this->initialized['bankDetails'] = true;
        $this->bankDetails = $bankDetails;
        return $this;
    }
    /**
     * Please enter the business party type of the buyer
     *
     * @return string
     */
    public function getTypeCode(): string
    {
        return $this->typeCode;
    }
    /**
     * Please enter the business party type of the buyer
     *
     * @param string $typeCode
     *
     * @return self
     */
    public function setTypeCode(string $typeCode): self
    {
        $this->initialized['typeCode'] = true;
        $this->typeCode = $typeCode;
        return $this;
    }
}