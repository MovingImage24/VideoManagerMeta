<?php

namespace MovingImage\Meta\Interfaces;

interface StillInterface
{
    public function getQuality(): string;

    public function getUrl(): string;

    public function getDimensions(): DimensionsInterface;
}
