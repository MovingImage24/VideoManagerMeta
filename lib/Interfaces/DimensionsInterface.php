<?php

namespace MovingImage\Meta\Interfaces;

/**
 * Interface DimensionsInterface.
 *
 * @author Ruben Knol <ruben.knol@movingimage.com>
 */
interface DimensionsInterface
{
    /**
     * @return int
     */
    public function getHeight();

    /**
     * @return int
     */
    public function getWidth();
}
