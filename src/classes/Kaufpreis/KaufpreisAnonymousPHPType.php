<?php

namespace MediaStoreNet\OpenImmo\Kaufpreis;

/**
 * Class representing KaufpreisAnonymousPHPType
 */
class KaufpreisAnonymousPHPType
{

    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * @var bool $aufAnfrage
     */
    private $aufAnfrage = null;

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
     * Gets as aufAnfrage
     *
     * @return bool
     */
    public function getAufAnfrage()
    {
        return $this->aufAnfrage;
    }

    /**
     * Sets a new aufAnfrage
     *
     * @param bool $aufAnfrage
     * @return self
     */
    public function setAufAnfrage($aufAnfrage)
    {
        $this->aufAnfrage = $aufAnfrage;
        return $this;
    }


}

