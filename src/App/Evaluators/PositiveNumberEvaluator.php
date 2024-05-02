<?php

namespace App\Evaluators;

/**
 * Evaluates whether digit is positive
 */
class PositiveNumberEvaluator implements NumberEvaluatorInterface
{
    public function evaluate(int $digit): bool
    {
        return $digit > 0;
    }
}