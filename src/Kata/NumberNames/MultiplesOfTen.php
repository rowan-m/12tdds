<?php

namespace Kata\NumberNames;

class MultiplesOfTen
{
    private $multiplesOfTen = array(
        2 => 'twenty',
        3 => 'thirty',
        4 => 'forty',
        5 => 'fifty',
        6 => 'sixty',
        7 => 'seventy',
        8 => 'eighty',
        9 => 'ninety',
    );

    public function getWordForNearestMultiple(Integer $integer)
    {
        $quotient = $integer->getQuotientFrom(10);
        return $this->multiplesOfTen[$quotient->getValue()];
    }
}