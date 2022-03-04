<?php

namespace KhaledShaaban\Calculator\Tests;

use KhaledShaaban\Calculator\Facades\Calculator;

class TestAdd extends TestCase
{

    public function test_add()
    {
        $result             = Calculator::add(4)->getResult();
        $expectedBehaviour  = 0 + 4;

        $this->assertEquals($expectedBehaviour, $result);
    }
}