<?php

namespace MovingImage\Meta\Interfaces;

interface CustomMetaDataInterface
{
    public function getKey(): string;

    public function getValue(): string;
}
