<?php

namespace Kata\NumberNames;

class IntegerToWords
{
    private $uniqueNames = array(
        0 => 'zero',
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five',
        6 => 'six',
        7 => 'seven',
        8 => 'eight',
        9 => 'nine',
        10 => 'ten',
        11 => 'eleven',
        12 => 'twelve',
        13 => 'thirteen',
        14 => 'fourteen',
        15 => 'fifteen',
        16 => 'sixteen',
        17 => 'seventeen',
        18 => 'eighteen',
        19 => 'nineteen',
    );

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

    public function convert(Integer $integer)
    {
        if ($integer->getValue() < 20) {
            return $this->uniqueNames[$integer->getValue()];
        }

        $quotient = floor($integer->getValue() / 10);
        $word = $this->multiplesOfTen[$quotient];
        $remainder = $integer->getValue() % 10;

        if ($remainder > 0) {
            $word .= '-' . $this->uniqueNames[$remainder];
        }

        return $word;
    }
}
