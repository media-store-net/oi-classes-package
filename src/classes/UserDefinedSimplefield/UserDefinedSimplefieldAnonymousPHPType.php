<?php

namespace MediaStoreNet\OpenImmo\UserDefinedSimplefield;

/**
 * Class representing UserDefinedSimplefieldAnonymousPHPType
 */
class UserDefinedSimplefieldAnonymousPHPType
{

    /**
     * @var string $feldname
     */
    private $feldname = null;

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

