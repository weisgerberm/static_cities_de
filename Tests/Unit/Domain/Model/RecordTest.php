<?php

declare(strict_types=1);

namespace Weisgerber\StaticCitiesDe\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Mark Weisgerber <mark.weisgerber@outlook.de>
 */
class RecordTest extends UnitTestCase
{
    /**
     * @var \Weisgerber\StaticCitiesDe\Domain\Model\Record|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \Weisgerber\StaticCitiesDe\Domain\Model\Record::class,
            ['dummy']
        );
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getZipReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getZip()
        );
    }

    /**
     * @test
     */
    public function setZipForStringSetsZip(): void
    {
        $this->subject->setZip('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('zip'));
    }

    /**
     * @test
     */
    public function getCityReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getCity()
        );
    }

    /**
     * @test
     */
    public function setCityForStringSetsCity(): void
    {
        $this->subject->setCity('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('city'));
    }

    /**
     * @test
     */
    public function getStateReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getState()
        );
    }

    /**
     * @test
     */
    public function setStateForStringSetsState(): void
    {
        $this->subject->setState('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('state'));
    }

    /**
     * @test
     */
    public function getCommunityReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getCommunity()
        );
    }

    /**
     * @test
     */
    public function setCommunityForStringSetsCommunity(): void
    {
        $this->subject->setCommunity('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('community'));
    }

    /**
     * @test
     */
    public function getLatitudeReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getLatitude()
        );
    }

    /**
     * @test
     */
    public function setLatitudeForStringSetsLatitude(): void
    {
        $this->subject->setLatitude('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('latitude'));
    }

    /**
     * @test
     */
    public function getLongitudeReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getLongitude()
        );
    }

    /**
     * @test
     */
    public function setLongitudeForStringSetsLongitude(): void
    {
        $this->subject->setLongitude('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('longitude'));
    }
}
