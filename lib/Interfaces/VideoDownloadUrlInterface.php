<?php

namespace MovingImage\Meta\Interfaces;

/**
 * Interface VideoDownloadUrl.
 */
class VideoDownloadUrlInterface
{
    /**
     * @return string
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * @return string
     */
    public function getProfileKey()
    {
        return $this->profileKey;
    }

    /**
     * @return string
     */
    public function getFileExtension()
    {
        return $this->fileExtension;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return int
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }
}
