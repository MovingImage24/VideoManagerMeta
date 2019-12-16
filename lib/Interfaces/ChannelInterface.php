<?php

namespace MovingImage\Meta\Interfaces;

use Doctrine\Common\Collections\ArrayCollection;

interface ChannelInterface
{
    public function getId(): int;

    public function getName(): string;

    public function getDescription(): string;

    public function getCustomMetadata(): array;

    public function getParent(): ?self;

    /**
     * @return ArrayCollection<ChannelInterface>
     */
    public function getChildren(): ArrayCollection;
}
