<?php

namespace Kata\Kebab;

class Ingredient
{
    private $isVegetarian;

    private $isPescaterian;

    public function __construct($isVegetarian = false, $isPescaterian = false)
    {
        $this->isVegetarian = $isVegetarian;
        $this->isPescaterian = $isPescaterian;
    }

    public function isVegetarian()
    {
        return $this->isVegetarian;
    }

    public function isPescaterian()
    {
        return $this->isPescaterian;
    }
}