<?php

namespace MediaStoreNet\OpenImmo\Sonstige;

/**
 * Class representing SonstigeAnonymousPHPType
 */
class SonstigeAnonymousPHPType
{

    /**
     * @var string $sonstigeTyp
     */
    private $sonstigeTyp = null;

    /**
     * Gets as sonstigeTyp
     *
     * @return string
     */
    public function getSonstigeTyp()
    {
        return $this->sonstigeTyp;
    }

    /**
     * Sets a new sonstigeTyp
     *
     * @param string $sonstigeTyp
     * @return self
     */
    public function setSonstigeTyp($sonstigeTyp)
    {
        $this->sonstigeTyp = $sonstigeTyp;
        return $this;
    }


}

