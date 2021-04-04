<?php

namespace MediaStoreNet\OpenImmo\Heizkostennetto;

/**
 * Class representing HeizkostennettoAnonymousPHPType
 */
class HeizkostennettoAnonymousPHPType
{

    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * @var float $heizkostenust
     */
    private $heizkostenust = null;

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
     * Gets as heizkostenust
     *
     * @return float
     */
    public function getHeizkostenust()
    {
        return $this->heizkostenust;
    }

    /**
     * Sets a new heizkostenust
     *
     * @param float $heizkostenust
     * @return self
     */
    public function setHeizkostenust($heizkostenust)
    {
        $this->heizkostenust = $heizkostenust;
        return $this;
    }


}

