<?php

namespace MediaStoreNet\OpenImmo\ZinshausRenditeobjekt;

/**
 * Class representing ZinshausRenditeobjektAnonymousPHPType
 */
class ZinshausRenditeobjektAnonymousPHPType
{

    /**
     * @var string $zinsTyp
     */
    private $zinsTyp = null;

    /**
     * Gets as zinsTyp
     *
     * @return string
     */
    public function getZinsTyp()
    {
        return $this->zinsTyp;
    }

    /**
     * Sets a new zinsTyp
     *
     * @param string $zinsTyp
     * @return self
     */
    public function setZinsTyp($zinsTyp)
    {
        $this->zinsTyp = $zinsTyp;
        return $this;
    }


}

