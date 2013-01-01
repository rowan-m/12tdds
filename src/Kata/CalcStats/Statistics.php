<?php

namespace Kata\CalcStats;

class Statistics
{
    private $collection = array();

    public function add($type, $value)
    {
        $this->collection[$type] = $value;
    }

    public function get($type)
    {
        return $this->collection[$type];
    }
}
