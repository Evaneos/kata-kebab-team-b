<?php
namespace Kata\Kebab\Tests;

use Kata\Kebab\Kebab;

class KebabTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_should_be_vegetarian()
    {
        $ingredientsVege = [
            'salade',
            'tomate'
        ];
        
        $kebab = new Kebab();
        $kebab->setVegeIngredients($ingredientsVege);
        $this->assertEquals($kebab->isVegetarian(), true);
    }

    public function it_not_should_be_vegetarian()
    {
        $ingredientsNonVege = [
            'poulet'
        ];

        $kebab = new Kebab();
        $kebab->setNonVegeIngredients($ingredientsNonVege);
        $this->assertEquals($kebab->isVegetarian(), false);
    }
}