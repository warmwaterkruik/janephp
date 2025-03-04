<?php

namespace PicturePark\API\Model;

class LayerUnassignedCondition extends BusinessRuleCondition
{
    /**
     * Layer id to match on.
     *
     * @var string|null
     */
    protected $layerId;
    /**
     * Layer id to match on.
     *
     * @return string|null
     */
    public function getLayerId() : ?string
    {
        return $this->layerId;
    }
    /**
     * Layer id to match on.
     *
     * @param string|null $layerId
     *
     * @return self
     */
    public function setLayerId(?string $layerId) : self
    {
        $this->layerId = $layerId;
        return $this;
    }
}