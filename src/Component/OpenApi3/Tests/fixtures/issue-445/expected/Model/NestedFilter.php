<?php

namespace PicturePark\API\Model;

class NestedFilter extends FilterBase
{
    /**
     * The path pointing to the nested document (i.e. personLayer.nestedAddress).
     *
     * @var string
     */
    protected $path;
    /**
     * The filter to be applied on the nested documents.
     *
     * @var mixed
     */
    protected $filter;
    /**
     * The path pointing to the nested document (i.e. personLayer.nestedAddress).
     *
     * @return string
     */
    public function getPath() : string
    {
        return $this->path;
    }
    /**
     * The path pointing to the nested document (i.e. personLayer.nestedAddress).
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path) : self
    {
        $this->path = $path;
        return $this;
    }
    /**
     * The filter to be applied on the nested documents.
     *
     * @return mixed
     */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
     * The filter to be applied on the nested documents.
     *
     * @param mixed $filter
     *
     * @return self
     */
    public function setFilter($filter) : self
    {
        $this->filter = $filter;
        return $this;
    }
}