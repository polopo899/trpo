<?php

ini_set("display_errors", 1);
error_reporting (-1);

require 'core/core/EquationInterface.php';
require 'core/core/LogInterface.php';
require 'core/core/LogAbstract.php';

require 'feofanov/LinearEquation.php';
require 'feofanov/QuadraticEquation.php';
require 'feofanov/MyLog.php';
require 'feofanov/FeofanovException.php';

$equation = new feofanov\QuadraticEquation();
try
{
    feofanov\MyLog::log("Version: " . trim(file_get_contents("version")) . "\n");
    echo "Enter 3 values (a, b, c): \n\r";

    $a = readline("Enter a: \n\r");
    $b = readline("Enter b: \n\r");
    $c = readline("Enter c: \n\r");

    feofanov\MyLog::log("Equation: " .$a."x2+".$b."x+".$c."=0 \n\r");

    $result = $equation->solve($a, $b, $c);

    $str = implode("; ", $result);

    feofanov\MyLog::log("Solution: ".$str."\n\r");
}
catch (feofanov\FeofanovException $exception)
{
    feofanov\MyLog::log($exception->getMessage());
}
feofanov\MyLog::write();