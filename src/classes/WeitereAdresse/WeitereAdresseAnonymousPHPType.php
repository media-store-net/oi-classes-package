<?php

namespace MediaStoreNet\OpenImmo\WeitereAdresse;

/**
 * Class representing WeitereAdresseAnonymousPHPType
 */
class WeitereAdresseAnonymousPHPType
{

    /**
     * @var string $adressart
     */
    private $adressart = null;

    /**
     * @var string $vorname
     */
    private $vorname = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $titel
     */
    private $titel = null;

    /**
     * @var string $anrede
     */
    private $anrede = null;

    /**
     * @var string $anredeBrief
     */
    private $anredeBrief = null;

    /**
     * @var string $firma
     */
    private $firma = null;

    /**
     * @var string $zusatzfeld
     */
    private $zusatzfeld = null;

    /**
     * @var string $strasse
     */
    private $strasse = null;

    /**
     * @var string $hausnummer
     */
    private $hausnummer = null;

    /**
     * @var string $plz
     */
    private $plz = null;

    /**
     * @var string $ort
     */
    private $ort = null;

    /**
     * @var string $postfach
     */
    private $postfach = null;

    /**
     * @var string $postfPlz
     */
    private $postfPlz = null;

    /**
     * @var string $postfOrt
     */
    private $postfOrt = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Land $land
     */
    private $land = null;

    /**
     * @var string $emailZentrale
     */
    private $emailZentrale = null;

    /**
     * @var string $emailDirekt
     */
    private $emailDirekt = null;

    /**
     * @var string $emailPrivat
     */
    private $emailPrivat = null;

    /**
     * @var \MediaStoreNet\OpenImmo\EmailSonstige[] $emailSonstige
     */
    private $emailSonstige = [
        
    ];

    /**
     * @var string $telDurchw
     */
    private $telDurchw = null;

    /**
     * @var string $telZentrale
     */
    private $telZentrale = null;

    /**
     * @var string $telHandy
     */
    private $telHandy = null;

    /**
     * @var string $telFax
     */
    private $telFax = null;

    /**
     * @var string $telPrivat
     */
    private $telPrivat = null;

    /**
     * @var \MediaStoreNet\OpenImmo\TelSonstige[] $telSonstige
     */
    private $telSonstige = [
        
    ];

    /**
     * @var string $url
     */
    private $url = null;

    /**
     * @var bool $adressfreigabe
     */
    private $adressfreigabe = null;

    /**
     * @var string $personennummer
     */
    private $personennummer = null;

    /**
     * @var string $freitextfeld
     */
    private $freitextfeld = null;

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
     * @var \MediaStoreNet\OpenImmo\UserDefinedExtend\UserDefinedExtendAnonymousPHPType\FeldAnonymousPHPType[] $userDefinedExtend
     */
    private $userDefinedExtend = null;

    /**
     * Gets as adressart
     *
     * @return string
     */
    public function getAdressart()
    {
        return $this->adressart;
    }

    /**
     * Sets a new adressart
     *
     * @param string $adressart
     * @return self
     */
    public function setAdressart($adressart)
    {
        $this->adressart = $adressart;
        return $this;
    }

    /**
     * Gets as vorname
     *
     * @return string
     */
    public function getVorname()
    {
        return $this->vorname;
    }

