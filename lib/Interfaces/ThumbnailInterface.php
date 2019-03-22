<?php

namespace MovingImage\Meta\Interfaces;

interface ThumbnailInterface
{
    /**
     * @return int|null
     */
    public function getId();

    /**
     * @return string|null
     */
    public function getUrl();
}