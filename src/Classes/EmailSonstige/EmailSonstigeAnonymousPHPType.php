<?php

namespace MediaStoreNet\OpenImmo\Classes\EmailSonstige;

/**
 * Class representing EmailSonstigeAnonymousPHPType
 */
class EmailSonstigeAnonymousPHPType
{

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * @var string $emailart
     */
    private $emailart = null;

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
     * Gets as emailart
     *
     * @return string
     */
    public function getEmailart()
    {
        return $this->emailart;
    }

    /**
     * Sets a new emailart
     *
     * @param string $emailart
     * @return self
     */
    public function setEmailart($emailart)
    {
        $this->emailart = $emailart;
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

