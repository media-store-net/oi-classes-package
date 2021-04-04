<?php

namespace MediaStoreNet\OpenImmo\Classes\Fahrstuhl;

/**
 * Class representing FahrstuhlAnonymousPHPType
 */
class FahrstuhlAnonymousPHPType
{

    /**
     * @var bool $pERSONEN
     */
    private $pERSONEN = null;

    /**
     * @var bool $lASTEN
     */
    private $lASTEN = null;

    /**
     * Gets as pERSONEN
     *
     * @return bool
     */
    public function getPERSONEN()
    {
        return $this->pERSONEN;
    }

    /**
     * Sets a new pERSONEN
     *
     * @param bool $pERSONEN
     * @return self
     */
    public function setPERSONEN($pERSONEN)
    {
        $this->pERSONEN = $pERSONEN;
        return $this;
    }

    /**
     * Gets as lASTEN
     *
     * @return bool
     */
    public function getLASTEN()
    {
        return $this->lASTEN;
    }

    /**
     * Sets a new lASTEN
     *
     * @param bool $lASTEN
     * @return self
     */
    public function setLASTEN($lASTEN)
    {
        $this->lASTEN = $lASTEN;
        return $this;
    }


}

