<?php

namespace Tests\Unit;

use App\Services\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function test_add()
    {
        $calc = new Calculator();
        $this->assertEquals(10, $calc->add(5,5));
    }

    public function test_divide_zero()
    {
        $this->expectException(\Exception::class);

        $calc = new Calculator();
        $calc->div(10,0);
    }
}