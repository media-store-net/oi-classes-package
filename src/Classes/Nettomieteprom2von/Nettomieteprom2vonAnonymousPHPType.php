<?php

namespace MediaStoreNet\OpenImmo\Classes\Nettomieteprom2von;

/**
 * Class representing Nettomieteprom2vonAnonymousPHPType
 */
class Nettomieteprom2vonAnonymousPHPType
{

    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * @var float $nettomieteprom2bis
     */
    private $nettomieteprom2bis = null;

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
     * Gets as nettomieteprom2bis
     *
     * @return float
     */
    public function getNettomieteprom2bis()
    {
        return $this->nettomieteprom2bis;
    }

    /**
     * Sets a new nettomieteprom2bis
     *
     * @param float $nettomieteprom2bis
     * @return self
     */
    public function setNettomieteprom2bis($nettomieteprom2bis)
    {
        $this->nettomieteprom2bis = $nettomieteprom2bis;
        return $this;
    }


}

