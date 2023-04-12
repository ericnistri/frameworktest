<?php

declare(strict_types=1);

class HelloWorldTest extends PHPUnit\Framework\TestCase
{
    public static function setUpBeforeClass(): void
    {
        require_once '../src/HelloWorld.php';
    }

    // public function testHelloWorld1(): void
    // {
            
    //     $this->assertEquals('Hello, World!', HW::helloWorld());
    // }

    public function testHelloWorld2(): void{
        $a = new HW();
        $b = $a->helloWorld();
            
        $this->assertEquals('Hello, World!', $b);
    }
}