<?php

namespace AntibodiesOnline\DHL\Api\Model;

class ShipmentLimitationsByPiece extends \ArrayObject
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
    protected $pieceSizeLimit1;
    /**
     * Max. weight per piece
     *
     * @var ValueUnit
     */
    protected $pieceSizeLimit2;
    /**
     * Max. weight per piece
     *
     * @var ValueUnit
     */
    protected $pieceSizeLimit3;
    /**
     * Max. weight per piece
     *
     * @var ValueUnit
     */
    protected $maxPieceWeight;
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
    public function getPieceSizeLimit1(): ValueUnit
    {
        return $this->pieceSizeLimit1;
    }
    /**
     * Max. weight per piece
     *
     * @param ValueUnit $pieceSizeLimit1
     *
     * @return self
     */
    public function setPieceSizeLimit1(ValueUnit $pieceSizeLimit1): self
    {
        $this->initialized['pieceSizeLimit1'] = true;
        $this->pieceSizeLimit1 = $pieceSizeLimit1;
        return $this;
    }
    /**
     * Max. weight per piece
     *
     * @return ValueUnit
     */
    public function getPieceSizeLimit2(): ValueUnit
    {
        return $this->pieceSizeLimit2;
    }
    /**
     * Max. weight per piece
     *
     * @param ValueUnit $pieceSizeLimit2
     *
     * @return self
     */
    public function setPieceSizeLimit2(ValueUnit $pieceSizeLimit2): self
    {
        $this->initialized['pieceSizeLimit2'] = true;
        $this->pieceSizeLimit2 = $pieceSizeLimit2;
        return $this;
    }
    /**
     * Max. weight per piece
     *
     * @return ValueUnit
     */
    public function getPieceSizeLimit3(): ValueUnit
    {
        return $this->pieceSizeLimit3;
    }
    /**
     * Max. weight per piece
     *
     * @param ValueUnit $pieceSizeLimit3
     *
     * @return self
     */
    public function setPieceSizeLimit3(ValueUnit $pieceSizeLimit3): self
    {
        $this->initialized['pieceSizeLimit3'] = true;
        $this->pieceSizeLimit3 = $pieceSizeLimit3;
        return $this;
    }
    /**
     * Max. weight per piece
     *
     * @return ValueUnit
     */
    public function getMaxPieceWeight(): ValueUnit
    {
        return $this->maxPieceWeight;
    }
    /**
     * Max. weight per piece
     *
     * @param ValueUnit $maxPieceWeight
     *
     * @return self
     */
    public function setMaxPieceWeight(ValueUnit $maxPieceWeight): self
    {
        $this->initialized['maxPieceWeight'] = true;
        $this->maxPieceWeight = $maxPieceWeight;
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