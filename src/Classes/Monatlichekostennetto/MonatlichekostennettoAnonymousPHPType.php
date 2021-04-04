<?php

namespace MediaStoreNet\OpenImmo\Classes\Monatlichekostennetto;

/**
 * Class representing MonatlichekostennettoAnonymousPHPType
 */
class MonatlichekostennettoAnonymousPHPType
{

    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * @var float $monatlichekostenust
     */
    private $monatlichekostenust = null;

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
     * Gets as monatlichekostenust
     *
     * @return float
     */
    public function getMonatlichekostenust()
    {
        return $this->monatlichekostenust;
    }

    /**
     * Sets a new monatlichekostenust
     *
     * @param float $monatlichekostenust
     * @return self
     */
    public function setMonatlichekostenust($monatlichekostenust)
    {
        $this->monatlichekostenust = $monatlichekostenust;
        return $this;
    }


}

