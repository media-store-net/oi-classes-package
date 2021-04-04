<?php

namespace MediaStoreNet\OpenImmo\Classes\Summemietenetto;

/**
 * Class representing SummemietenettoAnonymousPHPType
 */
class SummemietenettoAnonymousPHPType
{

    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * @var float $summemieteust
     */
    private $summemieteust = null;

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
     * Gets as summemieteust
     *
     * @return float
     */
    public function getSummemieteust()
    {
        return $this->summemieteust;
    }

    /**
     * Sets a new summemieteust
     *
     * @param float $summemieteust
     * @return self
     */
    public function setSummemieteust($summemieteust)
    {
        $this->summemieteust = $summemieteust;
        return $this;
    }


}

