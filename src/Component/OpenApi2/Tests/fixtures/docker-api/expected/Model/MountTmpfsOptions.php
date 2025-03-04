<?php

namespace Docker\Api\Model;

class MountTmpfsOptions
{
    /**
     * The size for the tmpfs mount in bytes.
     *
     * @var int
     */
    protected $sizeBytes;
    /**
     * The permission mode for the tmpfs mount in an integer.
     *
     * @var int
     */
    protected $mode;
    /**
     * The size for the tmpfs mount in bytes.
     *
     * @return int
     */
    public function getSizeBytes() : int
    {
        return $this->sizeBytes;
    }
    /**
     * The size for the tmpfs mount in bytes.
     *
     * @param int $sizeBytes
     *
     * @return self
     */
    public function setSizeBytes(int $sizeBytes) : self
    {
        $this->sizeBytes = $sizeBytes;
        return $this;
    }
    /**
     * The permission mode for the tmpfs mount in an integer.
     *
     * @return int
     */
    public function getMode() : int
    {
        return $this->mode;
    }
    /**
     * The permission mode for the tmpfs mount in an integer.
     *
     * @param int $mode
     *
     * @return self
     */
    public function setMode(int $mode) : self
    {
        $this->mode = $mode;
        return $this;
    }
}