<?php
namespace App;

class Calculadora
{
    public function suma(int $a, int $b): int
    {
        return $a + $b;
    }

    public function resta(int $a, int $b): int
    {
        return $a - $b;
    }

    public function divideix(float $a, float $b): float
    {
        if ($b == 0.0) {
            throw new \DivisionByZeroError('No es pot dividir per zero');
        }
        return $a / $b;
    }
}