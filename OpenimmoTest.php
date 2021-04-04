<?php

namespace MediaStoreNet\OpenImmo\Test;

use MediaStoreNet\OpenImmo\Classes\Anbieter;
use MediaStoreNet\OpenImmo\Classes\Openimmo;
use MediaStoreNet\OpenImmo\Classes\Uebertragung;
use MediaStoreNet\OpenImmo\Classes\UserDefinedAnyfield;
use MediaStoreNet\OpenImmo\Classes\UserDefinedSimplefield;
use PHPUnit\Framework\TestCase;

class OpenimmoTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        $this->oi = new Openimmo();
    }

    public function tearDown(): void
    {
        parent::tearDown();
        unset($this->oi);
    }

    public function testIsInstanceOfOpenimmo(): void
    {
        self::assertInstanceOf(
            'MediaStoreNet\OpenImmo\Classes\Openimmo',
            $this->oi,
            'expected that $this->openimmo a Instance of MediaStoreNet\OpenImmo\Openimmo'
        );
    }

    public function testSetUebertragungInstance(): void
    {
        $this->oi->setUebertragung(new Uebertragung());
        $this->assertInstanceOf(
            'MediaStoreNet\OpenImmo\Classes\Uebertragung',
            $this->oi->getUebertragung(),
            'expected method getUebertragung() returns a class of MediaStoreNet\OpenImmo\Classes\Uebertragung');
    }

    public function testSetAnbieterInstance(): void
    {
        $this->oi->addToAnbieter(new Anbieter());
        $this->assertInstanceOf(
            'MediaStoreNet\OpenImmo\Classes\Anbieter',
            $this->oi->getAnbieter()[0],
            'expected method getAnbieter()[0] returns a instance of MediaStoreNet\OpenImmo\Classes\Anbieter'
        );
        $this->assertIsArray($this->oi->getAnbieter(), 'expected getAnbieter() return an array');
        $this->oi->unsetAnbieter(0);
        $this->assertArrayNotHasKey(0, $this->oi->getAnbieter(), 'expected the Anbieter Array is Empty');
    }

    public function testSetUDSFInstance()
    {
        $this->oi->addToUserDefinedSimplefield(new UserDefinedSimplefield());
        $this->assertInstanceOf(
            'MediaStoreNet\OpenImmo\Classes\UserDefinedSimplefield',
            $this->oi->getUserDefinedSimplefield()[0],
            'expected method getUserDefinedSimplefield()[0] returns a instance of MediaStoreNet\OpenImmo\Classes\UserDefinedSimplefield'
        );
        $this->assertIsArray($this->oi->getUserDefinedSimplefield(), 'expected getUserDefinedSimplefield() return an array');
        $this->oi->unsetUserDefinedSimplefield(0);
        $this->assertArrayNotHasKey(0, $this->oi->getUserDefinedSimplefield(), 'expected the UserDefinedSimplefield Array is Empty');
    }

    public function testSetADSAInstance() {
        $this->oi->addToUserDefinedAnyfield(new UserDefinedAnyfield());
        $this->assertInstanceOf(
            'MediaStoreNet\OpenImmo\Classes\UserDefinedAnyfield',
            $this->oi->getUserDefinedAnyfield()[0],
            'expected method getUserDefinedAnyfield()[0] returns a instance of MediaStoreNet\OpenImmo\Classes\UserDefinedAnyfield'
        );
        $this->assertIsArray($this->oi->getUserDefinedAnyfield(), 'expected getUserDefinedAnyfield() return an array');
        $this->oi->unsetUserDefinedAnyfield(0);
        $this->assertArrayNotHasKey(0, $this->oi->getUserDefinedAnyfield(), 'expected the UserDefinedAnyfield Array is Empty');
    }

}
