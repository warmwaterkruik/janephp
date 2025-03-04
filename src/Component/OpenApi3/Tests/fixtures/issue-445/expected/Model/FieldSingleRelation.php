<?php

namespace PicturePark\API\Model;

class FieldSingleRelation extends FieldBase
{
    /**
     * The ID of the schema used for relation metadata (it must be of type Struct, and it cannot be a system schema).
     *
     * @var string
     */
    protected $schemaId;
    /**
     * Indexing information of fields of the related schema identified by the SchemaId property.
     *
     * @var mixed|null
     */
    protected $schemaIndexingInfo;
    /**
     * Defines the allowed elation types.
     *
     * @var RelationType[]
     */
    protected $relationTypes;
    /**
     * The ID of the schema used for relation metadata (it must be of type Struct, and it cannot be a system schema).
     *
     * @return string
     */
    public function getSchemaId() : string
    {
        return $this->schemaId;
    }
    /**
     * The ID of the schema used for relation metadata (it must be of type Struct, and it cannot be a system schema).
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
     * Indexing information of fields of the related schema identified by the SchemaId property.
     *
     * @return mixed
     */
    public function getSchemaIndexingInfo()
    {
        return $this->schemaIndexingInfo;
    }
    /**
     * Indexing information of fields of the related schema identified by the SchemaId property.
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
    /**
     * Defines the allowed elation types.
     *
     * @return RelationType[]
     */
    public function getRelationTypes() : array
    {
        return $this->relationTypes;
    }
    /**
     * Defines the allowed elation types.
     *
     * @param RelationType[] $relationTypes
     *
     * @return self
     */
    public function setRelationTypes(array $relationTypes) : self
    {
        $this->relationTypes = $relationTypes;
        return $this;
    }
}