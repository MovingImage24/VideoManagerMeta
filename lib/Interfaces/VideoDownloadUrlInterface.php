<?php

namespace MovingImage\Meta\Interfaces;

interface VideoDownloadUrlInterface
{
    public function getQuality(): string;

    public function getProfileKey(): string;

    public function getFileExtension(): string;

    public function getUrl(): string;

    public function getFileSize(): int;
}
