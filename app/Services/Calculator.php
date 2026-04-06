<?php

namespace App\Services;

class Calculator
{
    public function add($a, $b)
    {
        return $a + $b;
    }

    public function sub($a, $b)
    {
        return $a - $b;
    }

    public function mul($a, $b)
    {
        return $a * $b;
    }

    public function div($a, $b)
    {
        if ($b == 0) {
            throw new \Exception("Tidak bisa dibagi 0");
        }
        return $a / $b;
    }
}