<?php

namespace MovingImage\Meta\Interfaces;

use DateTime;

interface VideoInterface
{
    public const STATUS_NOT_PUBLISHED = 0;
    public const STATUS_PUBLISHED = 1;
    public const STATUS_LOCKED = 2;
    public const STATUS_GEOPROTECTED = 3;

    public function getId(): string;

    public function getTitle(): ?string;

    public function getDescription(): ?string;

    public function getThumbnail(): ?string;

    public function getLength(): ?int;

    public function getCreatedDate(): DateTime;

    public function getModifiedDate(): ?DateTime;

    public function getUploadDate(): ?DateTime;

    /**
     * @return CustomMetaDataInterface[]
     */
    public function getCustomMetadata(): ?array;

    /**
     * @return KeywordInterface[]
     */
    public function getKeywords(): array;

    /**
     * @return StillInterface[]
     */
    public function getStills(): array;

    public function getStatus(): int;

    public function getGeneration(): ?int;

    public function getPlays(): ?int;

    public function getViews(): ?int;

    public function isPublished(): ?bool;

    public function isDownloadable(): ?bool;

    public function isAudioOnly(): bool;
}
