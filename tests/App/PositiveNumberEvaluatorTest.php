<?php

namespace App;

use App\Evaluators\PositiveNumberEvaluator;
use PHPUnit\Framework\TestCase;

class PositiveNumberEvaluatorTest extends TestCase
{
  public function testEvaluate()
  {
    $evaluator = new PositiveNumberEvaluator();
    $this->assertTrue($evaluator->evaluate(2));
    $this->assertTrue($evaluator->evaluate(16));
    $this->assertFalse($evaluator->evaluate(-1));
    $this->assertFalse($evaluator->evaluate(0));
  }
}
