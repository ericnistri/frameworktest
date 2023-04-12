<?php

// namespace Test;

// Strict types ist für die strikte einhaltung der int / float / string
// sobald ein anderer Wert mitgegeben wird, wirft es eine Error Message
// wenn aber die Funktion, die StrictTypes beinhaltet in einer anderen Funktion
// aufgerufen wird, so ignoriert die aufrufende Funktion die ScrictTypes
declare(strict_types=1);

use Main\Calculate;

class Testing extends PHPUnit\Framework\TestCase
{
    public static function setUpBeforeClass(): void
    {
        require_once '../src/calculate.php';
    }

    // public function testIsEmpty(): void {

    // }

    // public function testPlus(): void
    // {
    //     $a = new Calculate(20);
    //     $this->assertSame(1020, $a->plus());
    // }
    
    // public function testMinus(): void
    // {
    //     $a = new Calculate();
    //     $this->assertEquals(980, $a->minus(20));
    // }

    // public function testString(): void {

    //     $expected = "testing";
    //     $actual = new Calculate();
    //     $a = $actual->getString("testing");

    //     $this->assertEquals($expected, $a);
    // }

    public function testFailure(): void
    {
        $this->assertEquals(1, 0);
    }

    public function testFailure2(): void
    {
        $this->assertEquals('bar', 'baz');
    }

    public function testFailure3(): void
    {
        $this->assertEquals("foo\nbar\nbaz\n", "foo\nbah\nbaz\n");
    }
}