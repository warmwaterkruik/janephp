<?php

namespace PicturePark\API\Model;

class OriginalFormat extends FormatBase
{
    /**
     * 
     *
     * @var string|null
     */
    protected $extension;
    /**
     * 
     *
     * @return string|null
     */
    public function getExtension() : ?string
    {
        return $this->extension;
    }
    /**
     * 
     *
     * @param string|null $extension
     *
     * @return self
     */
    public function setExtension(?string $extension) : self
    {
        $this->extension = $extension;
        return $this;
    }
}