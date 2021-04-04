<?php

namespace MediaStoreNet\OpenImmo\Serviceleistungen;

/**
 * Class representing ServiceleistungenAnonymousPHPType
 */
class ServiceleistungenAnonymousPHPType
{

    /**
     * @var bool $bETREUTESWOHNEN
     */
    private $bETREUTESWOHNEN = null;

    /**
     * @var bool $cATERING
     */
    private $cATERING = null;

    /**
     * @var bool $rEINIGUNG
     */
    private $rEINIGUNG = null;

    /**
     * @var bool $eINKAUF
     */
    private $eINKAUF = null;

    /**
     * @var bool $wACHDIENST
     */
    private $wACHDIENST = null;

    /**
     * Gets as bETREUTESWOHNEN
     *
     * @return bool
     */
    public function getBETREUTESWOHNEN()
    {
        return $this->bETREUTESWOHNEN;
    }

    /**
     * Sets a new bETREUTESWOHNEN
     *
     * @param bool $bETREUTESWOHNEN
     * @return self
     */
    public function setBETREUTESWOHNEN($bETREUTESWOHNEN)
    {
        $this->bETREUTESWOHNEN = $bETREUTESWOHNEN;
        return $this;
    }

    /**
     * Gets as cATERING
     *
     * @return bool
     */
    public function getCATERING()
    {
        return $this->cATERING;
    }

    /**
     * Sets a new cATERING
     *
     * @param bool $cATERING
     * @return self
     */
    public function setCATERING($cATERING)
    {
        $this->cATERING = $cATERING;
        return $this;
    }

    /**
     * Gets as rEINIGUNG
     *
     * @return bool
     */
    public function getREINIGUNG()
    {
        return $this->rEINIGUNG;
    }

    /**
     * Sets a new rEINIGUNG
     *
     * @param bool $rEINIGUNG
     * @return self
     */
    public function setREINIGUNG($rEINIGUNG)
    {
        $this->rEINIGUNG = $rEINIGUNG;
        return $this;
    }

    /**
     * Gets as eINKAUF
     *
     * @return bool
     */
    public function getEINKAUF()
    {
        return $this->eINKAUF;
    }

    /**
     * Sets a new eINKAUF
     *
     * @param bool $eINKAUF
     * @return self
     */
    public function setEINKAUF($eINKAUF)
    {
        $this->eINKAUF = $eINKAUF;
        return $this;
    }

    /**
     * Gets as wACHDIENST
     *
     * @return bool
     */
    public function getWACHDIENST()
    {
        return $this->wACHDIENST;
    }

    /**
     * Sets a new wACHDIENST
     *
     * @param bool $wACHDIENST
     * @return self
     */
    public function setWACHDIENST($wACHDIENST)
    {
        $this->wACHDIENST = $wACHDIENST;
        return $this;
    }


}

