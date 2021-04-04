<?php

namespace MediaStoreNet\OpenImmo\Kueche;

/**
 * Class representing KuecheAnonymousPHPType
 */
class KuecheAnonymousPHPType
{

    /**
     * @var bool $eBK
     */
    private $eBK = null;

    /**
     * @var bool $oFFEN
     */
    private $oFFEN = null;

    /**
     * @var bool $pANTRY
     */
    private $pANTRY = null;

    /**
     * Gets as eBK
     *
     * @return bool
     */
    public function getEBK()
    {
        return $this->eBK;
    }

    /**
     * Sets a new eBK
     *
     * @param bool $eBK
     * @return self
     */
    public function setEBK($eBK)
    {
        $this->eBK = $eBK;
        return $this;
    }

    /**
     * Gets as oFFEN
     *
     * @return bool
     */
    public function getOFFEN()
    {
        return $this->oFFEN;
    }

    /**
     * Sets a new oFFEN
     *
     * @param bool $oFFEN
     * @return self
     */
    public function setOFFEN($oFFEN)
    {
        $this->oFFEN = $oFFEN;
        return $this;
    }

    /**
     * Gets as pANTRY
     *
     * @return bool
     */
    public function getPANTRY()
    {
        return $this->pANTRY;
    }

    /**
     * Sets a new pANTRY
     *
     * @param bool $pANTRY
     * @return self
     */
    public function setPANTRY($pANTRY)
    {
        $this->pANTRY = $pANTRY;
        return $this;
    }


}

