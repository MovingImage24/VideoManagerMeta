<?php

namespace MovingImage\Meta\Interfaces;

interface KeywordInterface
{
    public function getId(): ?int;

    public function getKeyword(): string;
}
