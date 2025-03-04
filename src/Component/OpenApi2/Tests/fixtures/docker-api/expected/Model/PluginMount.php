<?php

namespace Docker\Api\Model;

class PluginMount
{
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var string[]
     */
    protected $settable;
    /**
     * 
     *
     * @var string
     */
    protected $source;
    /**
     * 
     *
     * @var string
     */
    protected $destination;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var string[]
     */
    protected $options;
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getSettable() : array
    {
        return $this->settable;
    }
    /**
     * 
     *
     * @param string[] $settable
     *
     * @return self
     */
    public function setSettable(array $settable) : self
    {
        $this->settable = $settable;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSource() : string
    {
        return $this->source;
    }
    /**
     * 
     *
     * @param string $source
     *
     * @return self
     */
    public function setSource(string $source) : self
    {
        $this->source = $source;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDestination() : string
    {
        return $this->destination;
    }
    /**
     * 
     *
     * @param string $destination
     *
     * @return self
     */
    public function setDestination(string $destination) : self
    {
        $this->destination = $destination;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getOptions() : array
    {
        return $this->options;
    }
    /**
     * 
     *
     * @param string[] $options
     *
     * @return self
     */
    public function setOptions(array $options) : self
    {
        $this->options = $options;
        return $this;
    }
}