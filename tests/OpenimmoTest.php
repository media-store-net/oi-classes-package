<?php

namespace MediaStoreNet\OpenImmo\Test;

use MediaStoreNet\OpenImmo\Classes\Anbieter;
use MediaStoreNet\OpenImmo\Classes\Openimmo;
use MediaStoreNet\OpenImmo\Classes\Uebertragung;
use MediaStoreNet\OpenImmo\Classes\UserDefinedAnyfield;
use MediaStoreNet\OpenImmo\Classes\UserDefinedSimplefield;
use PHPUnit\Framework\TestCase;

/**
 * Test-Klasse für Openimmo
 */
class OpenimmoTest extends TestCase
{
    private Openimmo $oi;

    protected function setUp(): void
    {
        parent::setUp();
        $this->oi = new Openimmo();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
        unset($this->oi);
    }

    public function testShouldBeInstanceOfOpenimmo(): void
    {
        self::assertInstanceOf(
            Openimmo::class,
            $this->oi,
            'Das Objekt sollte eine Instanz von Openimmo sein'
        );
    }

    public function testShouldSetAndGetUebertragung(): void
    {
        $uebertragung = new Uebertragung();
        $this->oi->setUebertragung($uebertragung);

        self::assertInstanceOf(
            Uebertragung::class,
            $this->oi->getUebertragung(),
            'getUebertragung() sollte eine Instanz von Uebertragung zurückgeben'
        );
    }

    public function testShouldManageAnbieterCollection(): void
    {
        $anbieter = new Anbieter();
        $this->oi->addToAnbieter($anbieter);

        self::assertInstanceOf(
            Anbieter::class,
            $this->oi->getAnbieter()[0],
            'Der erste Anbieter sollte eine Instanz von Anbieter sein'
        );
        self::assertIsArray(
            $this->oi->getAnbieter(),
            'getAnbieter() sollte ein Array zurückgeben'
        );

        $this->oi->unsetAnbieter(0);
        self::assertArrayNotHasKey(
            0,
            $this->oi->getAnbieter(),
            'Nach dem Entfernen sollte kein Anbieter mehr vorhanden sein'
        );
    }

    public function testShouldManageUserDefinedSimplefieldCollection(): void
    {
        $field = new UserDefinedSimplefield();
        $this->oi->addToUserDefinedSimplefield($field);

        self::assertInstanceOf(
            UserDefinedSimplefield::class,
            $this->oi->getUserDefinedSimplefield()[0],
            'Das erste Feld sollte eine Instanz von UserDefinedSimplefield sein'
        );
        self::assertIsArray(
            $this->oi->getUserDefinedSimplefield(),
            'getUserDefinedSimplefield() sollte ein Array zurückgeben'
        );

        $this->oi->unsetUserDefinedSimplefield(0);
        self::assertArrayNotHasKey(
            0,
            $this->oi->getUserDefinedSimplefield(),
            'Nach dem Entfernen sollte kein UserDefinedSimplefield mehr vorhanden sein'
        );
    }

    public function testShouldManageUserDefinedAnyfieldCollection(): void
    {
        $field = new UserDefinedAnyfield();
        $this->oi->addToUserDefinedAnyfield($field);

        self::assertInstanceOf(
            UserDefinedAnyfield::class,
            $this->oi->getUserDefinedAnyfield()[0],
            'Das erste Feld sollte eine Instanz von UserDefinedAnyfield sein'
        );
        self::assertIsArray(
            $this->oi->getUserDefinedAnyfield(),
            'getUserDefinedAnyfield() sollte ein Array zurückgeben'
        );

        $this->oi->unsetUserDefinedAnyfield(0);
        self::assertArrayNotHasKey(
            0,
            $this->oi->getUserDefinedAnyfield(),
            'Nach dem Entfernen sollte kein UserDefinedAnyfield mehr vorhanden sein'
        );
    }
}
