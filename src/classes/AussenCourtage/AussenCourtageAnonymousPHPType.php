<?php

namespace MediaStoreNet\OpenImmo\AussenCourtage;

/**
 * Class representing AussenCourtageAnonymousPHPType
 */
class AussenCourtageAnonymousPHPType
{

    /**
     * @var bool $mitMwst
     */
    private $mitMwst = null;

    /**
     * Gets as mitMwst
     *
     * @return bool
     */
    public function getMitMwst()
    {
        return $this->mitMwst;
    }

    /**
     * Sets a new mitMwst
     *
     * @param bool $mitMwst
     * @return self
     */
    public function setMitMwst($mitMwst)
    {
        $this->mitMwst = $mitMwst;
        return $this;
    }


}

