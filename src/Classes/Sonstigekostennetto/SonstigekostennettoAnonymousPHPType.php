<?php

namespace MediaStoreNet\OpenImmo\Classes\Sonstigekostennetto;

/**
 * Class representing SonstigekostennettoAnonymousPHPType
 */
class SonstigekostennettoAnonymousPHPType
{

    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * @var float $sonstigekostenust
     */
    private $sonstigekostenust = null;

    /**
     * Construct
     *
     * @param float $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param float $value
     * @return float
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as sonstigekostenust
     *
     * @return float
     */
    public function getSonstigekostenust()
    {
        return $this->sonstigekostenust;
    }

    /**
     * Sets a new sonstigekostenust
     *
     * @param float $sonstigekostenust
     * @return self
     */
    public function setSonstigekostenust($sonstigekostenust)
    {
        $this->sonstigekostenust = $sonstigekostenust;
        return $this;
    }


}

