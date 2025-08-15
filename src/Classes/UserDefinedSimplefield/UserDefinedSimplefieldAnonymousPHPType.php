<?php

namespace MediaStoreNet\OpenImmo\Classes\UserDefinedSimplefield;

/**
 * Class representing UserDefinedSimplefieldAnonymousPHPType
 */
class UserDefinedSimplefieldAnonymousPHPType
{

    /**
     * @var mixed $__value
     */
    private $__value = null;

    /**
     * @var string $feldname
     */
    private $feldname = null;

    /**
     * Construct
     *
     * @param mixed $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param mixed $value
     * @return mixed
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
     * Gets as feldname
     *
     * @return string
     */
    public function getFeldname()
    {
        return $this->feldname;
    }

    /**
     * Sets a new feldname
     *
     * @param string $feldname
     * @return self
     */
    public function setFeldname($feldname)
    {
        $this->feldname = $feldname;
        return $this;
    }


}

