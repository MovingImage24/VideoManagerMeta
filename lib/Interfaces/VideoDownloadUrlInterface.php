<?php

namespace MovingImage\Meta\Interfaces;

/**
 * Interface VideoDownloadUrl.
 */
interface VideoDownloadUrlInterface
{
    /**
     * @return string
     */
    public function getQuality();

    /**
     * @return string
     */
    public function getProfileKey();

    /**
     * @return string
     */
    public function getFileExtension();

    /**
     * @return string
     */
    public function getUrl();

    /**
     * @return int
     */
    public function getFileSize();
}
