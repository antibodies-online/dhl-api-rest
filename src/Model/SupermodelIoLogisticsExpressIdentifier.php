<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressIdentifier
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
     * Please provide type of the identifier you want to set value for
     *
     * @var string
     */
    protected $typeCode;
    /**
     * Please enter value of your identifier (WB number, PieceID)
     *
     * @var string
     */
    protected $value;
    /**
     * Please enter value of Piece Data Identifier. Note: Piece identification data should be same for all the pieces provided in single shipment.
     *
     * @var string
     */
    protected $dataIdentifier;
    /**
     * Please provide type of the identifier you want to set value for
     *
     * @return string
     */
    public function getTypeCode(): string
    {
        return $this->typeCode;
    }
    /**
     * Please provide type of the identifier you want to set value for
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
     * Please enter value of your identifier (WB number, PieceID)
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * Please enter value of your identifier (WB number, PieceID)
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * Please enter value of Piece Data Identifier. Note: Piece identification data should be same for all the pieces provided in single shipment.
     *
     * @return string
     */
    public function getDataIdentifier(): string
    {
        return $this->dataIdentifier;
    }
    /**
     * Please enter value of Piece Data Identifier. Note: Piece identification data should be same for all the pieces provided in single shipment.
     *
     * @param string $dataIdentifier
     *
     * @return self
     */
    public function setDataIdentifier(string $dataIdentifier): self
    {
        $this->initialized['dataIdentifier'] = true;
        $this->dataIdentifier = $dataIdentifier;
        return $this;
    }
}