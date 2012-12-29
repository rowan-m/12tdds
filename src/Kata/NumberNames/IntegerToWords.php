<?php

namespace Kata\NumberNames;

class IntegerToWords
{
    private $uniqueNames = array(
        0 => 'zero',
    );

    public function convert(Integer $integer)
    {
        return $this->uniqueNames[$integer->getValue()];
    }
}