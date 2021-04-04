<?php

namespace MediaStoreNet\OpenImmo\Nutzungsart;

/**
 * Class representing NutzungsartAnonymousPHPType
 */
class NutzungsartAnonymousPHPType
{

    /**
     * @var bool $wOHNEN
     */
    private $wOHNEN = null;

    /**
     * @var bool $gEWERBE
     */
    private $gEWERBE = null;

    /**
     * @var bool $aNLAGE
     */
    private $aNLAGE = null;

    /**
     * @var bool $wAZ
     */
    private $wAZ = null;

    /**
     * Gets as wOHNEN
     *
     * @return bool
     */
    public function getWOHNEN()
    {
        return $this->wOHNEN;
    }

    /**
     * Sets a new wOHNEN
     *
     * @param bool $wOHNEN
     * @return self
     */
    public function setWOHNEN($wOHNEN)
    {
        $this->wOHNEN = $wOHNEN;
        return $this;
    }

    /**
     * Gets as gEWERBE
     *
     * @return bool
     */
    public function getGEWERBE()
    {
        return $this->gEWERBE;
    }

    /**
     * Sets a new gEWERBE
     *
     * @param bool $gEWERBE
     * @return self
     */
    public function setGEWERBE($gEWERBE)
    {
        $this->gEWERBE = $gEWERBE;
        return $this;
    }

    /**
     * Gets as aNLAGE
     *
     * @return bool
     */
    public function getANLAGE()
    {
        return $this->aNLAGE;
    }

    /**
     * Sets a new aNLAGE
     *
     * @param bool $aNLAGE
     * @return self
     */
    public function setANLAGE($aNLAGE)
    {
        $this->aNLAGE = $aNLAGE;
        return $this;
    }

    /**
     * Gets as wAZ
     *
     * @return bool
     */
    public function getWAZ()
    {
        return $this->wAZ;
    }

    /**
     * Sets a new wAZ
     *
     * @param bool $wAZ
     * @return self
     */
    public function setWAZ($wAZ)
    {
        $this->wAZ = $wAZ;
        return $this;
    }


}

