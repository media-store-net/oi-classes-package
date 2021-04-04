<?php

namespace MediaStoreNet\OpenImmo\Gesamtkostenprom2von;

/**
 * Class representing Gesamtkostenprom2vonAnonymousPHPType
 */
class Gesamtkostenprom2vonAnonymousPHPType
{

    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * @var float $gesamtkostenprom2bis
     */
    private $gesamtkostenprom2bis = null;

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
     * Gets as gesamtkostenprom2bis
     *
     * @return float
     */
    public function getGesamtkostenprom2bis()
    {
        return $this->gesamtkostenprom2bis;
    }

    /**
     * Sets a new gesamtkostenprom2bis
     *
     * @param float $gesamtkostenprom2bis
     * @return self
     */
    public function setGesamtkostenprom2bis($gesamtkostenprom2bis)
    {
        $this->gesamtkostenprom2bis = $gesamtkostenprom2bis;
        return $this;
    }


}

