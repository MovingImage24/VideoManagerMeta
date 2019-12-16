<?php

namespace MovingImage\Meta\Interfaces;

interface TranscodeInterface
{
    public function getQuality(): string;

    public function getProfileKey(): string;

    public function getFileExtension(): string;

    public function isCompleted(): bool;
}
