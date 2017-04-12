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
        $kebab = new Kebab([new Ingredient(true, false)]);
        $this->assertEquals($kebab->isVegetarian(), true);
    }

    /**
     * @test
     */
    public function it_not_should_be_vegetarian()
    {
        $kebab = new Kebab([new Ingredient(false, false)]);
        $this->assertEquals($kebab->isVegetarian(), false);
    }

    /**
     * @test
     */
    public function it_should_be_pescaterian()
    {
        $kebab = new Kebab([new Ingredient(true, true)]);
        $this->assertEquals($kebab->isPescaterian(), true);
    }

    /**
     * @test
     */
    public function it_not_should_be_pescaterian()
    {
        $kebab = new Kebab([new Ingredient(false, false)]);
        $this->assertEquals($kebab->isPescaterian(), false);
    }
}