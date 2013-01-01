<?php

namespace Kata\NumberNames;

class UniqueNames
{
    private $uniqueNames = array(
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

    public function getWordFor(Integer $integer)
    {
        if (isset($this->uniqueNames[$integer->getValue()])) {
            return $this->uniqueNames[$integer->getValue()];
        }
    }
}