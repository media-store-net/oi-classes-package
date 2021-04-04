<?php

namespace MediaStoreNet\OpenImmo\Classes\Vermarktungsart;

/**
 * Class representing VermarktungsartAnonymousPHPType
 */
class VermarktungsartAnonymousPHPType
{

    /**
     * @var bool $kAUF
     */
    private $kAUF = null;

    /**
     * @var bool $mIETEPACHT
     */
    private $mIETEPACHT = null;

    /**
     * @var bool $eRBPACHT
     */
    private $eRBPACHT = null;

    /**
     * @var bool $lEASING
     */
    private $lEASING = null;

    /**
     * Gets as kAUF
     *
     * @return bool
     */
    public function getKAUF()
    {
        return $this->kAUF;
    }

    /**
     * Sets a new kAUF
     *
     * @param bool $kAUF
     * @return self
     */
    public function setKAUF($kAUF)
    {
        $this->kAUF = $kAUF;
        return $this;
    }

    /**
     * Gets as mIETEPACHT
     *
     * @return bool
     */
    public function getMIETEPACHT()
    {
        return $this->mIETEPACHT;
    }

    /**
     * Sets a new mIETEPACHT
     *
     * @param bool $mIETEPACHT
     * @return self
     */
    public function setMIETEPACHT($mIETEPACHT)
    {
        $this->mIETEPACHT = $mIETEPACHT;
        return $this;
    }

    /**
     * Gets as eRBPACHT
     *
     * @return bool
     */
    public function getERBPACHT()
    {
        return $this->eRBPACHT;
    }

    /**
     * Sets a new eRBPACHT
     *
     * @param bool $eRBPACHT
     * @return self
     */
    public function setERBPACHT($eRBPACHT)
    {
        $this->eRBPACHT = $eRBPACHT;
        return $this;
    }

    /**
     * Gets as lEASING
     *
     * @return bool
     */
    public function getLEASING()
    {
        return $this->lEASING;
    }

    /**
     * Sets a new lEASING
     *
     * @param bool $lEASING
     * @return self
     */
    public function setLEASING($lEASING)
    {
        $this->lEASING = $lEASING;
        return $this;
    }


}

