<?php

namespace PicturePark\API\Model;

class DateRangeAggregator extends AggregatorBase
{
    /**
     * The field's ID to execute the aggregation on.
     *
     * @var string
     */
    protected $field;
    /**
     * A list of date time ranges.
     *
     * @var DateRangeForAggregator[]
     */
    protected $ranges;
    /**
     * The field's ID to execute the aggregation on.
     *
     * @return string
     */
    public function getField() : string
    {
        return $this->field;
    }
    /**
     * The field's ID to execute the aggregation on.
     *
     * @param string $field
     *
     * @return self
     */
    public function setField(string $field) : self
    {
        $this->field = $field;
        return $this;
    }
    /**
     * A list of date time ranges.
     *
     * @return DateRangeForAggregator[]
     */
    public function getRanges() : array
    {
        return $this->ranges;
    }
    /**
     * A list of date time ranges.
     *
     * @param DateRangeForAggregator[] $ranges
     *
     * @return self
     */
    public function setRanges(array $ranges) : self
    {
        $this->ranges = $ranges;
        return $this;
    }
}