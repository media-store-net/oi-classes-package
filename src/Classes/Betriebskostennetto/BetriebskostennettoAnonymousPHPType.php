<?php

namespace MediaStoreNet\OpenImmo\Classes\Betriebskostennetto;

/**
 * Class representing BetriebskostennettoAnonymousPHPType
 */
class BetriebskostennettoAnonymousPHPType
{

    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * @var float $betriebskostenust
     */
    private $betriebskostenust = null;

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
     * Gets as betriebskostenust
     *
     * @return float
     */
    public function getBetriebskostenust()
    {
        return $this->betriebskostenust;
    }

    /**
     * Sets a new betriebskostenust
     *
     * @param float $betriebskostenust
     * @return self
     */
    public function setBetriebskostenust($betriebskostenust)
    {
        $this->betriebskostenust = $betriebskostenust;
        return $this;
    }


}

