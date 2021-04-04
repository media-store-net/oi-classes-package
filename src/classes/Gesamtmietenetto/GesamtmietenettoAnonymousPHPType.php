<?php

namespace MediaStoreNet\OpenImmo\Gesamtmietenetto;

/**
 * Class representing GesamtmietenettoAnonymousPHPType
 */
class GesamtmietenettoAnonymousPHPType
{

    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * @var float $gesamtmieteust
     */
    private $gesamtmieteust = null;

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
     * Gets as gesamtmieteust
     *
     * @return float
     */
    public function getGesamtmieteust()
    {
        return $this->gesamtmieteust;
    }

    /**
     * Sets a new gesamtmieteust
     *
     * @param float $gesamtmieteust
     * @return self
     */
    public function setGesamtmieteust($gesamtmieteust)
    {
        $this->gesamtmieteust = $gesamtmieteust;
        return $this;
    }


}

