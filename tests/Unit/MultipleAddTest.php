<?php

namespace KhaledShaaban\Calculator\Tests;

use KhaledShaaban\Calculator\Facades\Calculator;

class TestMultipleAdd extends TestCase
{

    public function test_multiple_add()
    {
        $result             = Calculator::add(4)->add(10)->add(10)->getResult();
        $expectedBehaviour  = 0 + 4 + 10 + 10;

        $this->assertEquals($expectedBehaviour, $result);
    }
}