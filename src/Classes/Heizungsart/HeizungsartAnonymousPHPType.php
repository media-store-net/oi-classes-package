<?php

namespace MediaStoreNet\OpenImmo\Classes\Heizungsart;

/**
 * Class representing HeizungsartAnonymousPHPType
 */
class HeizungsartAnonymousPHPType
{

    /**
     * @var bool $oFEN
     */
    private $oFEN = null;

    /**
     * @var bool $eTAGE
     */
    private $eTAGE = null;

    /**
     * @var bool $zENTRAL
     */
    private $zENTRAL = null;

    /**
     * @var bool $fERN
     */
    private $fERN = null;

    /**
     * @var bool $fUSSBODEN
     */
    private $fUSSBODEN = null;

    /**
     * Gets as oFEN
     *
     * @return bool
     */
    public function getOFEN()
    {
        return $this->oFEN;
    }

    /**
     * Sets a new oFEN
     *
     * @param bool $oFEN
     * @return self
     */
    public function setOFEN($oFEN)
    {
        $this->oFEN = $oFEN;
        return $this;
    }

    /**
     * Gets as eTAGE
     *
     * @return bool
     */
    public function getETAGE()
    {
        return $this->eTAGE;
    }

    /**
     * Sets a new eTAGE
     *
     * @param bool $eTAGE
     * @return self
     */
    public function setETAGE($eTAGE)
    {
        $this->eTAGE = $eTAGE;
        return $this;
    }

    /**
     * Gets as zENTRAL
     *
     * @return bool
     */
    public function getZENTRAL()
    {
        return $this->zENTRAL;
    }

    /**
     * Sets a new zENTRAL
     *
     * @param bool $zENTRAL
     * @return self
     */
    public function setZENTRAL($zENTRAL)
    {
        $this->zENTRAL = $zENTRAL;
        return $this;
    }

    /**
     * Gets as fERN
     *
     * @return bool
     */
    public function getFERN()
    {
        return $this->fERN;
    }

    /**
     * Sets a new fERN
     *
     * @param bool $fERN
     * @return self
     */
    public function setFERN($fERN)
    {
        $this->fERN = $fERN;
        return $this;
    }

    /**
     * Gets as fUSSBODEN
     *
     * @return bool
     */
    public function getFUSSBODEN()
    {
        return $this->fUSSBODEN;
    }

    /**
     * Sets a new fUSSBODEN
     *
     * @param bool $fUSSBODEN
     * @return self
     */
    public function setFUSSBODEN($fUSSBODEN)
    {
        $this->fUSSBODEN = $fUSSBODEN;
        return $this;
    }


}

