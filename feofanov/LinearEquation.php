<?php

namespace feofanov;

class LinearEquation
{
    public function LinearEquation($a, $b)
    {
        if ($a == 0) {
            throw new \Exception("Equation hasn't solutions.");
        }

        return $this->x = [($b * (-1) / $a)];
    }

    protected $x;
}