<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressExportDeclarationLineItemsItem
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
     * Please provide line item number
     *
     * @var int
     */
    protected $number;
    /**
     * Please provide description of the line item
     *
     * @var string
     */
    protected $description;
    /**
     * Please provide unit or article price line item value
     *
     * @var float
     */
    protected $price;
    /**
     * Please enter information about quantity for this line item
     *
     * @var SupermodelIoLogisticsExpressExportDeclarationLineItemsItemQuantity
     */
    protected $quantity;
    /**
     * Please provide Commodity codes for the shipment at item line level
     *
     * @var list<SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCommodityCodesItem>
     */
    protected $commodityCodes;
    /**
     * Please provide the reason for export
     *
     * @var string
     */
    protected $exportReasonType;
    /**
     * Please enter two letter ISO manufacturer country code
     *
     * @var string
     */
    protected $manufacturerCountry;
    /**
     * Please enter the weight information for line item.  Either a netValue or grossValue must be provided for the line item.
     *
     * @var SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeight
     */
    protected $weight;
    /**
     * Please provide if the Taxes is paid for the line item
     *
     * @var bool
     */
    protected $isTaxesPaid;
    /**
     * Please provide the Customer References for the line item
     *
     * @var list<SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomerReferencesItem>
     */
    protected $customerReferences;
    /**
     * Please provide the customs documents details
     *
     * @var list<SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomsDocumentsItem>
     */
    protected $customsDocuments;
    /**
     * Please provide monetary value of the line item x quantity
     *
     * @var float
     */
    protected $preCalculatedLineItemTotalValue;
    /**
     * Please provide line item number
     *
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }
    /**
     * Please provide line item number
     *
     * @param int $number
     *
     * @return self
     */
    public function setNumber(int $number): self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * Please provide description of the line item
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Please provide description of the line item
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Please provide unit or article price line item value
     *
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
    /**
     * Please provide unit or article price line item value
     *
     * @param float $price
     *
     * @return self
     */
    public function setPrice(float $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
    /**
     * Please enter information about quantity for this line item
     *
     * @return SupermodelIoLogisticsExpressExportDeclarationLineItemsItemQuantity
     */
    public function getQuantity(): SupermodelIoLogisticsExpressExportDeclarationLineItemsItemQuantity
    {
        return $this->quantity;
    }
    /**
     * Please enter information about quantity for this line item
     *
     * @param SupermodelIoLogisticsExpressExportDeclarationLineItemsItemQuantity $quantity
     *
     * @return self
     */
    public function setQuantity(SupermodelIoLogisticsExpressExportDeclarationLineItemsItemQuantity $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Please provide Commodity codes for the shipment at item line level
     *
     * @return list<SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCommodityCodesItem>
     */
    public function getCommodityCodes(): array
    {
        return $this->commodityCodes;
    }
    /**
     * Please provide Commodity codes for the shipment at item line level
     *
     * @param list<SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCommodityCodesItem> $commodityCodes
     *
     * @return self
     */
    public function setCommodityCodes(array $commodityCodes): self
    {
        $this->initialized['commodityCodes'] = true;
        $this->commodityCodes = $commodityCodes;
        return $this;
    }
    /**
     * Please provide the reason for export
     *
     * @return string
     */
    public function getExportReasonType(): string
    {
        return $this->exportReasonType;
    }
    /**
     * Please provide the reason for export
     *
     * @param string $exportReasonType
     *
     * @return self
     */
    public function setExportReasonType(string $exportReasonType): self
    {
        $this->initialized['exportReasonType'] = true;
        $this->exportReasonType = $exportReasonType;
        return $this;
    }
    /**
     * Please enter two letter ISO manufacturer country code
     *
     * @return string
     */
    public function getManufacturerCountry(): string
    {
        return $this->manufacturerCountry;
    }
    /**
     * Please enter two letter ISO manufacturer country code
     *
     * @param string $manufacturerCountry
     *
     * @return self
     */
    public function setManufacturerCountry(string $manufacturerCountry): self
    {
        $this->initialized['manufacturerCountry'] = true;
        $this->manufacturerCountry = $manufacturerCountry;
        return $this;
    }
    /**
     * Please enter the weight information for line item.  Either a netValue or grossValue must be provided for the line item.
     *
     * @return SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeight
     */
    public function getWeight(): SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeight
    {
        return $this->weight;
    }
    /**
     * Please enter the weight information for line item.  Either a netValue or grossValue must be provided for the line item.
     *
     * @param SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeight $weight
     *
     * @return self
     */
    public function setWeight(SupermodelIoLogisticsExpressExportDeclarationLineItemsItemWeight $weight): self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
     * Please provide if the Taxes is paid for the line item
     *
     * @return bool
     */
    public function getIsTaxesPaid(): bool
    {
        return $this->isTaxesPaid;
    }
    /**
     * Please provide if the Taxes is paid for the line item
     *
     * @param bool $isTaxesPaid
     *
     * @return self
     */
    public function setIsTaxesPaid(bool $isTaxesPaid): self
    {
        $this->initialized['isTaxesPaid'] = true;
        $this->isTaxesPaid = $isTaxesPaid;
        return $this;
    }
    /**
     * Please provide the Customer References for the line item
     *
     * @return list<SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomerReferencesItem>
     */
    public function getCustomerReferences(): array
    {
        return $this->customerReferences;
    }
    /**
     * Please provide the Customer References for the line item
     *
     * @param list<SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomerReferencesItem> $customerReferences
     *
     * @return self
     */
    public function setCustomerReferences(array $customerReferences): self
    {
        $this->initialized['customerReferences'] = true;
        $this->customerReferences = $customerReferences;
        return $this;
    }
    /**
     * Please provide the customs documents details
     *
     * @return list<SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomsDocumentsItem>
     */
    public function getCustomsDocuments(): array
    {
        return $this->customsDocuments;
    }
    /**
     * Please provide the customs documents details
     *
     * @param list<SupermodelIoLogisticsExpressExportDeclarationLineItemsItemCustomsDocumentsItem> $customsDocuments
     *
     * @return self
     */
    public function setCustomsDocuments(array $customsDocuments): self
    {
        $this->initialized['customsDocuments'] = true;
        $this->customsDocuments = $customsDocuments;
        return $this;
    }
    /**
     * Please provide monetary value of the line item x quantity
     *
     * @return float
     */
    public function getPreCalculatedLineItemTotalValue(): float
    {
        return $this->preCalculatedLineItemTotalValue;
    }
    /**
     * Please provide monetary value of the line item x quantity
     *
     * @param float $preCalculatedLineItemTotalValue
     *
     * @return self
     */
    public function setPreCalculatedLineItemTotalValue(float $preCalculatedLineItemTotalValue): self
    {
        $this->initialized['preCalculatedLineItemTotalValue'] = true;
        $this->preCalculatedLineItemTotalValue = $preCalculatedLineItemTotalValue;
        return $this;
    }
}