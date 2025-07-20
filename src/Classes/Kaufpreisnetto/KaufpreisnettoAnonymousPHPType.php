<?php

namespace MediaStoreNet\OpenImmo\Classes\Kaufpreisnetto;

/**
 * Class representing KaufpreisnettoAnonymousPHPType
 */
class KaufpreisnettoAnonymousPHPType
{

    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * @var float $kaufpreisust
     */
    private $kaufpreisust = null;

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
     * Gets as kaufpreisust
     *
     * @return float
     */
    public function getKaufpreisust()
    {
        return $this->kaufpreisust;
    }

    /**
     * Sets a new kaufpreisust
     *
     * @param float $kaufpreisust
     * @return self
     */
    public function setKaufpreisust($kaufpreisust)
    {
        $this->kaufpreisust = $kaufpreisust;
        return $this;
    }


}

