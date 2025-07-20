<?php

namespace MediaStoreNet\OpenImmo\Classes\FreizeitimmobilieGewerblich;

/**
 * Class representing FreizeitimmobilieGewerblichAnonymousPHPType
 */
class FreizeitimmobilieGewerblichAnonymousPHPType
{

    /**
     * @var string $freizeitTyp
     */
    private $freizeitTyp = null;

    /**
     * Gets as freizeitTyp
     *
     * @return string
     */
    public function getFreizeitTyp()
    {
        return $this->freizeitTyp;
    }

    /**
     * Sets a new freizeitTyp
     *
     * @param string $freizeitTyp
     * @return self
     */
    public function setFreizeitTyp($freizeitTyp)
    {
        $this->freizeitTyp = $freizeitTyp;
        return $this;
    }


}

