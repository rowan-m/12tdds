<?php

namespace Kata\CalcStats;

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

    public function sort()
    {
        $sortedList = new IntegerList();
        $sourceArray = $this->elements;
        sort($sourceArray, SORT_NUMERIC);

        foreach ($sourceArray as $element) {
            $sortedList->append($element);
        }

        return $sortedList;
    }

    public function count()
    {
        return count($this->elements);
    }

    public function first()
    {
        return reset($this->elements);
    }

    public function last()
    {
        return end($this->elements);
    }

    public function sum()
    {
        return array_sum($this->elements);
    }
}