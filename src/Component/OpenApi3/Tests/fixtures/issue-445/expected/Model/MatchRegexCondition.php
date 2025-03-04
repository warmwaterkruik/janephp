<?php

namespace PicturePark\API\Model;

class MatchRegexCondition extends BusinessRuleCondition
{
    /**
     * JSON path to the field
     *
     * @var string|null
     */
    protected $fieldPath;
    /**
     * Regular expression
     *
     * @var string|null
     */
    protected $regex;
    /**
     * Optional variable name to store the matched regex groups in
     *
     * @var string|null
     */
    protected $storeIn;
    /**
     * JSON path to the field
     *
     * @return string|null
     */
    public function getFieldPath() : ?string
    {
        return $this->fieldPath;
    }
    /**
     * JSON path to the field
     *
     * @param string|null $fieldPath
     *
     * @return self
     */
    public function setFieldPath(?string $fieldPath) : self
    {
        $this->fieldPath = $fieldPath;
        return $this;
    }
    /**
     * Regular expression
     *
     * @return string|null
     */
    public function getRegex() : ?string
    {
        return $this->regex;
    }
    /**
     * Regular expression
     *
     * @param string|null $regex
     *
     * @return self
     */
    public function setRegex(?string $regex) : self
    {
        $this->regex = $regex;
        return $this;
    }
    /**
     * Optional variable name to store the matched regex groups in
     *
     * @return string|null
     */
    public function getStoreIn() : ?string
    {
        return $this->storeIn;
    }
    /**
     * Optional variable name to store the matched regex groups in
     *
     * @param string|null $storeIn
     *
     * @return self
     */
    public function setStoreIn(?string $storeIn) : self
    {
        $this->storeIn = $storeIn;
        return $this;
    }
}