<?php

namespace Kata\Kebab;

class Ingredient
{
    private $isVegetarian;

    private $isPescatarian;

    public function __construct($isVegetarian = false, $isPescatarian = false)
    {
        $this->isVegetarian = $isVegetarian;
        $this->isPescatarian = $isPescatarian;
    }

    public function isVegetarian()
    {
        return $this->isVegetarian;
    }

    public function isPescatarian()
    {
        return $this->isPescatarian;
    }
}