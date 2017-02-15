<?php

namespace MovingImage\Meta\Interfaces;

/**
 * Common interface that all Video Manager API clients have to
 * implement to normalise the Video objects they create.
 *
 * @author Ruben Knol <ruben.knol@movingimage.com>
 */
interface VideoInterface
{
    const STATUS_NOT_PUBLISHED = 0;
    const STATUS_PUBLISHED = 1;
    const STATUS_LOCKED = 2;
    const STATUS_GEOPROTECTED = 3;

    /**
     * @return string
     */
    public function getId();

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @return string
     */
    public function getThumbnail();

    /**
     * @return int
     */
    public function getLength();

    /**
     * @return \DateTime
     */
    public function getCreatedDate();

    /**
     * @return \DateTime
     */
    public function getModifiedDate();

    /**
     * @return \DateTime
     */
    public function getUploadDate();

    /**
     * @return CustomMetaDataInterface[]
     */
    public function getCustomMetadata();

    /**
     * @return KeywordInterface[]
     */
    public function getKeywords();

    /**
     * @return StillInterface[]
     */
    public function getStills();

    /**
     * @return int
     */
    public function getStatus();

    /**
     * @return bool
     */
    public function isPublished();
}
