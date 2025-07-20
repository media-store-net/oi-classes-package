<?php

namespace MediaStoreNet\OpenImmo\Classes\Provisionnetto;

/**
 * Class representing ProvisionnettoAnonymousPHPType
 */
class ProvisionnettoAnonymousPHPType
{

    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * @var float $provisionust
     */
    private $provisionust = null;

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
     * Gets as provisionust
     *
     * @return float
     */
    public function getProvisionust()
    {
        return $this->provisionust;
    }

    /**
     * Sets a new provisionust
     *
     * @param float $provisionust
     * @return self
     */
    public function setProvisionust($provisionust)
    {
        $this->provisionust = $provisionust;
        return $this;
    }


}

