<?php

namespace MovingImage\Meta\Interfaces;

interface AttachmentInterface
{
    public function getId(): string;

    public function getFileName(): string;

    public function getDownloadUrl(): string;

    public function getFileSize(): int;
}
