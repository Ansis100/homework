<?php
namespace App\Evaluators;

use App\FileLogger;

$logger = new FileLogger('../application.log');

/**
 * Evaluates a number depending on the selected evaluator type
 */
class NumberEvaluator
{
  private $logger;

  public function __construct()
  {
    $this->logger = new FileLogger('../application.log');
  }

  public function evaluate(int $digit, string $type): string
  {
    switch ($type) {
      case 'even':
        $evaluator = new EvenNumberEvaluator();
        return $evaluator->evaluate($digit)
          ? sprintf('%d is even', $digit)
          : sprintf('%d is odd', $digit);

      case 'positive':
        $evaluator = new PositiveNumberEvaluator();
        return $evaluator->evaluate($digit)
          ? sprintf('%d is positive', $digit)
          : sprintf('%d is not positive', $digit);
        ;

      case 'zero':
        $evaluator = new ZeroNumberEvaluator();
        return $evaluator->evaluate($digit)
          ? sprintf('%d is zero', $digit)
          : sprintf('%d is not zero', $digit);
        ;

      default:
        $this->logger->log('Invalid evaluator type provided', 'error');
        exit(1);
    }
  }
}