<?php

class Math
{
    static function addTwo($a, $b)
    {
        return $a + $b;
    }
    static function factorial($c)
    {
        $factorial = 1;
        for ($x = $c; $x >= 1; $x--) {
            $factorial = $factorial * $x;
        }
        return "Factorial of $c is $factorial<br>";
    }
    static function sum($ernests)
    {
        $sum = 0;
        foreach ($ernests as $i) {
            $sum = $sum + $i;
        }
        return $sum;
    }
    static function average($avg)
    {
        $summ = 0;
        foreach ($avg as $j) {
            $summ = $summ + $j;
        }
        $avg = $summ / count($avg);

        return $avg;
    }
    static function max($max)
    {
        return max($max);
    }
}
