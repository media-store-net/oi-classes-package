<?php

namespace MediaStoreNet\OpenImmo\Classes\Bewertung;

/**
 * Class representing BewertungAnonymousPHPType
 */
class BewertungAnonymousPHPType
{

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Bewertung\BewertungAnonymousPHPType\FeldAnonymousPHPType[] $feld
     */
    private $feld = [
        
    ];

    /**
     * Adds as feld
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\Classes\Bewertung\BewertungAnonymousPHPType\FeldAnonymousPHPType $feld
     */
    public function addToFeld(\MediaStoreNet\OpenImmo\Classes\Bewertung\BewertungAnonymousPHPType\FeldAnonymousPHPType $feld)
    {
        $this->feld[] = $feld;
        return $this;
    }

    /**
     * isset feld
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFeld($index)
    {
        return isset($this->feld[$index]);
    }

    /**
     * unset feld
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFeld($index)
    {
        unset($this->feld[$index]);
    }

    /**
     * Gets as feld
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Bewertung\BewertungAnonymousPHPType\FeldAnonymousPHPType[]
     */
    public function getFeld()
    {
        return $this->feld;
    }

    /**
     * Sets a new feld
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Bewertung\BewertungAnonymousPHPType\FeldAnonymousPHPType[] $feld
     * @return self
     */
    public function setFeld(array $feld)
    {
        $this->feld = $feld;
        return $this;
    }


}

