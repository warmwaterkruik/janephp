<?php

namespace PicturePark\API\Model;

class PathHierarchyAnalyzer extends AnalyzerBase
{
    /**
     * The analyzer type: PathHierarchy
     *
     * @var mixed
     */
    protected $type;
    /**
     * The suffix for the analyzed field: pathhierarchy.
     *
     * @var string|null
     */
    protected $fieldSuffix;
    /**
     * The analyzer type: PathHierarchy
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * The analyzer type: PathHierarchy
     *
     * @param mixed $type
     *
     * @return self
     */
    public function setType($type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * The suffix for the analyzed field: pathhierarchy.
     *
     * @return string|null
     */
    public function getFieldSuffix() : ?string
    {
        return $this->fieldSuffix;
    }
    /**
     * The suffix for the analyzed field: pathhierarchy.
     *
     * @param string|null $fieldSuffix
     *
     * @return self
     */
    public function setFieldSuffix(?string $fieldSuffix) : self
    {
        $this->fieldSuffix = $fieldSuffix;
        return $this;
    }
}