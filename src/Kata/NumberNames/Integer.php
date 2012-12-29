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

    public function getQuotientFrom($divisor)
    {
        return new Integer(floor($this->getValue() / $divisor));
    }

    public function getRemainderFrom($divisor)
    {
        return new Integer($this->getValue() % $divisor);
    }
}