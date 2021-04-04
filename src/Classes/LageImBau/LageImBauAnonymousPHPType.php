<?php

namespace MediaStoreNet\OpenImmo\Classes\LageImBau;

/**
 * Class representing LageImBauAnonymousPHPType
 */
class LageImBauAnonymousPHPType
{

    /**
     * @var bool $lINKS
     */
    private $lINKS = null;

    /**
     * @var bool $rECHTS
     */
    private $rECHTS = null;

    /**
     * @var bool $vORNE
     */
    private $vORNE = null;

    /**
     * @var bool $hINTEN
     */
    private $hINTEN = null;

    /**
     * Gets as lINKS
     *
     * @return bool
     */
    public function getLINKS()
    {
        return $this->lINKS;
    }

    /**
     * Sets a new lINKS
     *
     * @param bool $lINKS
     * @return self
     */
    public function setLINKS($lINKS)
    {
        $this->lINKS = $lINKS;
        return $this;
    }

    /**
     * Gets as rECHTS
     *
     * @return bool
     */
    public function getRECHTS()
    {
        return $this->rECHTS;
    }

    /**
     * Sets a new rECHTS
     *
     * @param bool $rECHTS
     * @return self
     */
    public function setRECHTS($rECHTS)
    {
        $this->rECHTS = $rECHTS;
        return $this;
    }

    /**
     * Gets as vORNE
     *
     * @return bool
     */
    public function getVORNE()
    {
        return $this->vORNE;
    }

    /**
     * Sets a new vORNE
     *
     * @param bool $vORNE
     * @return self
     */
    public function setVORNE($vORNE)
    {
        $this->vORNE = $vORNE;
        return $this;
    }

    /**
     * Gets as hINTEN
     *
     * @return bool
     */
    public function getHINTEN()
    {
        return $this->hINTEN;
    }

    /**
     * Sets a new hINTEN
     *
     * @param bool $hINTEN
     * @return self
     */
    public function setHINTEN($hINTEN)
    {
        $this->hINTEN = $hINTEN;
        return $this;
    }


}

