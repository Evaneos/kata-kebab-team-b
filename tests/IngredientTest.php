<?php
namespace Kata\Kebab\Tests;

use Kata\Kebab\Ingredient;

class IngredientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_should_be_vegetarian()
    {
        $ingredient = new Ingredient('salade', true);
        $this->assertEquals($ingredient->isVegetarian(), true);
    }

}