<?php

namespace MovingImage\Meta\Interfaces;

interface ThumbnailInterface
{
    public function getId(): ?int;

    public function getUrl(): ?string;
}