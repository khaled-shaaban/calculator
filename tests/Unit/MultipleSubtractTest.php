<?php

namespace KhaledShaaban\Calculator\Tests;

use KhaledShaaban\Calculator\Facades\Calculator;

class MultipleSubtractTest extends TestCase
{
    public function test_multiple_subtract()
    {
        $result             = Calculator::subtract(5)->subtract(5)->subtract(-5)->getResult();
        $expectedBehaviour  = 0 - 5 - 5 - (-5);

        $this->assertEquals($expectedBehaviour, $result);
    }
}