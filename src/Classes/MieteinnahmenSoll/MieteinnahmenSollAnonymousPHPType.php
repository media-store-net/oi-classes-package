<?php

namespace MediaStoreNet\OpenImmo\Classes\MieteinnahmenSoll;

/**
 * Class representing MieteinnahmenSollAnonymousPHPType
 */
class MieteinnahmenSollAnonymousPHPType
{

    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * @var string $periode
     */
    private $periode = null;

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
     * Gets as periode
     *
     * @return string
     */
    public function getPeriode()
    {
        return $this->periode;
    }

    /**
     * Sets a new periode
     *
     * @param string $periode
     * @return self
     */
    public function setPeriode($periode)
    {
        $this->periode = $periode;
        return $this;
    }


}

