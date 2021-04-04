<?php

namespace MediaStoreNet\OpenImmo\Master;

/**
 * Class representing MasterAnonymousPHPType
 */
class MasterAnonymousPHPType
{

    /**
     * @var bool $visible
     */
    private $visible = null;

    /**
     * Gets as visible
     *
     * @return bool
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Sets a new visible
     *
     * @param bool $visible
     * @return self
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;
        return $this;
    }


}

