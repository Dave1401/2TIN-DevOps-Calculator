<?php
use PHPUnit\Framework\TestCase;

final class CalculatorTest extends TestCase
{
    public function testCanBeCreatedFromConstructor(): void{
        $calc =  new Calculator();
        $this->assertInstanceOf(Calculator::Class, $calc);
    }

    public function testAddNumbers(): void{
        $calc = new Calculator();
        $this->assertEquals(55, $calc->add(3,2));
    }

}
