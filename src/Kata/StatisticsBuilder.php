<?php

namespace Kata;

class StatisticsBuilder
{
    private $minimum;

    private $maximum;

    private $count;

    private $average;

    public function setMinimum($minimum)
    {
        $this->minimum = $minimum;
        return $this;
    }

    public function setMaximum($maximum)
    {
        $this->maximum = $maximum;
        return $this;
    }

    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }

    public function setAverage($average)
    {
        $this->average = $average;
        return $this;
    }

    public function buildStatistics()
    {
        return new Statistics($this->minimum, $this->maximum, $this->count, $this->average);
    }
}

