<?php

namespace MovingImage\Meta\Interfaces;

interface ChannelInterface
{
    public function getId(): int;

    public function setId(int $id): self;

    public function getName(): string;

    public function setName(string $name): self;

    public function getDescription(): string;

    public function setDescription(string $description): self;

    public function getCustomMetadata(): array;

    public function setCustomMetadata(array $customMetadata): self;

    public function getParent(): self;

    public function setParent(self $parent): self;

    /**
     * @return ChannelInterface[]
     */
    public function getChildren(): array;

    public function addChild(self $child): self;

    public function removeChild(self $child): self;
}
