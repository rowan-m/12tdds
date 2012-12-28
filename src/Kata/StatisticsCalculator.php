<?php

namespace Kata;

class StatisticsCalculator
{
    private $elements;

    public function __construct($elements)
    {
        $this->elements = $elements;
    }

    public function getStatistics()
    {

        $builder = new StatisticsBuilder();
        return $builder
            ->setMinimum($this->elements)
            ->setMaximum($this->elements)
            ->setCount(($this->elements) ? 1 : 0)
            ->setAverage($this->elements)
            ->buildStatistics();
    }
}
