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
 * @see        https://github.com/PHPOffice/PHPPresentation
 *
 * @copyright   2009-2015 PHPPresentation contributors
 * @license     http://www.gnu.org/licenses/lgpl.txt LGPL version 3
 */

declare(strict_types=1);

namespace PhpOffice\PhpPresentation\Shape\Chart;

use PhpOffice\PhpPresentation\ComparableInterface;
use PhpOffice\PhpPresentation\Style\Font;
use PhpOffice\PhpPresentation\Style\Outline;

class Axis implements ComparableInterface
{
    public const AXIS_X = 'x';
    public const AXIS_Y = 'y';

    public const TICK_MARK_NONE = 'none';
    public const TICK_MARK_CROSS = 'cross';
    public const TICK_MARK_INSIDE = 'in';
    public const TICK_MARK_OUTSIDE = 'out';

    public const TICK_LABEL_POSITION_NEXT_TO = 'nextTo';
    public const TICK_LABEL_POSITION_HIGH = 'high';
    public const TICK_LABEL_POSITION_LOW = 'low';

    public const CROSSES_AUTO = 'autoZero';
    public const CROSSES_MIN = 'min';
    public const CROSSES_MAX = 'max';

    public const DEFAULT_FORMAT_CODE = 'general';

    /**
     * Title.
     *
     * @var string
     */
    private $title = 'Axis Title';

    /**
     * @var int
     */
    private $titleRotation = 0;

    /**
     * Format code
     *
     * @var string
     */
    private $formatCode = self::DEFAULT_FORMAT_CODE;

    /**
     * Font.
     *
     * @var Font
     */
    private $font;

    /**
     * @var Gridlines|null
     */
    protected $majorGridlines;

    /**
     * @var Gridlines|null
     */
    protected $minorGridlines;

    /**
     * @var int
     */
    protected $minBounds;

    /**
     * @var int
     */
    protected $maxBounds;

    /**
     * @var string
     */
    protected $crossesAt = self::CROSSES_AUTO;

    /**
     * @var bool
     */
    protected $isReversedOrder = false;

    /**
     * @var string
     */
    protected $minorTickMark = self::TICK_MARK_NONE;

    /**
     * @var string
     */
    protected $majorTickMark = self::TICK_MARK_NONE;

    /**
     * @var string
     */
    protected $tickLabelPosition = self::TICK_LABEL_POSITION_NEXT_TO;

    /**
     * @var float
     */
    protected $minorUnit;

    /**
     * @var float
     */
    protected $majorUnit;

    /**
     * @var Outline
     */
    protected $outline;

    /**
     * @var bool
     */
    protected $isVisible = true;

    /**
     * Create a new \PhpOffice\PhpPresentation\Shape\Chart\Axis instance.
     *
     * @param string $title Title
     */
    public function __construct(string $title = 'Axis Title')
    {
        $this->title = $title;
        $this->outline = new Outline();
        $this->font = new Font();
    }

    /**
     * Get Title.
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Title.
     *
     * @param string $value
     *
     * @return self
     */
    public function setTitle(string $value = 'Axis Title'): self
    {
        $this->title = $value;

        return $this;
    }

    /**
     * Get font.
     *
     * @return Font|null
     */
    public function getFont(): ?Font
    {
        return $this->font;
    }

    /**
     * Set font.
     *
     * @param Font|null $font
     *
     * @return self
     */
    public function setFont(Font $font = null): self
    {
        $this->font = $font;

        return $this;
    }

    /**
     * Get Format Code.
     *
     * @return string
     */
    public function getFormatCode(): string
    {
        return $this->formatCode;
    }

