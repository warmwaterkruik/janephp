<?php

namespace PicturePark\API\Model;

class ShareDataBase
{
    /**
     * The URL to access the share.
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * The URL to access the share.
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * The URL to access the share.
     *
     * @param string $url
     */
    public function setUrl(string $url)
    {
        $this->url = $url;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     */
    public function setKind(string $kind)
    {
        $this->kind = $kind;
    }
}