<?php

namespace FactorialCalculator;

class FactorialCalculator
{
    public static function calculate($number)
    {
        if ($number < 0) {
            throw new \InvalidArgumentException("Factorial is not defined for negative numbers.");
        }

        if ($number == 0 || $number == 1) {
            return 1;
        }

        return $number * self::calculate($number - 1);
    }
}