    /**
     * Sets a new vorname
     *
     * @param string $vorname
     * @return self
     */
    public function setVorname($vorname)
    {
        $this->vorname = $vorname;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as titel
     *
     * @return string
     */
    public function getTitel()
    {
        return $this->titel;
    }

    /**
     * Sets a new titel
     *
     * @param string $titel
     * @return self
     */
    public function setTitel($titel)
    {
        $this->titel = $titel;
        return $this;
    }

    /**
     * Gets as anrede
     *
     * @return string
     */
    public function getAnrede()
    {
        return $this->anrede;
    }

    /**
     * Sets a new anrede
     *
     * @param string $anrede
     * @return self
     */
    public function setAnrede($anrede)
    {
        $this->anrede = $anrede;
        return $this;
    }

    /**
     * Gets as anredeBrief
     *
     * @return string
     */
    public function getAnredeBrief()
    {
        return $this->anredeBrief;
    }

    /**
     * Sets a new anredeBrief
     *
     * @param string $anredeBrief
     * @return self
     */
    public function setAnredeBrief($anredeBrief)
    {
        $this->anredeBrief = $anredeBrief;
        return $this;
    }

    /**
     * Gets as firma
     *
     * @return string
     */
    public function getFirma()
    {
        return $this->firma;
    }

    /**
     * Sets a new firma
     *
     * @param string $firma
     * @return self
     */
    public function setFirma($firma)
    {
        $this->firma = $firma;
        return $this;
    }

    /**
     * Gets as zusatzfeld
     *
     * @return string
     */
    public function getZusatzfeld()
    {
        return $this->zusatzfeld;
    }

    /**
     * Sets a new zusatzfeld
     *
     * @param string $zusatzfeld
     * @return self
     */
    public function setZusatzfeld($zusatzfeld)
    {
        $this->zusatzfeld = $zusatzfeld;
        return $this;
    }

    /**
     * Gets as strasse
     *
     * @return string
     */
    public function getStrasse()
    {
        return $this->strasse;
    }

    /**
     * Sets a new strasse
     *
     * @param string $strasse
     * @return self
     */
    public function setStrasse($strasse)
    {
        $this->strasse = $strasse;
        return $this;
    }

    /**
     * Gets as hausnummer
     *
     * @return string
     */
    public function getHausnummer()
    {
        return $this->hausnummer;
    }

    /**
     * Sets a new hausnummer
     *
     * @param string $hausnummer
     * @return self
     */
    public function setHausnummer($hausnummer)
    {
        $this->hausnummer = $hausnummer;
        return $this;
    }

    /**
     * Gets as plz
     *
     * @return string
     */
    public function getPlz()
    {
        return $this->plz;
    }

    /**
     * Sets a new plz
     *
     * @param string $plz
     * @return self
     */
    public function setPlz($plz)
    {
        $this->plz = $plz;
        return $this;
    }

    /**
     * Gets as ort
     *
     * @return string
     */
    public function getOrt()
    {
        return $this->ort;
    }

    /**
     * Sets a new ort
     *
     * @param string $ort
     * @return self
     */
    public function setOrt($ort)
    {
        $this->ort = $ort;
        return $this;
    }

    /**
     * Gets as postfach
     *
     * @return string
     */
    public function getPostfach()
    {
        return $this->postfach;
    }

    /**
     * Sets a new postfach
     *
     * @param string $postfach
     * @return self
     */
    public function setPostfach($postfach)
    {
        $this->postfach = $postfach;
        return $this;
    }

    /**
     * Gets as postfPlz
     *
     * @return string
     */
    public function getPostfPlz()
    {
        return $this->postfPlz;
    }

    /**
     * Sets a new postfPlz
     *
     * @param string $postfPlz
     * @return self
     */
    public function setPostfPlz($postfPlz)
    {
        $this->postfPlz = $postfPlz;
        return $this;
    }

    /**
     * Gets as postfOrt
     *
     * @return string
     */
    public function getPostfOrt()
    {
        return $this->postfOrt;
    }

    /**
     * Sets a new postfOrt
     *
     * @param string $postfOrt
     * @return self
     */
    public function setPostfOrt($postfOrt)
    {
        $this->postfOrt = $postfOrt;
        return $this;
    }

    /**
     * Gets as land
     *
     * @return \MediaStoreNet\OpenImmo\Land
     */
    public function getLand()
    {
        return $this->land;
    }

    /**
     * Sets a new land
     *
     * @param \MediaStoreNet\OpenImmo\Land $land
     * @return self
     */
    public function setLand(\MediaStoreNet\OpenImmo\Land $land)
    {
        $this->land = $land;
        return $this;
    }

    /**
     * Gets as emailZentrale
     *
     * @return string
     */
    public function getEmailZentrale()
    {
        return $this->emailZentrale;
    }

    /**
     * Sets a new emailZentrale
     *
     * @param string $emailZentrale
     * @return self
     */
    public function setEmailZentrale($emailZentrale)
    {
        $this->emailZentrale = $emailZentrale;
        return $this;
    }

    /**
     * Gets as emailDirekt
     *
     * @return string
     */
    public function getEmailDirekt()
    {
        return $this->emailDirekt;
    }

    /**
     * Sets a new emailDirekt
     *
     * @param string $emailDirekt
     * @return self
     */
    public function setEmailDirekt($emailDirekt)
    {
        $this->emailDirekt = $emailDirekt;
        return $this;
    }

    /**
     * Gets as emailPrivat
     *
     * @return string
     */
    public function getEmailPrivat()
    {
        return $this->emailPrivat;
    }

    /**
     * Sets a new emailPrivat
     *
     * @param string $emailPrivat
     * @return self
     */
    public function setEmailPrivat($emailPrivat)
    {
        $this->emailPrivat = $emailPrivat;
        return $this;
    }

    /**
     * Adds as emailSonstige
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\EmailSonstige $emailSonstige
     */
    public function addToEmailSonstige(\MediaStoreNet\OpenImmo\EmailSonstige $emailSonstige)
    {
        $this->emailSonstige[] = $emailSonstige;
        return $this;
    }

    /**
     * isset emailSonstige
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEmailSonstige($index)
    {
        return isset($this->emailSonstige[$index]);
    }

    /**
     * unset emailSonstige
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEmailSonstige($index)
    {
        unset($this->emailSonstige[$index]);
    }

    /**
     * Gets as emailSonstige
     *
     * @return \MediaStoreNet\OpenImmo\EmailSonstige[]
     */
    public function getEmailSonstige()
    {
        return $this->emailSonstige;
    }

    /**
     * Sets a new emailSonstige
     *
     * @param \MediaStoreNet\OpenImmo\EmailSonstige[] $emailSonstige
     * @return self
     */
    public function setEmailSonstige(array $emailSonstige)
    {
        $this->emailSonstige = $emailSonstige;
        return $this;
    }

    /**
     * Gets as telDurchw
     *
     * @return string
     */
    public function getTelDurchw()
    {
        return $this->telDurchw;
    }

    /**
     * Sets a new telDurchw
     *
     * @param string $telDurchw
     * @return self
     */
    public function setTelDurchw($telDurchw)
    {
        $this->telDurchw = $telDurchw;
        return $this;
    }

    /**
     * Gets as telZentrale
     *
     * @return string
     */
    public function getTelZentrale()
    {
        return $this->telZentrale;
    }

    /**
     * Sets a new telZentrale
     *
     * @param string $telZentrale
     * @return self
     */
    public function setTelZentrale($telZentrale)
    {
        $this->telZentrale = $telZentrale;
        return $this;
    }

    /**
     * Gets as telHandy
     *
     * @return string
     */
    public function getTelHandy()
    {
        return $this->telHandy;
    }

    /**
     * Sets a new telHandy
     *
     * @param string $telHandy
     * @return self
     */
    public function setTelHandy($telHandy)
    {
        $this->telHandy = $telHandy;
        return $this;
    }

    /**
     * Gets as telFax
     *
     * @return string
     */
    public function getTelFax()
    {
        return $this->telFax;
    }

    /**
     * Sets a new telFax
     *
     * @param string $telFax
     * @return self
     */
    public function setTelFax($telFax)
    {
        $this->telFax = $telFax;
        return $this;
    }

    /**
     * Gets as telPrivat
     *
     * @return string
     */
    public function getTelPrivat()
    {
        return $this->telPrivat;
    }

    /**
     * Sets a new telPrivat
     *
     * @param string $telPrivat
     * @return self
     */
    public function setTelPrivat($telPrivat)
    {
        $this->telPrivat = $telPrivat;
        return $this;
    }

    /**
     * Adds as telSonstige
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\TelSonstige $telSonstige
     */
    public function addToTelSonstige(\MediaStoreNet\OpenImmo\TelSonstige $telSonstige)
    {
        $this->telSonstige[] = $telSonstige;
        return $this;
    }

    /**
     * isset telSonstige
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTelSonstige($index)
    {
        return isset($this->telSonstige[$index]);
    }

    /**
     * unset telSonstige
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTelSonstige($index)
    {
        unset($this->telSonstige[$index]);
    }

    /**
     * Gets as telSonstige
     *
     * @return \MediaStoreNet\OpenImmo\TelSonstige[]
     */
    public function getTelSonstige()
    {
        return $this->telSonstige;
    }

    /**
     * Sets a new telSonstige
     *
     * @param \MediaStoreNet\OpenImmo\TelSonstige[] $telSonstige
     * @return self
     */
    public function setTelSonstige(array $telSonstige)
    {
        $this->telSonstige = $telSonstige;
        return $this;
    }

    /**
     * Gets as url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets a new url
     *
     * @param string $url
     * @return self
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Gets as adressfreigabe
     *
     * @return bool
     */
    public function getAdressfreigabe()
    {
        return $this->adressfreigabe;
    }

    /**
     * Sets a new adressfreigabe
     *
     * @param bool $adressfreigabe
     * @return self
     */
    public function setAdressfreigabe($adressfreigabe)
    {
        $this->adressfreigabe = $adressfreigabe;
        return $this;
    }

    /**
     * Gets as personennummer
     *
     * @return string
     */
    public function getPersonennummer()
    {
        return $this->personennummer;
    }

    /**
     * Sets a new personennummer
     *
     * @param string $personennummer
     * @return self
     */
    public function setPersonennummer($personennummer)
    {
        $this->personennummer = $personennummer;
        return $this;
    }

    /**
     * Gets as freitextfeld
     *
     * @return string
     */
    public function getFreitextfeld()
    {
        return $this->freitextfeld;
    }

    /**
     * Sets a new freitextfeld
     *
     * @param string $freitextfeld
     * @return self
     */
    public function setFreitextfeld($freitextfeld)
    {
        $this->freitextfeld = $freitextfeld;
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

    /**
     * Adds as feld
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\UserDefinedExtend\UserDefinedExtendAnonymousPHPType\FeldAnonymousPHPType $feld
     */
    public function addToUserDefinedExtend(\MediaStoreNet\OpenImmo\UserDefinedExtend\UserDefinedExtendAnonymousPHPType\FeldAnonymousPHPType $feld)
    {
        $this->userDefinedExtend[] = $feld;
        return $this;
    }

    /**
     * isset userDefinedExtend
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUserDefinedExtend($index)
    {
        return isset($this->userDefinedExtend[$index]);
    }

    /**
     * unset userDefinedExtend
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUserDefinedExtend($index)
    {
        unset($this->userDefinedExtend[$index]);
    }

    /**
     * Gets as userDefinedExtend
     *
     * @return \MediaStoreNet\OpenImmo\UserDefinedExtend\UserDefinedExtendAnonymousPHPType\FeldAnonymousPHPType[]
     */
    public function getUserDefinedExtend()
    {
        return $this->userDefinedExtend;
    }

    /**
     * Sets a new userDefinedExtend
     *
     * @param \MediaStoreNet\OpenImmo\UserDefinedExtend\UserDefinedExtendAnonymousPHPType\FeldAnonymousPHPType[] $userDefinedExtend
     * @return self
     */
    public function setUserDefinedExtend(array $userDefinedExtend)
    {
        $this->userDefinedExtend = $userDefinedExtend;
        return $this;
    }


}

