<?php

namespace MediaStoreNet\OpenImmo\Zimmer;

/**
 * Class representing ZimmerAnonymousPHPType
 */
class ZimmerAnonymousPHPType
{

    /**
     * @var string $zimmertyp
     */
    private $zimmertyp = null;

    /**
     * Gets as zimmertyp
     *
     * @return string
     */
    public function getZimmertyp()
    {
        return $this->zimmertyp;
    }

    /**
     * Sets a new zimmertyp
     *
     * @param string $zimmertyp
     * @return self
     */
    public function setZimmertyp($zimmertyp)
    {
        $this->zimmertyp = $zimmertyp;
        return $this;
    }


}

