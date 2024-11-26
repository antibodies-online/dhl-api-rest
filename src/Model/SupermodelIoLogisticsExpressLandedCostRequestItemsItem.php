<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressLandedCostRequestItemsItem
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
     * Line item number
     *
     * @var float
     */
    protected $number;
    /**
     * Name of the item
     *
     * @var string
     */
    protected $name;
    /**
     * Item full description
     *
     * @var string
     */
    protected $description;
    /**
     * ISO Country code of the goods manufacturer
     *
     * @var string
     */
    protected $manufacturerCountry;
    /**
     * SKU number
     *
     * @var string
     */
    protected $partNumber;
    /**
     * Total quantity of the item(s) to be shipped.
     *
     * @var float
     */
    protected $quantity;
    /**
     * Please provide quantitiy type. prt - part, box - box
     *
     * @var string
     */
    protected $quantityType;
    /**
     * Product Unit price
     *
     * @var float
     */
    protected $unitPrice;
    /**
     * Currency code of the Unit Price
     *
     * @var string
     */
    protected $unitPriceCurrencyCode;
    /**
     * not used
     *
     * @var float
     */
    protected $customsValue;
    /**
     * not used
     *
     * @var string
     */
    protected $customsValueCurrencyCode;
    /**
     * commodityCode is mandatory if estimatedTariffRateType ('derived_rate' or 'highest_rate' or 'lowest_rate' or 'center_rate') not provided in the request otherwise it is considered as Optional.<BR>                              'highest_rate' or 'lowest_rate' or 'center_rate') not provided in the request otherwise it is considered as Optional.<BR>            Can be provided with or without dots
     *
     * @var string
     */
    protected $commodityCode;
    /**
     * Weight of the item
     *
     * @var float
     */
    protected $weight;
    /**
     * Unit of measurement
     *
     * @var string
     */
    protected $weightUnitOfMeasurement;
    /**
    * commodityCode category can be retrieved via referenceData API/ commodityCategory dataset.<BR>
    Category code of the Item.<BR>            101 - Coats & Jacket<BR>            102 - Blazers<BR>            103 - Suits<BR>            104 - Ensembles<BR>            105 - Trousers<BR>            106 - Shirts & Blouses<BR>            107 - Dresses<BR>            108 - Skirts<BR>            109 - Jerseys, Sweatshirts & Pullovers<BR>            110 - Sports & Swimwear<BR>            111 - Night & Underwear<BR>            112 - T-Shirts<BR>            113 - Tights & Leggings<BR>            114 - Socks <BR>            115 - Baby Clothes<BR>            116 - Clothing Accessories<BR>            201 - Sneakers<BR>            202 - Athletic Footwear<BR>            203 - Leather Footwear<BR>            204 - Textile & Other Footwear<BR>            301 - Spectacle Lenses<BR>            302 - Sunglasses<BR>            303 - Eyewear Frames<BR>            304 - Contact Lenses<BR>            401 - Watches<BR>            402 - Jewelry<BR>            403 - Suitcases & Briefcases<BR>            404 - Handbags<BR>            405 - Wallets & Little Cases<BR>            406 - Bags & Containers<BR>            501 - Beer<BR>            502 - Spirits<BR>            503 - Wine<BR>            504 - Cider, Perry & Rice Wine<BR>            601 - Bottled Water<BR>            602 - Soft Drinks<BR>            603 - Juices<BR>            604 - Coffee<BR>            605 - Tea<BR>            606 - Cocoa<BR>            701 - Dairy Products & Eggs<BR>            702 - Meat<BR>            703 - Fish & Seafood<BR>            704 - Fruits & Nuts<BR>            705 - Vegetables<BR>            706 - Bread & Cereal Products<BR>            707 - Oils & Fats<BR>            708 - Sauces & Spices<BR>            709 - Convenience Food<BR>            710 - Spreads & Sweeteners<BR>            711 - Baby Food<BR>            712 - Pet Food<BR>            801 - Cigarettes<BR>            802 - Smoking Tobacco<BR>            803 - Cigars<BR>            804 - E-Cigarettes<BR>            901 - Household Cleaners<BR>            902 - Dishwashing Detergents<BR>            903 - Polishes<BR>            904 - Room Scents<BR>            905 - Insecticides<BR>            1001 - Cosmetics<BR>            1002 - Skin Care<BR>            1003 - Personal Care<BR>            1004 - Fragrances<BR>            1101 - Toilet Paper<BR>            1102 - Paper Tissues<BR>            1103 - Household Paper<BR>            1104 - Feminine Hygiene<BR>            1105 - Baby Diapers<BR>            1106 - Incontinence<BR>            1202 - TV, Radio & Multimedia<BR>            1203 - TV Peripheral Devices<BR>            1204 - Telephony<BR>            1205 - Computing<BR>            1206 - Drones<BR>            1301 - Refrigerators<BR>            1302 - Freezers<BR>            1303 - Dishwashing Machines<BR>            1304 - Washing Machines<BR>            1305 - Cookers & Oven<BR>            1306 - Vacuum Cleaners<BR>            1307 - Small Kitchen Appliances<BR>            1308 - Hair Clippers<BR>            1309 - Irons<BR>            1310 - Toasters<BR>            1311 - Grills & Roasters<BR>            1312 - Hair Dryers<BR>            1313 - Coffee Machines<BR>            1314 - Microwave Ovens<BR>            1315 - Electric Kettles<BR>            1401 - Seats & Sofas<BR>            1402 - Beds<BR>            1403 - Mattresses<BR>            1404 - Closets, Nightstands & Dressers<BR>            1405 - Lamps & Lighting<BR>            1406 - Floor Covering<BR>            1407 - Kitchen Furniture<BR>            1408 - Plastic & Other Furniture<BR>            1501 - Analgesics<BR>            1502 - Cold & Cough Remedies<BR>            1503 - Digestives & Intestinal Remedies<BR>            1504 - Skin Treatment<BR>            1505 - Vitamins & Minerals<BR>            1506 - Hand Sanitizer <BR>            1601 - Toys & Games<BR>            1602 - Musical Instruments<BR>            1603 - Sports Equipment
    *
    * @var string
    */
    protected $category;
    /**
     * Item's brand
     *
     * @var string
     */
    protected $brand;
    /**
     * 
     *
     * @var list<SupermodelIoLogisticsExpressLandedCostRequestItemsItemGoodsCharacteristicsItem>
     */
    protected $goodsCharacteristics;
    /**
     * 
     *
     * @var list<SupermodelIoLogisticsExpressLandedCostRequestItemsItemAdditionalQuantityDefinitionsItem>
     */
    protected $additionalQuantityDefinitions;
    /**
     * Please enter Tariff Rate Type - default_rate,derived_rate,highest_rate,center_rate,lowest_rate
     *
     * @var string
     */
    protected $estimatedTariffRateType;
    /**
     * Line item number
     *
     * @return float
     */
    public function getNumber(): float
    {
        return $this->number;
    }
    /**
     * Line item number
     *
     * @param float $number
     *
     * @return self
     */
    public function setNumber(float $number): self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * Name of the item
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the item
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Item full description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Item full description
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
     * ISO Country code of the goods manufacturer
     *
     * @return string
     */
    public function getManufacturerCountry(): string
    {
        return $this->manufacturerCountry;
    }
    /**
     * ISO Country code of the goods manufacturer
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
     * SKU number
     *
     * @return string
     */
    public function getPartNumber(): string
    {
        return $this->partNumber;
    }
    /**
     * SKU number
     *
     * @param string $partNumber
     *
     * @return self
     */
    public function setPartNumber(string $partNumber): self
    {
        $this->initialized['partNumber'] = true;
        $this->partNumber = $partNumber;
        return $this;
    }
    /**
     * Total quantity of the item(s) to be shipped.
     *
     * @return float
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }
    /**
     * Total quantity of the item(s) to be shipped.
     *
     * @param float $quantity
     *
     * @return self
     */
    public function setQuantity(float $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Please provide quantitiy type. prt - part, box - box
     *
     * @return string
     */
    public function getQuantityType(): string
    {
        return $this->quantityType;
    }
    /**
     * Please provide quantitiy type. prt - part, box - box
     *
     * @param string $quantityType
     *
     * @return self
     */
    public function setQuantityType(string $quantityType): self
    {
        $this->initialized['quantityType'] = true;
        $this->quantityType = $quantityType;
        return $this;
    }
    /**
     * Product Unit price
     *
     * @return float
     */
    public function getUnitPrice(): float
    {
        return $this->unitPrice;
    }
    /**
     * Product Unit price
     *
     * @param float $unitPrice
     *
     * @return self
     */
    public function setUnitPrice(float $unitPrice): self
    {
        $this->initialized['unitPrice'] = true;
        $this->unitPrice = $unitPrice;
        return $this;
    }
    /**
     * Currency code of the Unit Price
     *
     * @return string
     */
    public function getUnitPriceCurrencyCode(): string
    {
        return $this->unitPriceCurrencyCode;
    }
    /**
     * Currency code of the Unit Price
     *
     * @param string $unitPriceCurrencyCode
     *
     * @return self
     */
    public function setUnitPriceCurrencyCode(string $unitPriceCurrencyCode): self
    {
        $this->initialized['unitPriceCurrencyCode'] = true;
        $this->unitPriceCurrencyCode = $unitPriceCurrencyCode;
        return $this;
    }
    /**
     * not used
     *
     * @return float
     */
    public function getCustomsValue(): float
    {
        return $this->customsValue;
    }
    /**
     * not used
     *
     * @param float $customsValue
     *
     * @return self
     */
    public function setCustomsValue(float $customsValue): self
    {
        $this->initialized['customsValue'] = true;
        $this->customsValue = $customsValue;
        return $this;
    }
    /**
     * not used
     *
     * @return string
     */
    public function getCustomsValueCurrencyCode(): string
    {
        return $this->customsValueCurrencyCode;
    }
    /**
     * not used
     *
     * @param string $customsValueCurrencyCode
     *
     * @return self
     */
    public function setCustomsValueCurrencyCode(string $customsValueCurrencyCode): self
    {
        $this->initialized['customsValueCurrencyCode'] = true;
        $this->customsValueCurrencyCode = $customsValueCurrencyCode;
        return $this;
    }
    /**
     * commodityCode is mandatory if estimatedTariffRateType ('derived_rate' or 'highest_rate' or 'lowest_rate' or 'center_rate') not provided in the request otherwise it is considered as Optional.<BR>                              'highest_rate' or 'lowest_rate' or 'center_rate') not provided in the request otherwise it is considered as Optional.<BR>            Can be provided with or without dots
     *
     * @return string
     */
    public function getCommodityCode(): string
    {
        return $this->commodityCode;
    }
    /**
     * commodityCode is mandatory if estimatedTariffRateType ('derived_rate' or 'highest_rate' or 'lowest_rate' or 'center_rate') not provided in the request otherwise it is considered as Optional.<BR>                              'highest_rate' or 'lowest_rate' or 'center_rate') not provided in the request otherwise it is considered as Optional.<BR>            Can be provided with or without dots
     *
     * @param string $commodityCode
     *
     * @return self
     */
    public function setCommodityCode(string $commodityCode): self
    {
        $this->initialized['commodityCode'] = true;
        $this->commodityCode = $commodityCode;
        return $this;
    }
    /**
     * Weight of the item
     *
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }
    /**
     * Weight of the item
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
     * Unit of measurement
     *
     * @return string
     */
    public function getWeightUnitOfMeasurement(): string
    {
        return $this->weightUnitOfMeasurement;
    }
    /**
     * Unit of measurement
     *
     * @param string $weightUnitOfMeasurement
     *
     * @return self
     */
    public function setWeightUnitOfMeasurement(string $weightUnitOfMeasurement): self
    {
        $this->initialized['weightUnitOfMeasurement'] = true;
        $this->weightUnitOfMeasurement = $weightUnitOfMeasurement;
        return $this;
    }
    /**
    * commodityCode category can be retrieved via referenceData API/ commodityCategory dataset.<BR>
    Category code of the Item.<BR>            101 - Coats & Jacket<BR>            102 - Blazers<BR>            103 - Suits<BR>            104 - Ensembles<BR>            105 - Trousers<BR>            106 - Shirts & Blouses<BR>            107 - Dresses<BR>            108 - Skirts<BR>            109 - Jerseys, Sweatshirts & Pullovers<BR>            110 - Sports & Swimwear<BR>            111 - Night & Underwear<BR>            112 - T-Shirts<BR>            113 - Tights & Leggings<BR>            114 - Socks <BR>            115 - Baby Clothes<BR>            116 - Clothing Accessories<BR>            201 - Sneakers<BR>            202 - Athletic Footwear<BR>            203 - Leather Footwear<BR>            204 - Textile & Other Footwear<BR>            301 - Spectacle Lenses<BR>            302 - Sunglasses<BR>            303 - Eyewear Frames<BR>            304 - Contact Lenses<BR>            401 - Watches<BR>            402 - Jewelry<BR>            403 - Suitcases & Briefcases<BR>            404 - Handbags<BR>            405 - Wallets & Little Cases<BR>            406 - Bags & Containers<BR>            501 - Beer<BR>            502 - Spirits<BR>            503 - Wine<BR>            504 - Cider, Perry & Rice Wine<BR>            601 - Bottled Water<BR>            602 - Soft Drinks<BR>            603 - Juices<BR>            604 - Coffee<BR>            605 - Tea<BR>            606 - Cocoa<BR>            701 - Dairy Products & Eggs<BR>            702 - Meat<BR>            703 - Fish & Seafood<BR>            704 - Fruits & Nuts<BR>            705 - Vegetables<BR>            706 - Bread & Cereal Products<BR>            707 - Oils & Fats<BR>            708 - Sauces & Spices<BR>            709 - Convenience Food<BR>            710 - Spreads & Sweeteners<BR>            711 - Baby Food<BR>            712 - Pet Food<BR>            801 - Cigarettes<BR>            802 - Smoking Tobacco<BR>            803 - Cigars<BR>            804 - E-Cigarettes<BR>            901 - Household Cleaners<BR>            902 - Dishwashing Detergents<BR>            903 - Polishes<BR>            904 - Room Scents<BR>            905 - Insecticides<BR>            1001 - Cosmetics<BR>            1002 - Skin Care<BR>            1003 - Personal Care<BR>            1004 - Fragrances<BR>            1101 - Toilet Paper<BR>            1102 - Paper Tissues<BR>            1103 - Household Paper<BR>            1104 - Feminine Hygiene<BR>            1105 - Baby Diapers<BR>            1106 - Incontinence<BR>            1202 - TV, Radio & Multimedia<BR>            1203 - TV Peripheral Devices<BR>            1204 - Telephony<BR>            1205 - Computing<BR>            1206 - Drones<BR>            1301 - Refrigerators<BR>            1302 - Freezers<BR>            1303 - Dishwashing Machines<BR>            1304 - Washing Machines<BR>            1305 - Cookers & Oven<BR>            1306 - Vacuum Cleaners<BR>            1307 - Small Kitchen Appliances<BR>            1308 - Hair Clippers<BR>            1309 - Irons<BR>            1310 - Toasters<BR>            1311 - Grills & Roasters<BR>            1312 - Hair Dryers<BR>            1313 - Coffee Machines<BR>            1314 - Microwave Ovens<BR>            1315 - Electric Kettles<BR>            1401 - Seats & Sofas<BR>            1402 - Beds<BR>            1403 - Mattresses<BR>            1404 - Closets, Nightstands & Dressers<BR>            1405 - Lamps & Lighting<BR>            1406 - Floor Covering<BR>            1407 - Kitchen Furniture<BR>            1408 - Plastic & Other Furniture<BR>            1501 - Analgesics<BR>            1502 - Cold & Cough Remedies<BR>            1503 - Digestives & Intestinal Remedies<BR>            1504 - Skin Treatment<BR>            1505 - Vitamins & Minerals<BR>            1506 - Hand Sanitizer <BR>            1601 - Toys & Games<BR>            1602 - Musical Instruments<BR>            1603 - Sports Equipment
    *
    * @return string
    */
    public function getCategory(): string
    {
        return $this->category;
    }
    /**
    * commodityCode category can be retrieved via referenceData API/ commodityCategory dataset.<BR>
    Category code of the Item.<BR>            101 - Coats & Jacket<BR>            102 - Blazers<BR>            103 - Suits<BR>            104 - Ensembles<BR>            105 - Trousers<BR>            106 - Shirts & Blouses<BR>            107 - Dresses<BR>            108 - Skirts<BR>            109 - Jerseys, Sweatshirts & Pullovers<BR>            110 - Sports & Swimwear<BR>            111 - Night & Underwear<BR>            112 - T-Shirts<BR>            113 - Tights & Leggings<BR>            114 - Socks <BR>            115 - Baby Clothes<BR>            116 - Clothing Accessories<BR>            201 - Sneakers<BR>            202 - Athletic Footwear<BR>            203 - Leather Footwear<BR>            204 - Textile & Other Footwear<BR>            301 - Spectacle Lenses<BR>            302 - Sunglasses<BR>            303 - Eyewear Frames<BR>            304 - Contact Lenses<BR>            401 - Watches<BR>            402 - Jewelry<BR>            403 - Suitcases & Briefcases<BR>            404 - Handbags<BR>            405 - Wallets & Little Cases<BR>            406 - Bags & Containers<BR>            501 - Beer<BR>            502 - Spirits<BR>            503 - Wine<BR>            504 - Cider, Perry & Rice Wine<BR>            601 - Bottled Water<BR>            602 - Soft Drinks<BR>            603 - Juices<BR>            604 - Coffee<BR>            605 - Tea<BR>            606 - Cocoa<BR>            701 - Dairy Products & Eggs<BR>            702 - Meat<BR>            703 - Fish & Seafood<BR>            704 - Fruits & Nuts<BR>            705 - Vegetables<BR>            706 - Bread & Cereal Products<BR>            707 - Oils & Fats<BR>            708 - Sauces & Spices<BR>            709 - Convenience Food<BR>            710 - Spreads & Sweeteners<BR>            711 - Baby Food<BR>            712 - Pet Food<BR>            801 - Cigarettes<BR>            802 - Smoking Tobacco<BR>            803 - Cigars<BR>            804 - E-Cigarettes<BR>            901 - Household Cleaners<BR>            902 - Dishwashing Detergents<BR>            903 - Polishes<BR>            904 - Room Scents<BR>            905 - Insecticides<BR>            1001 - Cosmetics<BR>            1002 - Skin Care<BR>            1003 - Personal Care<BR>            1004 - Fragrances<BR>            1101 - Toilet Paper<BR>            1102 - Paper Tissues<BR>            1103 - Household Paper<BR>            1104 - Feminine Hygiene<BR>            1105 - Baby Diapers<BR>            1106 - Incontinence<BR>            1202 - TV, Radio & Multimedia<BR>            1203 - TV Peripheral Devices<BR>            1204 - Telephony<BR>            1205 - Computing<BR>            1206 - Drones<BR>            1301 - Refrigerators<BR>            1302 - Freezers<BR>            1303 - Dishwashing Machines<BR>            1304 - Washing Machines<BR>            1305 - Cookers & Oven<BR>            1306 - Vacuum Cleaners<BR>            1307 - Small Kitchen Appliances<BR>            1308 - Hair Clippers<BR>            1309 - Irons<BR>            1310 - Toasters<BR>            1311 - Grills & Roasters<BR>            1312 - Hair Dryers<BR>            1313 - Coffee Machines<BR>            1314 - Microwave Ovens<BR>            1315 - Electric Kettles<BR>            1401 - Seats & Sofas<BR>            1402 - Beds<BR>            1403 - Mattresses<BR>            1404 - Closets, Nightstands & Dressers<BR>            1405 - Lamps & Lighting<BR>            1406 - Floor Covering<BR>            1407 - Kitchen Furniture<BR>            1408 - Plastic & Other Furniture<BR>            1501 - Analgesics<BR>            1502 - Cold & Cough Remedies<BR>            1503 - Digestives & Intestinal Remedies<BR>            1504 - Skin Treatment<BR>            1505 - Vitamins & Minerals<BR>            1506 - Hand Sanitizer <BR>            1601 - Toys & Games<BR>            1602 - Musical Instruments<BR>            1603 - Sports Equipment
    *
    * @param string $category
    *
    * @return self
    */
    public function setCategory(string $category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
    /**
     * Item's brand
     *
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }
    /**
     * Item's brand
     *
     * @param string $brand
     *
     * @return self
     */
    public function setBrand(string $brand): self
    {
        $this->initialized['brand'] = true;
        $this->brand = $brand;
        return $this;
    }
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressLandedCostRequestItemsItemGoodsCharacteristicsItem>
     */
    public function getGoodsCharacteristics(): array
    {
        return $this->goodsCharacteristics;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressLandedCostRequestItemsItemGoodsCharacteristicsItem> $goodsCharacteristics
     *
     * @return self
     */
    public function setGoodsCharacteristics(array $goodsCharacteristics): self
    {
        $this->initialized['goodsCharacteristics'] = true;
        $this->goodsCharacteristics = $goodsCharacteristics;
        return $this;
    }
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressLandedCostRequestItemsItemAdditionalQuantityDefinitionsItem>
     */
    public function getAdditionalQuantityDefinitions(): array
    {
        return $this->additionalQuantityDefinitions;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressLandedCostRequestItemsItemAdditionalQuantityDefinitionsItem> $additionalQuantityDefinitions
     *
     * @return self
     */
    public function setAdditionalQuantityDefinitions(array $additionalQuantityDefinitions): self
    {
        $this->initialized['additionalQuantityDefinitions'] = true;
        $this->additionalQuantityDefinitions = $additionalQuantityDefinitions;
        return $this;
    }
    /**
     * Please enter Tariff Rate Type - default_rate,derived_rate,highest_rate,center_rate,lowest_rate
     *
     * @return string
     */
    public function getEstimatedTariffRateType(): string
    {
        return $this->estimatedTariffRateType;
    }
    /**
     * Please enter Tariff Rate Type - default_rate,derived_rate,highest_rate,center_rate,lowest_rate
     *
     * @param string $estimatedTariffRateType
     *
     * @return self
     */
    public function setEstimatedTariffRateType(string $estimatedTariffRateType): self
    {
        $this->initialized['estimatedTariffRateType'] = true;
        $this->estimatedTariffRateType = $estimatedTariffRateType;
        return $this;
    }
}