<?php
namespace Kata\Kebab\Tests;

use Kata\Kebab\HelloWorld;

class HelloWorldTest extends \PHPUnit_Framework_TestCase
{
    /** @var HelloWorld */
    private $sut;

    public function setUp()
    {
        $this->sut = new HelloWorld();
    }

    /**
     * @test
     */
    public function it_says_hello_world()
    {
        $this->assertEquals($this->sut->helloWorld(), 'Hello world');
    }
}