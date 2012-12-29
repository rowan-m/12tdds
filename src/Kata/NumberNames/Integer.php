<?php

namespace Kata\NumberNames;

class Integer
{
    private $integer;

    public function __construct($integer)
    {
        $this->integer = (int) $integer;
    }
}