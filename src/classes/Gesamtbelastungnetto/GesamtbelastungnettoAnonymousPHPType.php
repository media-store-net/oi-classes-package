<?php

namespace MediaStoreNet\OpenImmo\Gesamtbelastungnetto;

/**
 * Class representing GesamtbelastungnettoAnonymousPHPType
 */
class GesamtbelastungnettoAnonymousPHPType
{

    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * @var float $gesamtbelastungust
     */
    private $gesamtbelastungust = null;

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
     * Gets as gesamtbelastungust
     *
     * @return float
     */
    public function getGesamtbelastungust()
    {
        return $this->gesamtbelastungust;
    }

    /**
     * Sets a new gesamtbelastungust
     *
     * @param float $gesamtbelastungust
     * @return self
     */
    public function setGesamtbelastungust($gesamtbelastungust)
    {
        $this->gesamtbelastungust = $gesamtbelastungust;
        return $this;
    }


}

