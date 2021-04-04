<?php

namespace MediaStoreNet\OpenImmo\Sonstigemietenetto;

/**
 * Class representing SonstigemietenettoAnonymousPHPType
 */
class SonstigemietenettoAnonymousPHPType
{

    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * @var float $sonstigemieteust
     */
    private $sonstigemieteust = null;

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
     * Gets as sonstigemieteust
     *
     * @return float
     */
    public function getSonstigemieteust()
    {
        return $this->sonstigemieteust;
    }

    /**
     * Sets a new sonstigemieteust
     *
     * @param float $sonstigemieteust
     * @return self
     */
    public function setSonstigemieteust($sonstigemieteust)
    {
        $this->sonstigemieteust = $sonstigemieteust;
        return $this;
    }


}

