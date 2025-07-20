<?php

namespace MediaStoreNet\OpenImmo\Classes\DistanzenSport;

/**
 * Class representing DistanzenSportAnonymousPHPType
 */
class DistanzenSportAnonymousPHPType
{

    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * @var string $distanzZuSport
     */
    private $distanzZuSport = null;

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
     * Gets as distanzZuSport
     *
     * @return string
     */
    public function getDistanzZuSport()
    {
        return $this->distanzZuSport;
    }

    /**
     * Sets a new distanzZuSport
     *
     * @param string $distanzZuSport
     * @return self
     */
    public function setDistanzZuSport($distanzZuSport)
    {
        $this->distanzZuSport = $distanzZuSport;
        return $this;
    }


}

