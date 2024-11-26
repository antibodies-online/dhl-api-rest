<?php

namespace AntibodiesOnline\DHL\Api\Model;

class ServicePointCapabilities extends \ArrayObject
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
     * Indicates whether parking facility is available in the service point or not
     *
     * @var bool
     */
    protected $parkingAvailable;
    /**
     * Indicates whether disabled access is available in the service point or not
     *
     * @var bool
     */
    protected $disabledAccess;
    /**
     * Indicates whether Shipment Drop Off is available in the service point or not
     *
     * @var bool
     */
    protected $shipmentDropOff;
    /**
     * Indicates whether Shipment Collection is available in the service point or not
     *
     * @var bool
     */
    protected $shipmentCollection;
    /**
     * Indicates whether International Shipping is available in the service point or not
     *
     * @var bool
     */
    protected $internationalShipping;
    /**
     * Indicates whether Domestic Shipping is available in the service point or not
     *
     * @var bool
     */
    protected $domesticShipping;
    /**
     * Indicates whether Account Shipping is available in the service point or not
     *
     * @var bool
     */
    protected $accountShippers;
    /**
     * Indicates whether Label Printing is available in the service point or not
     *
     * @var bool
     */
    protected $labelPrinting;
    /**
     * Indicates whether Insurance facility is available in the service point or not
     *
     * @var bool
     */
    protected $insurance;
    /**
     * Indicates whether Import Charges is applicable in the service point or not
     *
     * @var bool
     */
    protected $importCharges;
    /**
     * Indicates whether Packaging facility is available in the service point or not
     *
     * @var bool
     */
    protected $packaging;
    /**
     * Indicates whether Receiver Paying option is available in the service point or not
     *
     * @var bool
     */
    protected $receiverPaid;
    /**
     * Indicates whether VISA program is applicable in the service point or not
     *
     * @var bool
     */
    protected $visaProgram;
    /**
     * Indicates whether pay by cash option is available in the service point or not
     *
     * @var bool
     */
    protected $payWithCash;
    /**
     * Indicates whether pay with credit card option is available in the service point or not
     *
     * @var bool
     */
    protected $payWithCreditCard;
    /**
     * Indicates whether pay with cheque option is available in the service point or not
     *
     * @var bool
     */
    protected $payWithCheque;
    /**
     * Indicates whether pay with mobile option is available in the service point or not
     *
     * @var bool
     */
    protected $payWithMobile;
    /**
     * Indicates whether pay with paypal option is available in the service point or not
     *
     * @var bool
     */
    protected $payWithPayPal;
    /**
     * Title for the parking icon
     *
     * @var string
     */
    protected $parkingTitle;
    /**
     * Title for the disable wheel chair icon
     *
     * @var string
     */
    protected $disabledAccessTitle;
    /**
     * Piece Weight Limit
     *
     * @var float
     */
    protected $pieceWeightLimit;
    /**
     * Enumeration (KG or LB)
     *
     * @var string
     */
    protected $pieceWeightLimitUnit;
    /**
     * Array of numbers L W H
     *
     * @var Dimensions
     */
    protected $pieceDimensionsLimit;
    /**
     * Enumeration (CM or IN)
     *
     * @var string
     */
    protected $pieceDimensionsLimitUnit;
    /**
     * Number (integer)
     *
     * @var float
     */
    protected $pieceCountLimit;
    /**
     * Account prepaid shippers
     *
     * @var bool
     */
    protected $accountPrepaidShippers;
    /**
     * Prepaid shippers
     *
     * @var bool
     */
    protected $prepaidShippers;
    /**
     * Pre-printed return label
     *
     * @var bool
     */
    protected $prePrintReturnLabel;
    /**
     * Indicates whether this particular service point can handle label free shipments or not
     *
     * @var bool
     */
    protected $labelFree;
    /**
     * PPC list.
     *
     * @var list<string>
     */
    protected $ppcList;
    /**
     * Obsolete. This is planned to be removed in future releases.
     *
     * @var string
     */
    protected $html;
    /**
     * PPC codes available for this service point
     *
     * @var string
     */
    protected $capabilityCodes;
    /**
     * Indicates whether parking facility is available in the service point or not
     *
     * @return bool
     */
    public function getParkingAvailable(): bool
    {
        return $this->parkingAvailable;
    }
    /**
     * Indicates whether parking facility is available in the service point or not
     *
     * @param bool $parkingAvailable
     *
     * @return self
     */
    public function setParkingAvailable(bool $parkingAvailable): self
    {
        $this->initialized['parkingAvailable'] = true;
        $this->parkingAvailable = $parkingAvailable;
        return $this;
    }
    /**
     * Indicates whether disabled access is available in the service point or not
     *
     * @return bool
     */
    public function getDisabledAccess(): bool
    {
        return $this->disabledAccess;
    }
    /**
     * Indicates whether disabled access is available in the service point or not
     *
     * @param bool $disabledAccess
     *
     * @return self
     */
    public function setDisabledAccess(bool $disabledAccess): self
    {
        $this->initialized['disabledAccess'] = true;
        $this->disabledAccess = $disabledAccess;
        return $this;
    }
    /**
     * Indicates whether Shipment Drop Off is available in the service point or not
     *
     * @return bool
     */
    public function getShipmentDropOff(): bool
    {
        return $this->shipmentDropOff;
    }
    /**
     * Indicates whether Shipment Drop Off is available in the service point or not
     *
     * @param bool $shipmentDropOff
     *
     * @return self
     */
    public function setShipmentDropOff(bool $shipmentDropOff): self
    {
        $this->initialized['shipmentDropOff'] = true;
        $this->shipmentDropOff = $shipmentDropOff;
        return $this;
    }
    /**
     * Indicates whether Shipment Collection is available in the service point or not
     *
     * @return bool
     */
    public function getShipmentCollection(): bool
    {
        return $this->shipmentCollection;
    }
    /**
     * Indicates whether Shipment Collection is available in the service point or not
     *
     * @param bool $shipmentCollection
     *
     * @return self
     */
    public function setShipmentCollection(bool $shipmentCollection): self
    {
        $this->initialized['shipmentCollection'] = true;
        $this->shipmentCollection = $shipmentCollection;
        return $this;
    }
    /**
     * Indicates whether International Shipping is available in the service point or not
     *
     * @return bool
     */
    public function getInternationalShipping(): bool
    {
        return $this->internationalShipping;
    }
    /**
     * Indicates whether International Shipping is available in the service point or not
     *
     * @param bool $internationalShipping
     *
     * @return self
     */
    public function setInternationalShipping(bool $internationalShipping): self
    {
        $this->initialized['internationalShipping'] = true;
        $this->internationalShipping = $internationalShipping;
        return $this;
    }
    /**
     * Indicates whether Domestic Shipping is available in the service point or not
     *
     * @return bool
     */
    public function getDomesticShipping(): bool
    {
        return $this->domesticShipping;
    }
    /**
     * Indicates whether Domestic Shipping is available in the service point or not
     *
     * @param bool $domesticShipping
     *
     * @return self
     */
    public function setDomesticShipping(bool $domesticShipping): self
    {
        $this->initialized['domesticShipping'] = true;
        $this->domesticShipping = $domesticShipping;
        return $this;
    }
    /**
     * Indicates whether Account Shipping is available in the service point or not
     *
     * @return bool
     */
    public function getAccountShippers(): bool
    {
        return $this->accountShippers;
    }
    /**
     * Indicates whether Account Shipping is available in the service point or not
     *
     * @param bool $accountShippers
     *
     * @return self
     */
    public function setAccountShippers(bool $accountShippers): self
    {
        $this->initialized['accountShippers'] = true;
        $this->accountShippers = $accountShippers;
        return $this;
    }
    /**
     * Indicates whether Label Printing is available in the service point or not
     *
     * @return bool
     */
    public function getLabelPrinting(): bool
    {
        return $this->labelPrinting;
    }
    /**
     * Indicates whether Label Printing is available in the service point or not
     *
     * @param bool $labelPrinting
     *
     * @return self
     */
    public function setLabelPrinting(bool $labelPrinting): self
    {
        $this->initialized['labelPrinting'] = true;
        $this->labelPrinting = $labelPrinting;
        return $this;
    }
    /**
     * Indicates whether Insurance facility is available in the service point or not
     *
     * @return bool
     */
    public function getInsurance(): bool
    {
        return $this->insurance;
    }
    /**
     * Indicates whether Insurance facility is available in the service point or not
     *
     * @param bool $insurance
     *
     * @return self
     */
    public function setInsurance(bool $insurance): self
    {
        $this->initialized['insurance'] = true;
        $this->insurance = $insurance;
        return $this;
    }
    /**
     * Indicates whether Import Charges is applicable in the service point or not
     *
     * @return bool
     */
    public function getImportCharges(): bool
    {
        return $this->importCharges;
    }
    /**
     * Indicates whether Import Charges is applicable in the service point or not
     *
     * @param bool $importCharges
     *
     * @return self
     */
    public function setImportCharges(bool $importCharges): self
    {
        $this->initialized['importCharges'] = true;
        $this->importCharges = $importCharges;
        return $this;
    }
    /**
     * Indicates whether Packaging facility is available in the service point or not
     *
     * @return bool
     */
    public function getPackaging(): bool
    {
        return $this->packaging;
    }
    /**
     * Indicates whether Packaging facility is available in the service point or not
     *
     * @param bool $packaging
     *
     * @return self
     */
    public function setPackaging(bool $packaging): self
    {
        $this->initialized['packaging'] = true;
        $this->packaging = $packaging;
        return $this;
    }
    /**
     * Indicates whether Receiver Paying option is available in the service point or not
     *
     * @return bool
     */
    public function getReceiverPaid(): bool
    {
        return $this->receiverPaid;
    }
    /**
     * Indicates whether Receiver Paying option is available in the service point or not
     *
     * @param bool $receiverPaid
     *
     * @return self
     */
    public function setReceiverPaid(bool $receiverPaid): self
    {
        $this->initialized['receiverPaid'] = true;
        $this->receiverPaid = $receiverPaid;
        return $this;
    }
    /**
     * Indicates whether VISA program is applicable in the service point or not
     *
     * @return bool
     */
    public function getVisaProgram(): bool
    {
        return $this->visaProgram;
    }
    /**
     * Indicates whether VISA program is applicable in the service point or not
     *
     * @param bool $visaProgram
     *
     * @return self
     */
    public function setVisaProgram(bool $visaProgram): self
    {
        $this->initialized['visaProgram'] = true;
        $this->visaProgram = $visaProgram;
        return $this;
    }
    /**
     * Indicates whether pay by cash option is available in the service point or not
     *
     * @return bool
     */
    public function getPayWithCash(): bool
    {
        return $this->payWithCash;
    }
    /**
     * Indicates whether pay by cash option is available in the service point or not
     *
     * @param bool $payWithCash
     *
     * @return self
     */
    public function setPayWithCash(bool $payWithCash): self
    {
        $this->initialized['payWithCash'] = true;
        $this->payWithCash = $payWithCash;
        return $this;
    }
    /**
     * Indicates whether pay with credit card option is available in the service point or not
     *
     * @return bool
     */
    public function getPayWithCreditCard(): bool
    {
        return $this->payWithCreditCard;
    }
    /**
     * Indicates whether pay with credit card option is available in the service point or not
     *
     * @param bool $payWithCreditCard
     *
     * @return self
     */
    public function setPayWithCreditCard(bool $payWithCreditCard): self
    {
        $this->initialized['payWithCreditCard'] = true;
        $this->payWithCreditCard = $payWithCreditCard;
        return $this;
    }
    /**
     * Indicates whether pay with cheque option is available in the service point or not
     *
     * @return bool
     */
    public function getPayWithCheque(): bool
    {
        return $this->payWithCheque;
    }
    /**
     * Indicates whether pay with cheque option is available in the service point or not
     *
     * @param bool $payWithCheque
     *
     * @return self
     */
    public function setPayWithCheque(bool $payWithCheque): self
    {
        $this->initialized['payWithCheque'] = true;
        $this->payWithCheque = $payWithCheque;
        return $this;
    }
    /**
     * Indicates whether pay with mobile option is available in the service point or not
     *
     * @return bool
     */
    public function getPayWithMobile(): bool
    {
        return $this->payWithMobile;
    }
    /**
     * Indicates whether pay with mobile option is available in the service point or not
     *
     * @param bool $payWithMobile
     *
     * @return self
     */
    public function setPayWithMobile(bool $payWithMobile): self
    {
        $this->initialized['payWithMobile'] = true;
        $this->payWithMobile = $payWithMobile;
        return $this;
    }
    /**
     * Indicates whether pay with paypal option is available in the service point or not
     *
     * @return bool
     */
    public function getPayWithPayPal(): bool
    {
        return $this->payWithPayPal;
    }
    /**
     * Indicates whether pay with paypal option is available in the service point or not
     *
     * @param bool $payWithPayPal
     *
     * @return self
     */
    public function setPayWithPayPal(bool $payWithPayPal): self
    {
        $this->initialized['payWithPayPal'] = true;
        $this->payWithPayPal = $payWithPayPal;
        return $this;
    }
    /**
     * Title for the parking icon
     *
     * @return string
     */
    public function getParkingTitle(): string
    {
        return $this->parkingTitle;
    }
    /**
     * Title for the parking icon
     *
     * @param string $parkingTitle
     *
     * @return self
     */
    public function setParkingTitle(string $parkingTitle): self
    {
        $this->initialized['parkingTitle'] = true;
        $this->parkingTitle = $parkingTitle;
        return $this;
    }
    /**
     * Title for the disable wheel chair icon
     *
     * @return string
     */
    public function getDisabledAccessTitle(): string
    {
        return $this->disabledAccessTitle;
    }
    /**
     * Title for the disable wheel chair icon
     *
     * @param string $disabledAccessTitle
     *
     * @return self
     */
    public function setDisabledAccessTitle(string $disabledAccessTitle): self
    {
        $this->initialized['disabledAccessTitle'] = true;
        $this->disabledAccessTitle = $disabledAccessTitle;
        return $this;
    }
    /**
     * Piece Weight Limit
     *
     * @return float
     */
    public function getPieceWeightLimit(): float
    {
        return $this->pieceWeightLimit;
    }
    /**
     * Piece Weight Limit
     *
     * @param float $pieceWeightLimit
     *
     * @return self
     */
    public function setPieceWeightLimit(float $pieceWeightLimit): self
    {
        $this->initialized['pieceWeightLimit'] = true;
        $this->pieceWeightLimit = $pieceWeightLimit;
        return $this;
    }
    /**
     * Enumeration (KG or LB)
     *
     * @return string
     */
    public function getPieceWeightLimitUnit(): string
    {
        return $this->pieceWeightLimitUnit;
    }
    /**
     * Enumeration (KG or LB)
     *
     * @param string $pieceWeightLimitUnit
     *
     * @return self
     */
    public function setPieceWeightLimitUnit(string $pieceWeightLimitUnit): self
    {
        $this->initialized['pieceWeightLimitUnit'] = true;
        $this->pieceWeightLimitUnit = $pieceWeightLimitUnit;
        return $this;
    }
    /**
     * Array of numbers L W H
     *
     * @return Dimensions
     */
    public function getPieceDimensionsLimit(): Dimensions
    {
        return $this->pieceDimensionsLimit;
    }
    /**
     * Array of numbers L W H
     *
     * @param Dimensions $pieceDimensionsLimit
     *
     * @return self
     */
    public function setPieceDimensionsLimit(Dimensions $pieceDimensionsLimit): self
    {
        $this->initialized['pieceDimensionsLimit'] = true;
        $this->pieceDimensionsLimit = $pieceDimensionsLimit;
        return $this;
    }
    /**
     * Enumeration (CM or IN)
     *
     * @return string
     */
    public function getPieceDimensionsLimitUnit(): string
    {
        return $this->pieceDimensionsLimitUnit;
    }
    /**
     * Enumeration (CM or IN)
     *
     * @param string $pieceDimensionsLimitUnit
     *
     * @return self
     */
    public function setPieceDimensionsLimitUnit(string $pieceDimensionsLimitUnit): self
    {
        $this->initialized['pieceDimensionsLimitUnit'] = true;
        $this->pieceDimensionsLimitUnit = $pieceDimensionsLimitUnit;
        return $this;
    }
    /**
     * Number (integer)
     *
     * @return float
     */
    public function getPieceCountLimit(): float
    {
        return $this->pieceCountLimit;
    }
    /**
     * Number (integer)
     *
     * @param float $pieceCountLimit
     *
     * @return self
     */
    public function setPieceCountLimit(float $pieceCountLimit): self
    {
        $this->initialized['pieceCountLimit'] = true;
        $this->pieceCountLimit = $pieceCountLimit;
        return $this;
    }
    /**
     * Account prepaid shippers
     *
     * @return bool
     */
    public function getAccountPrepaidShippers(): bool
    {
        return $this->accountPrepaidShippers;
    }
    /**
     * Account prepaid shippers
     *
     * @param bool $accountPrepaidShippers
     *
     * @return self
     */
    public function setAccountPrepaidShippers(bool $accountPrepaidShippers): self
    {
        $this->initialized['accountPrepaidShippers'] = true;
        $this->accountPrepaidShippers = $accountPrepaidShippers;
        return $this;
    }
    /**
     * Prepaid shippers
     *
     * @return bool
     */
    public function getPrepaidShippers(): bool
    {
        return $this->prepaidShippers;
    }
    /**
     * Prepaid shippers
     *
     * @param bool $prepaidShippers
     *
     * @return self
     */
    public function setPrepaidShippers(bool $prepaidShippers): self
    {
        $this->initialized['prepaidShippers'] = true;
        $this->prepaidShippers = $prepaidShippers;
        return $this;
    }
    /**
     * Pre-printed return label
     *
     * @return bool
     */
    public function getPrePrintReturnLabel(): bool
    {
        return $this->prePrintReturnLabel;
    }
    /**
     * Pre-printed return label
     *
     * @param bool $prePrintReturnLabel
     *
     * @return self
     */
    public function setPrePrintReturnLabel(bool $prePrintReturnLabel): self
    {
        $this->initialized['prePrintReturnLabel'] = true;
        $this->prePrintReturnLabel = $prePrintReturnLabel;
        return $this;
    }
    /**
     * Indicates whether this particular service point can handle label free shipments or not
     *
     * @return bool
     */
    public function getLabelFree(): bool
    {
        return $this->labelFree;
    }
    /**
     * Indicates whether this particular service point can handle label free shipments or not
     *
     * @param bool $labelFree
     *
     * @return self
     */
    public function setLabelFree(bool $labelFree): self
    {
        $this->initialized['labelFree'] = true;
        $this->labelFree = $labelFree;
        return $this;
    }
    /**
     * PPC list.
     *
     * @return list<string>
     */
    public function getPpcList(): array
    {
        return $this->ppcList;
    }
    /**
     * PPC list.
     *
     * @param list<string> $ppcList
     *
     * @return self
     */
    public function setPpcList(array $ppcList): self
    {
        $this->initialized['ppcList'] = true;
        $this->ppcList = $ppcList;
        return $this;
    }
    /**
     * Obsolete. This is planned to be removed in future releases.
     *
     * @return string
     */
    public function getHtml(): string
    {
        return $this->html;
    }
    /**
     * Obsolete. This is planned to be removed in future releases.
     *
     * @param string $html
     *
     * @return self
     */
    public function setHtml(string $html): self
    {
        $this->initialized['html'] = true;
        $this->html = $html;
        return $this;
    }
    /**
     * PPC codes available for this service point
     *
     * @return string
     */
    public function getCapabilityCodes(): string
    {
        return $this->capabilityCodes;
    }
    /**
     * PPC codes available for this service point
     *
     * @param string $capabilityCodes
     *
     * @return self
     */
    public function setCapabilityCodes(string $capabilityCodes): self
    {
        $this->initialized['capabilityCodes'] = true;
        $this->capabilityCodes = $capabilityCodes;
        return $this;
    }
}