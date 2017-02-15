<?php

namespace MovingImage\Meta\Interfaces;

/**
 * Interface KeywordInterface.
 *
 * @author Ruben Knol <ruben.knol@movingimage.com>
 */
interface KeywordInterface
{
    /**
     * @return int|null
     */
    public function getId();

    /**
     * @return string
     */
    public function getKeyword();
}
