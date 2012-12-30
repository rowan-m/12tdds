<?php

namespace Kata\NumberNames;

class IntegerToWords
{
    private $uniqueNames;
    private $multiplesOfTen;

    public function __construct(UniqueNames $names, MultiplesOfTen $multiples)
    {
        $this->uniqueNames = $names;
        $this->multiplesOfTen = $multiples;
    }

    public function convert(Integer $integer)
    {
        $word = '';
        $hundreds = $integer->getQuotientFrom(100);

        if ($hundreds->getValue() > 0) {
            $word .= $this->uniqueNames->getWordFor($hundreds) . ' hundred';
        }

        $remainder = $integer->getRemainderFrom(100);

        if ($remainder->getValue() === 0 && $integer->getValue() !== 0) {
            return $word;
        }

        if ($word !== '') {
            $word .= ' and ';
            $integer = $remainder;
        }

        if ($uniqueName = $this->uniqueNames->getWordFor($integer)) {
            return $word . $uniqueName;
        }

        $word .= $this->multiplesOfTen->getWordForNearestMultiple($integer);

        $remainder = $integer->getRemainderFrom(10);

        if ($remainder->getValue() > 0) {
            $word .= '-' . $this->uniqueNames->getWordFor($remainder);
        }

        return $word;
    }
}
