<?php

namespace MovingImage\Meta\Interfaces;

/**
 * Interface StillInterface.
 *
 * @author Ruben Knol <ruben.knol@movingimage.com>
 */
interface StillInterface
{
    /**
     * @return string
     */
    public function getQuality();

    /**
     * @return string
     */
    public function getUrl();

    /**
     * @return DimensionsInterface
     */
    public function getDimensions();
}
