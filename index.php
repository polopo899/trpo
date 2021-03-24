<?php

ini_set("display_errors", 1);
error_reporting (-1);

require 'core/EquationInterface.php';
require 'core/LogInterface.php';
require 'core/LogAbstract.php';

require 'feofanov/LinearEquation.php';
require 'feofanov/QuadraticEquation.php';
require 'feofanov/MyLog.php';

$equation = new feofanov\QuadraticEquation();
try
{
    $result = $equation->solve(5, 10, 3);
    $str = implode("; ", $result);
    feofanov\MyLog::log($str);
}
catch (Exception $exception)
{
    feofanov\MyLog::log($exception->getMessage());
}

feofanov\MyLog::write();