<?php

use App\FileLogger;
use App\Evaluators\NumberEvaluator;

require_once '../vendor/autoload.php';

$logger = new FileLogger('../application.log');
if (!isset($_GET['number'])) {
  $logger->log('Number is not provided', 'error');
  exit(1);
}

if (!isset($_GET['type'])) {
  $logger->log('Evalutor type is not provided', 'error');
  exit(1);
}

$digit = $_GET['number'];
$evaluatorType = $_GET['type'];

$numberEvaluator = new NumberEvaluator();
$message = $numberEvaluator->evaluate($digit, $evaluatorType);
$logger->log($message, 'info');