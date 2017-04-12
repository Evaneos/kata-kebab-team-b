<?php

namespace Kata\Kebab;

class Kebab
{
    private $ingredients;

    public function __construct($ingredients)
    {
        $this->ingredients = $ingredients;
    }

    public function isVegetarian()
    {
        foreach ($this->ingredients as $ingredient) {
            if (!$ingredient->isVegetarian()) {
                return false;
            }
        }

        return true;
    }

    public function isPescaterian()
    {
        foreach ($this->ingredients as $ingredient) {
            if (!$ingredient->isPescaterian()) {
                return false;
            }
        }

        return true;
    }
}