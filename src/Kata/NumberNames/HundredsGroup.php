<?php

namespace Kata\NumberNames;

class HundredsGroup
{
    private $hundreds;

    private $tens;

    private $ones;

    public function __construct($hundredsWord, $tensWord, $onesWord)
    {
        $this->hundreds = $hundredsWord;
        $this->tens = $tensWord;
        $this->ones = $onesWord;
    }

    public function isNotEmpty()
    {
        return ($this->hundreds || $this->tens || $this->ones);
    }

    public function __toString()
    {
        $word = $this->ones;

        if ($word != '' && $this->tens) {
            $word = '-' . $word;
        }

        $word = $this->tens . $word;

        if ($word != '' && $this->hundreds) {
            $word = ' and ' . $word;
        }

        return $this->hundreds . $word;
    }
}