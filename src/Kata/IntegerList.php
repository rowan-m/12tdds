<?php

namespace Kata;

class IntegerList
{
    private $elements = array();

    public function append($element) {
        $this->elements[] = (int) $element;
    }

    public function getArray()
    {
        return $this->elements;
    }
}