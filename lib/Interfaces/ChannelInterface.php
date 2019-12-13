<?php

namespace MovingImage\Meta\Interfaces;

interface ChannelInterface
{
    public function getId(): int;

    public function getName(): string;

    public function getDescription(): string;

    public function getCustomMetadata(): array;

    public function getParent(): ?self;

    /**
     * @return ChannelInterface[]
     */
    public function getChildren(): array;
}
