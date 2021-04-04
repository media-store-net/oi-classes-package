<?php

namespace MediaStoreNet\OpenImmo\Classes\Check;

/**
 * Class representing CheckAnonymousPHPType
 */
class CheckAnonymousPHPType
{

    /**
     * @var \DateTime $__value
     */
    private $__value = null;

    /**
     * @var string $ctype
     */
    private $ctype = null;

    /**
     * Construct
     *
     * @param \DateTime $value
     */
    public function __construct(\DateTime $value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param \DateTime $value
     * @return \DateTime
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
     * Gets as ctype
     *
     * @return string
     */
    public function getCtype()
    {
        return $this->ctype;
    }

    /**
     * Sets a new ctype
     *
     * @param string $ctype
     * @return self
     */
    public function setCtype($ctype)
    {
        $this->ctype = $ctype;
        return $this;
    }


}

