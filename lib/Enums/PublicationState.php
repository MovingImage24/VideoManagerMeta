<?php

namespace MovingImage\Meta\Enums;

/**
 * Defines possible values for the publication_state property
 */
class PublicationState implements EnumInterface
{
    const PUBLISHED = 'published';
    const NOT_PUBLISHED = 'not_published';
    const ALL = 'all';

    /**
     * {@inheritdoc}
     */
    public static function getValues()
    {
        return [
            self::PUBLISHED,
            self::NOT_PUBLISHED,
            self::ALL,
        ];
    }
}
