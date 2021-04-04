<?php

namespace MediaStoreNet\OpenImmo\Classes\PreisZeiteinheit;

/**
 * Class representing PreisZeiteinheitAnonymousPHPType
 */
class PreisZeiteinheitAnonymousPHPType
{

    /**
     * @var string $zeiteinheit
     */
    private $zeiteinheit = null;

    /**
     * Gets as zeiteinheit
     *
     * @return string
     */
    public function getZeiteinheit()
    {
        return $this->zeiteinheit;
    }

    /**
     * Sets a new zeiteinheit
     *
     * @param string $zeiteinheit
     * @return self
     */
    public function setZeiteinheit($zeiteinheit)
    {
        $this->zeiteinheit = $zeiteinheit;
        return $this;
    }


}

