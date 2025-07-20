<?php

namespace MediaStoreNet\OpenImmo\Classes\Ruecklagenetto;

/**
 * Class representing RuecklagenettoAnonymousPHPType
 */
class RuecklagenettoAnonymousPHPType
{

    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * @var float $ruecklageust
     */
    private $ruecklageust = null;

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
     * Gets as ruecklageust
     *
     * @return float
     */
    public function getRuecklageust()
    {
        return $this->ruecklageust;
    }

    /**
     * Sets a new ruecklageust
     *
     * @param float $ruecklageust
     * @return self
     */
    public function setRuecklageust($ruecklageust)
    {
        $this->ruecklageust = $ruecklageust;
        return $this;
    }


}

