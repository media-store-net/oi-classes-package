<?php

namespace MediaStoreNet\OpenImmo\BueroPraxen;

/**
 * Class representing BueroPraxenAnonymousPHPType
 */
class BueroPraxenAnonymousPHPType
{

    /**
     * @var string $bueroTyp
     */
    private $bueroTyp = null;

    /**
     * Gets as bueroTyp
     *
     * @return string
     */
    public function getBueroTyp()
    {
        return $this->bueroTyp;
    }

    /**
     * Sets a new bueroTyp
     *
     * @param string $bueroTyp
     * @return self
     */
    public function setBueroTyp($bueroTyp)
    {
        $this->bueroTyp = $bueroTyp;
        return $this;
    }


}

