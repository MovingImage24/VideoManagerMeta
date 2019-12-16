<?php

namespace MovingImage\Meta\Interfaces;

/**
 * Common interface that all Video Manager API clients have to
 * implement to normalise the EmbedCode objects they create.
 */
interface EmbedCodeInterface
{
    public function getCode(): string;
}
