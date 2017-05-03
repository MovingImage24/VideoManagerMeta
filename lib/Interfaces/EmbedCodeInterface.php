<?php

namespace MovingImage\Meta\Interfaces;

/**
 * Common interface that all Video Manager API clients have to
 * implement to normalise the EmbedCode objects they create.
 *
 * @author Ruben Knol <ruben.knol@movingimage.com>
 */
interface EmbedCodeInterface
{
    /**
     * @return string
     */
    public function getCode();
}
