<?php

namespace Kata;

class Statistics
{
    private $minimum;

    private $maximum;

    private $count;

    private $average;

    public function __construct($minimum, $maximum, $count, $average)
    {
        $this->minimum = $minimum;
        $this->maximum = $maximum;
        $this->count = $count;
        $this->average = $average;
    }

    public function getMinimum()
    {
        return $this->minimum;
    }

    public function getMaximum()
    {
        return $this->maximum;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function getAverage()
    {
        return $this->average;
    }
}
