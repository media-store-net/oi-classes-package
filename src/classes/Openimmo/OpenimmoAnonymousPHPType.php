<?php

namespace MediaStoreNet\OpenImmo\Openimmo;

/**
 * Class representing OpenimmoAnonymousPHPType
 */
class OpenimmoAnonymousPHPType
{

    /**
     * @var \MediaStoreNet\OpenImmo\Uebertragung $uebertragung
     */
    private $uebertragung = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Anbieter[] $anbieter
     */
    private $anbieter = [
        
    ];

    /**
     * @var \MediaStoreNet\OpenImmo\UserDefinedSimplefield[] $userDefinedSimplefield
     */
    private $userDefinedSimplefield = [
        
    ];

    /**
     * @var \MediaStoreNet\OpenImmo\UserDefinedAnyfield[] $userDefinedAnyfield
     */
    private $userDefinedAnyfield = [
        
    ];

    /**
     * Gets as uebertragung
     *
     * @return \MediaStoreNet\OpenImmo\Uebertragung
     */
    public function getUebertragung()
    {
        return $this->uebertragung;
    }

    /**
     * Sets a new uebertragung
     *
     * @param \MediaStoreNet\OpenImmo\Uebertragung $uebertragung
     * @return self
     */
    public function setUebertragung(\MediaStoreNet\OpenImmo\Uebertragung $uebertragung)
    {
        $this->uebertragung = $uebertragung;
        return $this;
    }

    /**
     * Adds as anbieter
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\Anbieter $anbieter
     */
    public function addToAnbieter(\MediaStoreNet\OpenImmo\Anbieter $anbieter)
    {
        $this->anbieter[] = $anbieter;
        return $this;
    }

    /**
     * isset anbieter
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAnbieter($index)
    {
        return isset($this->anbieter[$index]);
    }

    /**
     * unset anbieter
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAnbieter($index)
    {
        unset($this->anbieter[$index]);
    }

    /**
     * Gets as anbieter
     *
     * @return \MediaStoreNet\OpenImmo\Anbieter[]
     */
    public function getAnbieter()
    {
        return $this->anbieter;
    }

    /**
     * Sets a new anbieter
     *
     * @param \MediaStoreNet\OpenImmo\Anbieter[] $anbieter
     * @return self
     */
    public function setAnbieter(array $anbieter)
    {
        $this->anbieter = $anbieter;
        return $this;
    }

    /**
     * Adds as userDefinedSimplefield
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\UserDefinedSimplefield $userDefinedSimplefield
     */
    public function addToUserDefinedSimplefield(\MediaStoreNet\OpenImmo\UserDefinedSimplefield $userDefinedSimplefield)
    {
        $this->userDefinedSimplefield[] = $userDefinedSimplefield;
        return $this;
    }

    /**
     * isset userDefinedSimplefield
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUserDefinedSimplefield($index)
    {
        return isset($this->userDefinedSimplefield[$index]);
    }

    /**
     * unset userDefinedSimplefield
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUserDefinedSimplefield($index)
    {
        unset($this->userDefinedSimplefield[$index]);
    }

    /**
     * Gets as userDefinedSimplefield
     *
     * @return \MediaStoreNet\OpenImmo\UserDefinedSimplefield[]
     */
    public function getUserDefinedSimplefield()
    {
        return $this->userDefinedSimplefield;
    }

    /**
     * Sets a new userDefinedSimplefield
     *
     * @param \MediaStoreNet\OpenImmo\UserDefinedSimplefield[] $userDefinedSimplefield
     * @return self
     */
    public function setUserDefinedSimplefield(array $userDefinedSimplefield)
    {
        $this->userDefinedSimplefield = $userDefinedSimplefield;
        return $this;
    }

    /**
     * Adds as userDefinedAnyfield
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\UserDefinedAnyfield $userDefinedAnyfield
     */
    public function addToUserDefinedAnyfield(\MediaStoreNet\OpenImmo\UserDefinedAnyfield $userDefinedAnyfield)
    {
        $this->userDefinedAnyfield[] = $userDefinedAnyfield;
        return $this;
    }

    /**
     * isset userDefinedAnyfield
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUserDefinedAnyfield($index)
    {
        return isset($this->userDefinedAnyfield[$index]);
    }

    /**
     * unset userDefinedAnyfield
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUserDefinedAnyfield($index)
    {
        unset($this->userDefinedAnyfield[$index]);
    }

    /**
     * Gets as userDefinedAnyfield
     *
     * @return \MediaStoreNet\OpenImmo\UserDefinedAnyfield[]
     */
    public function getUserDefinedAnyfield()
    {
        return $this->userDefinedAnyfield;
    }

    /**
     * Sets a new userDefinedAnyfield
     *
     * @param \MediaStoreNet\OpenImmo\UserDefinedAnyfield[] $userDefinedAnyfield
     * @return self
     */
    public function setUserDefinedAnyfield(array $userDefinedAnyfield)
    {
        $this->userDefinedAnyfield = $userDefinedAnyfield;
        return $this;
    }


}

