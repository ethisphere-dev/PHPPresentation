<?php
/**
 * This file is part of PHPPresentation - A pure PHP library for reading and writing
 * presentations documents.
 *
 * PHPPresentation is free software distributed under the terms of the GNU Lesser
 * General Public License version 3 as published by the Free Software Foundation.
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code. For the full list of
 * contributors, visit https://github.com/PHPOffice/PHPPresentation/contributors.
 *
 * @copyright   2009-2015 PHPPresentation contributors
 * @license     http://www.gnu.org/licenses/lgpl.txt LGPL version 3
 * @link        https://github.com/PHPOffice/PHPPresentation
 */

namespace PhpOffice\PhpPresentation\Tests\Shape\Chart;

use PhpOffice\PhpPresentation\Shape\Chart\Legend;
use PhpOffice\PhpPresentation\Style\Alignment;
use PhpOffice\PhpPresentation\Style\Border;
use PhpOffice\PhpPresentation\Style\Fill;
use PhpOffice\PhpPresentation\Style\Font;
use PHPUnit\Framework\TestCase;

/**
 * Test class for Legend element
 *
 * @coversDefaultClass PhpOffice\PhpPresentation\Shape\Chart\Legend
 */
class LegendTest extends TestCase
{
    public function testConstruct(): void
    {
        $object = new Legend();

        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Style\\Font', $object->getFont());
        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Style\\Border', $object->getBorder());
        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Style\\Fill', $object->getFill());
        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Style\\Alignment', $object->getAlignment());
    }

    public function testAlignment(): void
    {
        $object = new Legend();

        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Shape\\Chart\\Legend', $object->setAlignment(new Alignment()));
        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Style\\Alignment', $object->getAlignment());
    }

    public function testBorder(): void
    {
        $object = new Legend();

        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Style\\Border', $object->getBorder());
        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Shape\\Chart\\Legend', $object->setBorder(new Border()));
        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Style\\Border', $object->getBorder());
    }

    public function testFill(): void
    {
        $object = new Legend();

        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Style\\Fill', $object->getFill());
        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Shape\\Chart\\Legend', $object->setFill(new Fill()));
        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Style\\Fill', $object->getFill());
    }

    public function testFont(): void
    {
        $object = new Legend();

        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Shape\\Chart\\Legend', $object->setFont());
        $this->assertNull($object->getFont());
        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Shape\\Chart\\Legend', $object->setFont(new Font()));
        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Style\\Font', $object->getFont());
    }

    public function testHashIndex(): void
    {
        $object = new Legend();
        $value = mt_rand(1, 100);

        $this->assertEmpty($object->getHashIndex());
        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Shape\\Chart\\Legend', $object->setHashIndex($value));
        $this->assertEquals($value, $object->getHashIndex());
    }

    public function testHeight(): void
    {
        $object = new Legend();
        $value = mt_rand(0, 100);

        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Shape\\Chart\\Legend', $object->setHeight());
        $this->assertEquals(0, $object->getHeight());
        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Shape\\Chart\\Legend', $object->setHeight($value));
        $this->assertEquals($value, $object->getHeight());
    }

    public function testOffsetX(): void
    {
        $object = new Legend();
        $value = mt_rand(0, 100);

        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Shape\\Chart\\Legend', $object->setOffsetX());
        $this->assertEquals(0, $object->getOffsetX());
        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Shape\\Chart\\Legend', $object->setOffsetX($value));
        $this->assertEquals($value, $object->getOffsetX());
    }

    public function testOffsetY(): void
    {
        $object = new Legend();
        $value = mt_rand(0, 100);

        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Shape\\Chart\\Legend', $object->setOffsetY());
        $this->assertEquals(0, $object->getOffsetY());
        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Shape\\Chart\\Legend', $object->setOffsetY($value));
        $this->assertEquals($value, $object->getOffsetY());
    }

    public function testPosition(): void
    {
        $object = new Legend();

        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Shape\\Chart\\Legend', $object->setPosition());
        $this->assertEquals(Legend::POSITION_RIGHT, $object->getPosition());
        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Shape\\Chart\\Legend', $object->setPosition(Legend::POSITION_BOTTOM));
        $this->assertEquals(Legend::POSITION_BOTTOM, $object->getPosition());
    }

    public function testVisible(): void
    {
        $object = new Legend();

        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Shape\\Chart\\Legend', $object->setVisible());
        $this->assertTrue($object->isVisible());
        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Shape\\Chart\\Legend', $object->setVisible(true));
        $this->assertTrue($object->isVisible());
        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Shape\\Chart\\Legend', $object->setVisible(false));
        $this->assertFalse($object->isVisible());
    }

    public function testWidth(): void
    {
        $object = new Legend();
        $value = mt_rand(0, 100);

        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Shape\\Chart\\Legend', $object->setWidth());
        $this->assertEquals(0, $object->getWidth());
        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Shape\\Chart\\Legend', $object->setWidth($value));
        $this->assertEquals($value, $object->getWidth());
    }
}
