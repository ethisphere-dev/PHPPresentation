<?php

namespace PhpOffice\PhpPresentation\Slide\Background;

use PhpOffice\PhpPresentation\Slide\AbstractBackground;
use PhpOffice\PhpPresentation\Style\Color as StyleColor;

class Color extends AbstractBackground
{
    /**
     * @var StyleColor|null
     */
    protected $color;

    /**
     * @param StyleColor|null $color
     * @return self
     */
    public function setColor(StyleColor $color = null): self
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @return StyleColor|null
     */
    public function getColor(): ?StyleColor
    {
        return $this->color;
    }
}
