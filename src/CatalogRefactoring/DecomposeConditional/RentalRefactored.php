<?php

namespace App\CatalogRefactoring\DecomposeConditional;

/**
 * Decompose Conditional
 * Uma das fontes mais comuns de complexidade em um programa é a lógica condicional complexa.O problema geralmente reside no
 * fato de que o código, tanto nas verificações de condições quanto nas ações, me diz o que acontece,
 * mas pode facilmente obscurecer o motivo pelo qual isso acontece
 * 
 * Passos:
 * 1- Aplique a ExtractFunction na condição e em cada condicional
 * 
 * 
 */
class RentalRefactored
{

    const SUMMER_START = "2024-12-22";
    const SUMMER_END = "2025-03-20";
    const SUMMER_RATE = 200;
    const REGULAR_RATE = 120;
    public function charge($rental)
    {
        return $this->isSummer($rental['date']) ? $this->summerCharge($rental['quantity']) : $this->regularCharge($rental['quantity']);
    }
    private function isSummer($date)
    {
        return  $date >= self::SUMMER_START && $date <= self::SUMMER_END;
    }
    private function summerCharge(int $quantity)
    {
        $quantity * self::SUMMER_RATE;
    }
    private function regularCharge(int $quantity)
    {
        return $quantity * self::REGULAR_RATE;
    }
}
