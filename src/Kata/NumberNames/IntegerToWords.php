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
        if ($word = $this->uniqueNames->getWordFor($integer)) {
            return $word;
        }

        $word = $this->multiplesOfTen->getWordForNearestMultiple($integer);

        $remainder = $integer->getRemainderFrom(10);

        if ($remainder->getValue() > 0) {
            $word .= '-' . $this->uniqueNames->getWordFor($remainder);
        }

        return $word;
    }
}
