<?php

namespace MediaStoreNet\OpenImmo\Classes\Distanzen;

/**
 * Class representing DistanzenAnonymousPHPType
 */
class DistanzenAnonymousPHPType
{

    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * @var string $distanzZu
     */
    private $distanzZu = null;

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
     * Gets as distanzZu
     *
     * @return string
     */
    public function getDistanzZu()
    {
        return $this->distanzZu;
    }

    /**
     * Sets a new distanzZu
     *
     * @param string $distanzZu
     * @return self
     */
    public function setDistanzZu($distanzZu)
    {
        $this->distanzZu = $distanzZu;
        return $this;
    }


}

