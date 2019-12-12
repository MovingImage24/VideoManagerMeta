<?php

namespace MovingImage\Meta\Enums;

interface EnumInterface
{
    /**
     * Returns all the possible values for this enum.
     */
    public static function getValues(): array;
}
