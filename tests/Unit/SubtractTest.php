<?php

namespace KhaledShaaban\Calculator\Tests;

use KhaledShaaban\Calculator\Facades\Calculator;

class SubtractTest extends TestCase
{
    public function test_subtract()
    {
        $result             = Calculator::subtract(5)->getResult();
        $expectedBehaviour  = 0 - 5;

        $this->assertEquals($expectedBehaviour, $result);
    }
}