    /**
     * Set Format Code.
     *
     * @param string $value
     *
     * @return self
     */
    public function setFormatCode(string $value = ''): self
    {
        $this->formatCode = $value;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getMinBounds(): ?int
    {
        return $this->minBounds;
    }

    /**
     * @param int|null $minBounds
     *
     * @return self
     */
    public function setMinBounds(int $minBounds = null): self
    {
        $this->minBounds = is_null($minBounds) ? null : $minBounds;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getMaxBounds(): ?int
    {
        return $this->maxBounds;
    }

    /**
     * @param int|null $maxBounds
     *
     * @return self
     */
    public function setMaxBounds(int $maxBounds = null): self
    {
        $this->maxBounds = is_null($maxBounds) ? null : $maxBounds;

        return $this;
    }

    /**
     * @return string
     */
    public function getCrossesAt(): string
    {
        return $this->crossesAt;
    }

    /**
     * @param string $value
     *
     * @return self
     */
    public function setCrossesAt(string $value = self::CROSSES_AUTO): self
    {
        $this->crossesAt = $value;

        return $this;
    }

    /**
     * @return bool
     */
    public function isReversedOrder(): bool
    {
        return $this->isReversedOrder;
    }

    /**
     * @param bool $value
     *
     * @return self
     */
    public function setIsReversedOrder(bool $value = false): self
    {
        $this->isReversedOrder = $value;

        return $this;
    }

    public function getMajorGridlines(): ?Gridlines
    {
        return $this->majorGridlines;
    }

    public function setMajorGridlines(Gridlines $majorGridlines): self
    {
        $this->majorGridlines = $majorGridlines;

        return $this;
    }

    public function getMinorGridlines(): ?Gridlines
    {
        return $this->minorGridlines;
    }

    public function setMinorGridlines(Gridlines $minorGridlines): self
    {
        $this->minorGridlines = $minorGridlines;

        return $this;
    }

    /**
     * @return string
     */
    public function getMinorTickMark(): string
    {
        return $this->minorTickMark;
    }

    /**
     * @param string $tickMark
     *
     * @return self
     */
    public function setMinorTickMark(string $tickMark = self::TICK_MARK_NONE): self
    {
        $this->minorTickMark = $tickMark;

        return $this;
    }

    /**
     * @return string
     */
    public function getMajorTickMark(): string
    {
        return $this->majorTickMark;
    }

    /**
     * @param string $tickMark
     *
     * @return self
     */
    public function setMajorTickMark(string $tickMark = self::TICK_MARK_NONE): self
    {
        $this->majorTickMark = $tickMark;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getMinorUnit(): ?float
    {
        return $this->minorUnit;
    }

    /**
     * @param float|null $unit
     *
     * @return self
     */
    public function setMinorUnit($unit = null): self
    {
        $this->minorUnit = $unit;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getMajorUnit(): ?float
    {
        return $this->majorUnit;
    }

    /**
     * @param float|null $unit
     *
     * @return self
     */
    public function setMajorUnit(float $unit = null): self
    {
        $this->majorUnit = $unit;

        return $this;
    }

    /**
     * @return Outline
     */
    public function getOutline(): Outline
    {
        return $this->outline;
    }

    /**
     * @param Outline $outline
     *
     * @return self
     */
    public function setOutline(Outline $outline): self
    {
        $this->outline = $outline;

        return $this;
    }

    /**
     * @return int
     */
    public function getTitleRotation(): int
    {
        return $this->titleRotation;
    }

    /**
     * @param int $titleRotation
     *
     * @return self
     */
    public function setTitleRotation(int $titleRotation): self
    {
        if ($titleRotation < 0) {
            $titleRotation = 0;
        }
        if ($titleRotation > 360) {
            $titleRotation = 360;
        }
        $this->titleRotation = $titleRotation;

        return $this;
    }

    /**
     * Get hash code
     *
     * @return string Hash code
     */
    public function getHashCode(): string
    {
        return md5($this->title . $this->formatCode . __CLASS__);
    }

    /**
     * Hash index.
     *
     * @var int
     */
    private $hashIndex;

    /**
     * Get hash index.
     *
     * Note that this index may vary during script execution! Only reliable moment is
     * while doing a write of a workbook and when changes are not allowed.
     *
     * @return int|null Hash index
     */
    public function getHashIndex(): ?int
    {
        return $this->hashIndex;
    }

    /**
     * Set hash index.
     *
     * Note that this index may vary during script execution! Only reliable moment is
     * while doing a write of a workbook and when changes are not allowed.
     *
     * @param int $value Hash index
     *
     * @return self
     */
    public function setHashIndex(int $value)
    {
        $this->hashIndex = $value;

        return $this;
    }

    /**
     * Axis is hidden ?
     *
     * @return bool
     */
    public function isVisible(): bool
    {
        return $this->isVisible;
    }

    /**
     * Hide an axis.
     *
     * @param bool $value delete
     *
     * @return self
     */
    public function setIsVisible(bool $value): self
    {
        $this->isVisible = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getTickLabelPosition(): string
    {
        return $this->tickLabelPosition;
    }

    /**
     * @param string $value
     *
     * @return self
     */
    public function setTickLabelPosition(string $value = self::TICK_LABEL_POSITION_NEXT_TO): self
    {
        if (in_array($value, [
            self::TICK_LABEL_POSITION_HIGH,
            self::TICK_LABEL_POSITION_LOW,
            self::TICK_LABEL_POSITION_NEXT_TO,
        ])) {
            $this->tickLabelPosition = $value;
        }

        return $this;
    }
}