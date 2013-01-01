<?php

namespace Kata\NumberNames;

class DivisionResult
{
    private $quotient;

    private $remainder;

    public function __construct(Integer $quotient, Integer $remainder)
    {
        $this->quotient = $quotient;
        $this->remainder = $remainder;
    }

    public function getQuotient()
    {
        return $this->quotient;
    }

    public function getRemainder()
    {
        return $this->remainder;
    }
}