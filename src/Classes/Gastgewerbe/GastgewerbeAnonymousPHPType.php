<?php

namespace MediaStoreNet\OpenImmo\Classes\Gastgewerbe;

/**
 * Class representing GastgewerbeAnonymousPHPType
 */
class GastgewerbeAnonymousPHPType
{

    /**
     * @var string $gastgewTyp
     */
    private $gastgewTyp = null;

    /**
     * Gets as gastgewTyp
     *
     * @return string
     */
    public function getGastgewTyp()
    {
        return $this->gastgewTyp;
    }

    /**
     * Sets a new gastgewTyp
     *
     * @param string $gastgewTyp
     * @return self
     */
    public function setGastgewTyp($gastgewTyp)
    {
        $this->gastgewTyp = $gastgewTyp;
        return $this;
    }


}

