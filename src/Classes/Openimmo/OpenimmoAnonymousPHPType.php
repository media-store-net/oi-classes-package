<?php

namespace MediaStoreNet\OpenImmo\Classes\Openimmo;

/**
 * Class representing OpenimmoAnonymousPHPType
 */
class OpenimmoAnonymousPHPType
{

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Uebertragung $uebertragung
     */
    private $uebertragung = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Anbieter[] $anbieter
     */
    private $anbieter = [
        
    ];

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\UserDefinedSimplefield[] $userDefinedSimplefield
     */
    private $userDefinedSimplefield = [
        
    ];

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\UserDefinedAnyfield[] $userDefinedAnyfield
     */
    private $userDefinedAnyfield = [
        
    ];

    /**
     * Gets as uebertragung
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Uebertragung
     */
    public function getUebertragung()
    {
        return $this->uebertragung;
    }

    /**
     * Sets a new uebertragung
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Uebertragung $uebertragung
     * @return self
     */
    public function setUebertragung(\MediaStoreNet\OpenImmo\Classes\Uebertragung $uebertragung)
    {
        $this->uebertragung = $uebertragung;
        return $this;
    }

    /**
     * Adds as anbieter
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\Classes\Anbieter $anbieter
     */
    public function addToAnbieter(\MediaStoreNet\OpenImmo\Classes\Anbieter $anbieter)
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
     * @return \MediaStoreNet\OpenImmo\Classes\Anbieter[]
     */
    public function getAnbieter()
    {
        return $this->anbieter;
    }

    /**
     * Sets a new anbieter
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Anbieter[] $anbieter
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
     * @param \MediaStoreNet\OpenImmo\Classes\UserDefinedSimplefield $userDefinedSimplefield
     */
    public function addToUserDefinedSimplefield(\MediaStoreNet\OpenImmo\Classes\UserDefinedSimplefield $userDefinedSimplefield)
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
     * @return \MediaStoreNet\OpenImmo\Classes\UserDefinedSimplefield[]
     */
    public function getUserDefinedSimplefield()
    {
        return $this->userDefinedSimplefield;
    }

    /**
     * Sets a new userDefinedSimplefield
     *
     * @param \MediaStoreNet\OpenImmo\Classes\UserDefinedSimplefield[] $userDefinedSimplefield
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
     * @param \MediaStoreNet\OpenImmo\Classes\UserDefinedAnyfield $userDefinedAnyfield
     */
    public function addToUserDefinedAnyfield(\MediaStoreNet\OpenImmo\Classes\UserDefinedAnyfield $userDefinedAnyfield)
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
     * @return \MediaStoreNet\OpenImmo\Classes\UserDefinedAnyfield[]
     */
    public function getUserDefinedAnyfield()
    {
        return $this->userDefinedAnyfield;
    }

    /**
     * Sets a new userDefinedAnyfield
     *
     * @param \MediaStoreNet\OpenImmo\Classes\UserDefinedAnyfield[] $userDefinedAnyfield
     * @return self
     */
    public function setUserDefinedAnyfield(array $userDefinedAnyfield)
    {
        $this->userDefinedAnyfield = $userDefinedAnyfield;
        return $this;
    }


}

