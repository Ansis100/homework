<?php

namespace App\Evaluators;

/**
 * Evaluates whether digit is equal to 0
 */
class ZeroNumberEvaluator implements NumberEvaluatorInterface
{
    public function evaluate(int $digit): bool
    {
        return $digit === 0;
    }
}