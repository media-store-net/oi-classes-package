<?php

namespace MediaStoreNet\OpenImmo\TelSonstige;

/**
 * Class representing TelSonstigeAnonymousPHPType
 */
class TelSonstigeAnonymousPHPType
{

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * @var string $telefonart
     */
    private $telefonart = null;

    /**
     * @var string $bemerkung
     */
    private $bemerkung = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
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
     * Gets as telefonart
     *
     * @return string
     */
    public function getTelefonart()
    {
        return $this->telefonart;
    }

    /**
     * Sets a new telefonart
     *
     * @param string $telefonart
     * @return self
     */
    public function setTelefonart($telefonart)
    {
        $this->telefonart = $telefonart;
        return $this;
    }

    /**
     * Gets as bemerkung
     *
     * @return string
     */
    public function getBemerkung()
    {
        return $this->bemerkung;
    }

    /**
     * Sets a new bemerkung
     *
     * @param string $bemerkung
     * @return self
     */
    public function setBemerkung($bemerkung)
    {
        $this->bemerkung = $bemerkung;
        return $this;
    }


}

