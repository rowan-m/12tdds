<?php

namespace Kata\NumberNames;

class Integer
{
    private $integer;

    public function __construct($integer)
    {
        $this->integer = (int) $integer;
    }

    public function getValue()
    {
        return $this->integer;
    }
}