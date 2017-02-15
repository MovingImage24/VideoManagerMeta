<?php

namespace MovingImage\Meta\Interfaces;

interface CustomMetaDataInterface
{
    /**
     * @return string
     */
    public function getKey();

    /**
     * @return string
     */
    public function getValue();
}
