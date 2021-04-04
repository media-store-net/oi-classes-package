<?php

namespace MediaStoreNet\OpenImmo\Verkaufstatus;

/**
 * Class representing VerkaufstatusAnonymousPHPType
 */
class VerkaufstatusAnonymousPHPType
{

    /**
     * @var string $stand
     */
    private $stand = null;

    /**
     * Gets as stand
     *
     * @return string
     */
    public function getStand()
    {
        return $this->stand;
    }

    /**
     * Sets a new stand
     *
     * @param string $stand
     * @return self
     */
    public function setStand($stand)
    {
        $this->stand = $stand;
        return $this;
    }


}

