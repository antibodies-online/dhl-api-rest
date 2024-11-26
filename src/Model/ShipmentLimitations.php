<?php

namespace AntibodiesOnline\DHL\Api\Model;

class ShipmentLimitations extends \ArrayObject
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
     * Max. weight per piece
     *
     * @var ValueUnit
     */
    protected $maxNumberOfPieces;
    /**
     * Max. weight per piece
     *
     * @var ValueUnit
     */
    protected $maxShipmentWeight;
    /**
     * Obsolete. This is planned to be removed in future releases.
     *
     * @var string
     */
    protected $html;
    /**
     * Max. weight per piece
     *
     * @return ValueUnit
     */
    public function getMaxNumberOfPieces(): ValueUnit
    {
        return $this->maxNumberOfPieces;
    }
    /**
     * Max. weight per piece
     *
     * @param ValueUnit $maxNumberOfPieces
     *
     * @return self
     */
    public function setMaxNumberOfPieces(ValueUnit $maxNumberOfPieces): self
    {
        $this->initialized['maxNumberOfPieces'] = true;
        $this->maxNumberOfPieces = $maxNumberOfPieces;
        return $this;
    }
    /**
     * Max. weight per piece
     *
     * @return ValueUnit
     */
    public function getMaxShipmentWeight(): ValueUnit
    {
        return $this->maxShipmentWeight;
    }
    /**
     * Max. weight per piece
     *
     * @param ValueUnit $maxShipmentWeight
     *
     * @return self
     */
    public function setMaxShipmentWeight(ValueUnit $maxShipmentWeight): self
    {
        $this->initialized['maxShipmentWeight'] = true;
        $this->maxShipmentWeight = $maxShipmentWeight;
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
}