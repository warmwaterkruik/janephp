<?php

namespace PicturePark\API\Model;

class FieldSingleFieldset extends FieldBase
{
    /**
     * The ID of the schema to be used as fieldset (it must be of type Struct).
     *
     * @var string
     */
    protected $schemaId;
    /**
     * Indexing information of fields of the related schema identified by the SchemaId property
     *
     * @var mixed|null
     */
    protected $schemaIndexingInfo;
    /**
     * The ID of the schema to be used as fieldset (it must be of type Struct).
     *
     * @return string
     */
    public function getSchemaId() : string
    {
        return $this->schemaId;
    }
    /**
     * The ID of the schema to be used as fieldset (it must be of type Struct).
     *
     * @param string $schemaId
     *
     * @return self
     */
    public function setSchemaId(string $schemaId) : self
    {
        $this->schemaId = $schemaId;
        return $this;
    }
    /**
     * Indexing information of fields of the related schema identified by the SchemaId property
     *
     * @return mixed
     */
    public function getSchemaIndexingInfo()
    {
        return $this->schemaIndexingInfo;
    }
    /**
     * Indexing information of fields of the related schema identified by the SchemaId property
     *
     * @param mixed $schemaIndexingInfo
     *
     * @return self
     */
    public function setSchemaIndexingInfo($schemaIndexingInfo) : self
    {
        $this->schemaIndexingInfo = $schemaIndexingInfo;
        return $this;
    }
}