<?php

namespace PicturePark\API\Model;

class AlphaHandlingAction extends ImageActionBase
{
    /**
     * Specifies the kind of alpha handling to be applied.
     *
     * @var mixed
     */
    protected $alphaHandling;
    /**
     * Specifies potentially needed color information for alpha handling. Must be given in RGB hex format (8 bit per channel).
     *
     * @var string|null
     */
    protected $replacementRgbColorHexCode;
    /**
     * Specifies the kind of alpha handling to be applied.
     *
     * @return mixed
     */
    public function getAlphaHandling()
    {
        return $this->alphaHandling;
    }
    /**
     * Specifies the kind of alpha handling to be applied.
     *
     * @param mixed $alphaHandling
     *
     * @return self
     */
    public function setAlphaHandling($alphaHandling) : self
    {
        $this->alphaHandling = $alphaHandling;
        return $this;
    }
    /**
     * Specifies potentially needed color information for alpha handling. Must be given in RGB hex format (8 bit per channel).
     *
     * @return string|null
     */
    public function getReplacementRgbColorHexCode() : ?string
    {
        return $this->replacementRgbColorHexCode;
    }
    /**
     * Specifies potentially needed color information for alpha handling. Must be given in RGB hex format (8 bit per channel).
     *
     * @param string|null $replacementRgbColorHexCode
     *
     * @return self
     */
    public function setReplacementRgbColorHexCode(?string $replacementRgbColorHexCode) : self
    {
        $this->replacementRgbColorHexCode = $replacementRgbColorHexCode;
        return $this;
    }
}