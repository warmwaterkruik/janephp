<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CatInSnakeCase extends Pet
{
    /**
     * The measured skill for hunting
     *
     * @var string
     */
    protected $huntingSkill = 'lazy';
    /**
     * The measured skill for hunting
     *
     * @return string
     */
    public function getHuntingSkill() : string
    {
        return $this->huntingSkill;
    }
    /**
     * The measured skill for hunting
     *
     * @param string $huntingSkill
     *
     * @return self
     */
    public function setHuntingSkill(string $huntingSkill) : self
    {
        $this->huntingSkill = $huntingSkill;
        return $this;
    }
}