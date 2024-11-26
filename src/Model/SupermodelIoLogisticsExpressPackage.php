<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressPackage
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
     * Please contact your DHL Express representative if you wish to use a DHL specific package otherwise ignore this element.
     *
     * @var string
     */
    protected $typeCode;
    /**
     * The weight of the package.
     *
     * @var float
     */
    protected $weight;
    /**
     * Dimensions of the package
     *
     * @var SupermodelIoLogisticsExpressPackageDimensions
     */
    protected $dimensions;
    /**
     * Here you can declare your customer references for each package
     *
     * @var list<SupermodelIoLogisticsExpressPackageReference>
     */
    protected $customerReferences;
    /**
     * Identifiers section is on the package level where you can optionaly provide a DHL Express waybill number. This has to be enabled by your DHL Express IT contact.
     *
     * @var list<SupermodelIoLogisticsExpressIdentifier>
     */
    protected $identifiers;
    /**
     * Please enter description of content for each package
     *
     * @var string
     */
    protected $description;
    /**
     * This allows you to define up to two bespoke barcodes on the DHL Express Tranport label. To use this feature please set outputImageProperties/imageOptions/templateName as ECOM26_84CI_003 for typeCode=label
     *
     * @var list<SupermodelIoLogisticsExpressPackageLabelBarcodesItem>
     */
    protected $labelBarcodes;
    /**
     * This allows you to enter up to two bespoke texts on the DHL Express Tranport label. To use this feature please set outputImageProperties/imageOptions/templateName as ECOM26_84CI_003 for typeCode=label
     *
     * @var list<SupermodelIoLogisticsExpressPackageLabelTextItem>
     */
    protected $labelText;
    /**
     * Please enter additional customer description
     *
     * @var string
     */
    protected $labelDescription;
    /**
     * Please enter package reference number. If package reference number is provided for at least one package, then package reference number must be provided for all packages.
     *
     * @var float
     */
    protected $referenceNumber;
    /**
     * Please contact your DHL Express representative if you wish to use a DHL specific package otherwise ignore this element.
     *
     * @return string
     */
    public function getTypeCode(): string
    {
        return $this->typeCode;
    }
    /**
     * Please contact your DHL Express representative if you wish to use a DHL specific package otherwise ignore this element.
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
    /**
     * The weight of the package.
     *
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }
    /**
     * The weight of the package.
     *
     * @param float $weight
     *
     * @return self
     */
    public function setWeight(float $weight): self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
     * Dimensions of the package
     *
     * @return SupermodelIoLogisticsExpressPackageDimensions
     */
    public function getDimensions(): SupermodelIoLogisticsExpressPackageDimensions
    {
        return $this->dimensions;
    }
    /**
     * Dimensions of the package
     *
     * @param SupermodelIoLogisticsExpressPackageDimensions $dimensions
     *
     * @return self
     */
    public function setDimensions(SupermodelIoLogisticsExpressPackageDimensions $dimensions): self
    {
        $this->initialized['dimensions'] = true;
        $this->dimensions = $dimensions;
        return $this;
    }
    /**
     * Here you can declare your customer references for each package
     *
     * @return list<SupermodelIoLogisticsExpressPackageReference>
     */
    public function getCustomerReferences(): array
    {
        return $this->customerReferences;
    }
    /**
     * Here you can declare your customer references for each package
     *
     * @param list<SupermodelIoLogisticsExpressPackageReference> $customerReferences
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
     * Identifiers section is on the package level where you can optionaly provide a DHL Express waybill number. This has to be enabled by your DHL Express IT contact.
     *
     * @return list<SupermodelIoLogisticsExpressIdentifier>
     */
    public function getIdentifiers(): array
    {
        return $this->identifiers;
    }
    /**
     * Identifiers section is on the package level where you can optionaly provide a DHL Express waybill number. This has to be enabled by your DHL Express IT contact.
     *
     * @param list<SupermodelIoLogisticsExpressIdentifier> $identifiers
     *
     * @return self
     */
    public function setIdentifiers(array $identifiers): self
    {
        $this->initialized['identifiers'] = true;
        $this->identifiers = $identifiers;
        return $this;
    }
    /**
     * Please enter description of content for each package
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Please enter description of content for each package
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
     * This allows you to define up to two bespoke barcodes on the DHL Express Tranport label. To use this feature please set outputImageProperties/imageOptions/templateName as ECOM26_84CI_003 for typeCode=label
     *
     * @return list<SupermodelIoLogisticsExpressPackageLabelBarcodesItem>
     */
    public function getLabelBarcodes(): array
    {
        return $this->labelBarcodes;
    }
    /**
     * This allows you to define up to two bespoke barcodes on the DHL Express Tranport label. To use this feature please set outputImageProperties/imageOptions/templateName as ECOM26_84CI_003 for typeCode=label
     *
     * @param list<SupermodelIoLogisticsExpressPackageLabelBarcodesItem> $labelBarcodes
     *
     * @return self
     */
    public function setLabelBarcodes(array $labelBarcodes): self
    {
        $this->initialized['labelBarcodes'] = true;
        $this->labelBarcodes = $labelBarcodes;
        return $this;
    }
    /**
     * This allows you to enter up to two bespoke texts on the DHL Express Tranport label. To use this feature please set outputImageProperties/imageOptions/templateName as ECOM26_84CI_003 for typeCode=label
     *
     * @return list<SupermodelIoLogisticsExpressPackageLabelTextItem>
     */
    public function getLabelText(): array
    {
        return $this->labelText;
    }
    /**
     * This allows you to enter up to two bespoke texts on the DHL Express Tranport label. To use this feature please set outputImageProperties/imageOptions/templateName as ECOM26_84CI_003 for typeCode=label
     *
     * @param list<SupermodelIoLogisticsExpressPackageLabelTextItem> $labelText
     *
     * @return self
     */
    public function setLabelText(array $labelText): self
    {
        $this->initialized['labelText'] = true;
        $this->labelText = $labelText;
        return $this;
    }
    /**
     * Please enter additional customer description
     *
     * @return string
     */
    public function getLabelDescription(): string
    {
        return $this->labelDescription;
    }
    /**
     * Please enter additional customer description
     *
     * @param string $labelDescription
     *
     * @return self
     */
    public function setLabelDescription(string $labelDescription): self
    {
        $this->initialized['labelDescription'] = true;
        $this->labelDescription = $labelDescription;
        return $this;
    }
    /**
     * Please enter package reference number. If package reference number is provided for at least one package, then package reference number must be provided for all packages.
     *
     * @return float
     */
    public function getReferenceNumber(): float
    {
        return $this->referenceNumber;
    }
    /**
     * Please enter package reference number. If package reference number is provided for at least one package, then package reference number must be provided for all packages.
     *
     * @param float $referenceNumber
     *
     * @return self
     */
    public function setReferenceNumber(float $referenceNumber): self
    {
        $this->initialized['referenceNumber'] = true;
        $this->referenceNumber = $referenceNumber;
        return $this;
    }
}