<?php

namespace MediaStoreNet\OpenImmo\Classes\Hauptmietzinsnetto;

/**
 * Class representing HauptmietzinsnettoAnonymousPHPType
 */
class HauptmietzinsnettoAnonymousPHPType
{

    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * @var float $hauptmietzinsust
     */
    private $hauptmietzinsust = null;

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
     * Gets as hauptmietzinsust
     *
     * @return float
     */
    public function getHauptmietzinsust()
    {
        return $this->hauptmietzinsust;
    }

    /**
     * Sets a new hauptmietzinsust
     *
     * @param float $hauptmietzinsust
     * @return self
     */
    public function setHauptmietzinsust($hauptmietzinsust)
    {
        $this->hauptmietzinsust = $hauptmietzinsust;
        return $this;
    }


}

