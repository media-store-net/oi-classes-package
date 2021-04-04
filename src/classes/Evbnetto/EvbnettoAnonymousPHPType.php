<?php

namespace MediaStoreNet\OpenImmo\Evbnetto;

/**
 * Class representing EvbnettoAnonymousPHPType
 */
class EvbnettoAnonymousPHPType
{

    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * @var float $evbust
     */
    private $evbust = null;

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
     * Gets as evbust
     *
     * @return float
     */
    public function getEvbust()
    {
        return $this->evbust;
    }

    /**
     * Sets a new evbust
     *
     * @param float $evbust
     * @return self
     */
    public function setEvbust($evbust)
    {
        $this->evbust = $evbust;
        return $this;
    }


}

