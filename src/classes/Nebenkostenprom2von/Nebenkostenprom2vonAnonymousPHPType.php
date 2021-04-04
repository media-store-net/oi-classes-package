<?php

namespace MediaStoreNet\OpenImmo\Nebenkostenprom2von;

/**
 * Class representing Nebenkostenprom2vonAnonymousPHPType
 */
class Nebenkostenprom2vonAnonymousPHPType
{

    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * @var float $nebenkostenprom2bis
     */
    private $nebenkostenprom2bis = null;

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
     * Gets as nebenkostenprom2bis
     *
     * @return float
     */
    public function getNebenkostenprom2bis()
    {
        return $this->nebenkostenprom2bis;
    }

    /**
     * Sets a new nebenkostenprom2bis
     *
     * @param float $nebenkostenprom2bis
     * @return self
     */
    public function setNebenkostenprom2bis($nebenkostenprom2bis)
    {
        $this->nebenkostenprom2bis = $nebenkostenprom2bis;
        return $this;
    }


}

