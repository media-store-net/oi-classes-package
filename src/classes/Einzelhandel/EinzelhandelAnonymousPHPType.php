<?php

namespace MediaStoreNet\OpenImmo\Einzelhandel;

/**
 * Class representing EinzelhandelAnonymousPHPType
 */
class EinzelhandelAnonymousPHPType
{

    /**
     * @var string $handelTyp
     */
    private $handelTyp = null;

    /**
     * Gets as handelTyp
     *
     * @return string
     */
    public function getHandelTyp()
    {
        return $this->handelTyp;
    }

    /**
     * Sets a new handelTyp
     *
     * @param string $handelTyp
     * @return self
     */
    public function setHandelTyp($handelTyp)
    {
        $this->handelTyp = $handelTyp;
        return $this;
    }


}

