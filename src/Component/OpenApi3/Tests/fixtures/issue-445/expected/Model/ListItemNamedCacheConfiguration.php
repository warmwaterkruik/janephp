<?php

namespace PicturePark\API\Model;

class ListItemNamedCacheConfiguration extends NamedCacheConfigurationBase
{
    /**
     * ID of the schema to cache (should have SchemaType = List)
     *
     * @var string|null
     */
    protected $schemaId;
    /**
     * List of IDs of fields to use as a composite key
     *
     * @var string[]|null
     */
    protected $keyFields;
    /**
     * An optional filter to narrow down the cached list items
     *
     * @var mixed|null
     */
    protected $filter;
    /**
     * Include child schemas when caching list items
     *
     * @var bool
     */
    protected $includeAllSchemaChildren;
    /**
     * ID of the schema to cache (should have SchemaType = List)
     *
     * @return string|null
     */
    public function getSchemaId() : ?string
    {
        return $this->schemaId;
    }
    /**
     * ID of the schema to cache (should have SchemaType = List)
     *
     * @param string|null $schemaId
     *
     * @return self
     */
    public function setSchemaId(?string $schemaId) : self
    {
        $this->schemaId = $schemaId;
        return $this;
    }
    /**
     * List of IDs of fields to use as a composite key
     *
     * @return string[]|null
     */
    public function getKeyFields() : ?array
    {
        return $this->keyFields;
    }
    /**
     * List of IDs of fields to use as a composite key
     *
     * @param string[]|null $keyFields
     *
     * @return self
     */
    public function setKeyFields(?array $keyFields) : self
    {
        $this->keyFields = $keyFields;
        return $this;
    }
    /**
     * An optional filter to narrow down the cached list items
     *
     * @return mixed
     */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
     * An optional filter to narrow down the cached list items
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
    /**
     * Include child schemas when caching list items
     *
     * @return bool
     */
    public function getIncludeAllSchemaChildren() : bool
    {
        return $this->includeAllSchemaChildren;
    }
    /**
     * Include child schemas when caching list items
     *
     * @param bool $includeAllSchemaChildren
     *
     * @return self
     */
    public function setIncludeAllSchemaChildren(bool $includeAllSchemaChildren) : self
    {
        $this->includeAllSchemaChildren = $includeAllSchemaChildren;
        return $this;
    }
}