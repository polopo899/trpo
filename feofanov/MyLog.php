<?php

namespace feofanov;

use core\LogAbstract;
use core\LogInterface;

class MyLog extends LogAbstract implements LogInterface
{
    public function _write()
    {
        foreach ($this->log as $solution)
        {
            echo $solution;
        }
    }
    public static function log($str)
    {
        array_push(MyLog::Instance()->log, $str);
    }

    public static function write()
    {
        MyLog::Instance()->_write();
    }
}