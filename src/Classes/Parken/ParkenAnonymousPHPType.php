<?php

namespace MediaStoreNet\OpenImmo\Classes\Parken;

/**
 * Class representing ParkenAnonymousPHPType
 */
class ParkenAnonymousPHPType
{

    /**
     * @var string $parkenTyp
     */
    private $parkenTyp = null;

    /**
     * Gets as parkenTyp
     *
     * @return string
     */
    public function getParkenTyp()
    {
        return $this->parkenTyp;
    }

    /**
     * Sets a new parkenTyp
     *
     * @param string $parkenTyp
     * @return self
     */
    public function setParkenTyp($parkenTyp)
    {
        $this->parkenTyp = $parkenTyp;
        return $this;
    }


}

