<?php

namespace MovingImage\Meta\Enums;

class PublicationState implements EnumInterface
{
    public const PUBLISHED = 'published';
    public const NOT_PUBLISHED = 'not_published';
    public const ALL = 'all';

    public static function getValues(): array
    {
        return [
            self::PUBLISHED,
            self::NOT_PUBLISHED,
            self::ALL,
        ];
    }
}
