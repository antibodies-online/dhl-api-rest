<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressExportDeclarationLineItemsItemQuantity
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
     * Please enter number of pieces in the line item
     *
     * @var int
     */
    protected $value;
    /**
    * Please provide correct unit of
           measurement<BR>                       
           <BR>Possible values:<BR>
             BOX Boxes<BR>
             2GM Centigram<BR>
             M3 Cubic Meters<BR>
             DPR Dozen Pairs<BR>
             DOZ Dozen<BR>
             PCS Pieces<BR>
             GM Grams<BR>
             GRS Gross<BR>
             KG Kilograms<BR>
             M Meters<BR>
             3GM Milligrams<BR>
             X No Unit Required<BR>
             NO Number<BR>
             PRS Pairs<BR>
             CM2 Square Centimeters<BR>
             2M2 Square Feet<BR>
             3M2 Square Inches<BR>
             M2 Square Meters<BR>
             4M2 Square Yards<BR>
             CM Centimeters<BR>
             CONE Cone<BR>
             CT Carat<BR>
             EA Each<BR>
             LBS Pounds<BR>
             RILL Rill<BR>
             ROLL Roll<BR>
             SET Set<BR>
             TU Time Unit<BR>
             KM kilometre<BR>
             IN inch<BR>
             FT foot<BR>
             YD yard<BR>
             MI mile (statute mile)<BR>
             LTR litre<BR>
             MMQ cubic millimetre<BR>
             CM3 cubic centimetre<BR>
             DMQ cubic decimetre<BR>
             MLT millilitre<BR>
             CLT centilitre<BR>
             DLT decilitre<BR>
             INQ cubic inch<BR>
             FT3 cubic foot<BR>
             YD3 cubic yard<BR>
             GLI gallon (UK)<BR>
             GLL gallon (US)<BR>
             PT pint (US)<BR>
             PTI pint (UK)<BR>
             QTI quart (UK)<BR>
             PTL liquid pint (US)<BR>
             QTL liquid quart (US)<BR>
             PTD dry pint (US)<BR>
             OZI fluid ounce (UK)<BR>
             J57 barrel (UK petroleum)<BR>
             NM3 Normalised cubic metre<BR>
             SM3 Standard cubic metre<BR>
             TNE tonne (metric ton)<BR>
             LB pound<BR>
             ONZ ounce (avoirdupois)<BR>
             CEL degree Celsius                              
    *
    * @var string
    */
    protected $unitOfMeasurement;
    /**
     * Please enter number of pieces in the line item
     *
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }
    /**
     * Please enter number of pieces in the line item
     *
     * @param int $value
     *
     * @return self
     */
    public function setValue(int $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
    * Please provide correct unit of
           measurement<BR>                       
           <BR>Possible values:<BR>
             BOX Boxes<BR>
             2GM Centigram<BR>
             M3 Cubic Meters<BR>
             DPR Dozen Pairs<BR>
             DOZ Dozen<BR>
             PCS Pieces<BR>
             GM Grams<BR>
             GRS Gross<BR>
             KG Kilograms<BR>
             M Meters<BR>
             3GM Milligrams<BR>
             X No Unit Required<BR>
             NO Number<BR>
             PRS Pairs<BR>
             CM2 Square Centimeters<BR>
             2M2 Square Feet<BR>
             3M2 Square Inches<BR>
             M2 Square Meters<BR>
             4M2 Square Yards<BR>
             CM Centimeters<BR>
             CONE Cone<BR>
             CT Carat<BR>
             EA Each<BR>
             LBS Pounds<BR>
             RILL Rill<BR>
             ROLL Roll<BR>
             SET Set<BR>
             TU Time Unit<BR>
             KM kilometre<BR>
             IN inch<BR>
             FT foot<BR>
             YD yard<BR>
             MI mile (statute mile)<BR>
             LTR litre<BR>
             MMQ cubic millimetre<BR>
             CM3 cubic centimetre<BR>
             DMQ cubic decimetre<BR>
             MLT millilitre<BR>
             CLT centilitre<BR>
             DLT decilitre<BR>
             INQ cubic inch<BR>
             FT3 cubic foot<BR>
             YD3 cubic yard<BR>
             GLI gallon (UK)<BR>
             GLL gallon (US)<BR>
             PT pint (US)<BR>
             PTI pint (UK)<BR>
             QTI quart (UK)<BR>
             PTL liquid pint (US)<BR>
             QTL liquid quart (US)<BR>
             PTD dry pint (US)<BR>
             OZI fluid ounce (UK)<BR>
             J57 barrel (UK petroleum)<BR>
             NM3 Normalised cubic metre<BR>
             SM3 Standard cubic metre<BR>
             TNE tonne (metric ton)<BR>
             LB pound<BR>
             ONZ ounce (avoirdupois)<BR>
             CEL degree Celsius                              
    *
    * @return string
    */
    public function getUnitOfMeasurement(): string
    {
        return $this->unitOfMeasurement;
    }
    /**
    * Please provide correct unit of
           measurement<BR>                       
           <BR>Possible values:<BR>
             BOX Boxes<BR>
             2GM Centigram<BR>
             M3 Cubic Meters<BR>
             DPR Dozen Pairs<BR>
             DOZ Dozen<BR>
             PCS Pieces<BR>
             GM Grams<BR>
             GRS Gross<BR>
             KG Kilograms<BR>
             M Meters<BR>
             3GM Milligrams<BR>
             X No Unit Required<BR>
             NO Number<BR>
             PRS Pairs<BR>
             CM2 Square Centimeters<BR>
             2M2 Square Feet<BR>
             3M2 Square Inches<BR>
             M2 Square Meters<BR>
             4M2 Square Yards<BR>
             CM Centimeters<BR>
             CONE Cone<BR>
             CT Carat<BR>
             EA Each<BR>
             LBS Pounds<BR>
             RILL Rill<BR>
             ROLL Roll<BR>
             SET Set<BR>
             TU Time Unit<BR>
             KM kilometre<BR>
             IN inch<BR>
             FT foot<BR>
             YD yard<BR>
             MI mile (statute mile)<BR>
             LTR litre<BR>
             MMQ cubic millimetre<BR>
             CM3 cubic centimetre<BR>
             DMQ cubic decimetre<BR>
             MLT millilitre<BR>
             CLT centilitre<BR>
             DLT decilitre<BR>
             INQ cubic inch<BR>
             FT3 cubic foot<BR>
             YD3 cubic yard<BR>
             GLI gallon (UK)<BR>
             GLL gallon (US)<BR>
             PT pint (US)<BR>
             PTI pint (UK)<BR>
             QTI quart (UK)<BR>
             PTL liquid pint (US)<BR>
             QTL liquid quart (US)<BR>
             PTD dry pint (US)<BR>
             OZI fluid ounce (UK)<BR>
             J57 barrel (UK petroleum)<BR>
             NM3 Normalised cubic metre<BR>
             SM3 Standard cubic metre<BR>
             TNE tonne (metric ton)<BR>
             LB pound<BR>
             ONZ ounce (avoirdupois)<BR>
             CEL degree Celsius                              
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
}