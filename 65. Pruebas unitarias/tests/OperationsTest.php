<?php

use PHPUnit\Framework\TestCase;

class OperationsTest extends TestCase
{

    private $op;

    public function setup(): void
    {
        $this->op = new Operations();
    }

    public function testAddWithTwoValues()
    {
        $this->assertEquals(7, $this->op->add(2, 5));
    }

    public function testAddWithNullValues()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->op->add(NULL, NULL);
    }

    public function testAddWithNoNumericValues()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->op->add('a', 'hello');
    }

    public function testDivideWithTwoValues()
    {
        $this->assertEquals(1, $this->op->divide(5, 5));
    }

    public function testDivideWithNullValues()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->op->divide(NULL, NULL);
    }

    public function testDivideWithNoNumericValues()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->op->divide('a', 'hello');
    }

    public function testDivideBetweenZero()
    {
        $this->expectException(DivisionByZeroError::class);
        $this->op->divide(5, 0);
    }
}
