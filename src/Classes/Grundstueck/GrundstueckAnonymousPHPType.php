<?php

namespace MediaStoreNet\OpenImmo\Classes\Grundstueck;

/**
 * Class representing GrundstueckAnonymousPHPType
 */
class GrundstueckAnonymousPHPType
{

    /**
     * @var string $grundstTyp
     */
    private $grundstTyp = null;

    /**
     * Gets as grundstTyp
     *
     * @return string
     */
    public function getGrundstTyp()
    {
        return $this->grundstTyp;
    }

    /**
     * Sets a new grundstTyp
     *
     * @param string $grundstTyp
     * @return self
     */
    public function setGrundstTyp($grundstTyp)
    {
        $this->grundstTyp = $grundstTyp;
        return $this;
    }


}

