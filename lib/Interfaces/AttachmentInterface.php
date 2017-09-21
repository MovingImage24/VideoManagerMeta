<?php

namespace MovingImage\Meta\Interfaces;

/**
 * Interface AttachmentInterface.
 */
interface AttachmentInterface
{
    /**
     * @return string
     */
    public function getId();

    /**
     * @return string
     */
    public function getFileName();

    /**
     * @return string
     */
    public function getDownloadUrl();

    /**
     * @return int
     */
    public function getFileSize();
}
