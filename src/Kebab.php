<?php

namespace Kata\Kebab;

class Kebab
{
    public $vegeIngredients = [];
    public $nonVegeIngredients = [];

    public function setVegeIngredients(array $ingredients)
    {
        $this->vegeIngredients = $ingredients;
    }

    public function setNonVegeIngredients(array $ingredients)
    {
        $this->nonVegeIngredients = $ingredients;
    }

    public function isVegetarian()
    {
        return empty($this->nonVegeIngredients);
    }
}