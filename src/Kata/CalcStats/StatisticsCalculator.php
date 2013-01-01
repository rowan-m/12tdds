<?php

namespace Kata\CalcStats;

class StatisticsCalculator
{
    public function calculate(IntegerList $elements)
    {
        $count = $elements->count();
        $average = null;

        if ($count > 0) {
            $average = $elements->sum() / $count;
        }

        $elements = $elements->sort();
        $minimum = $elements->first();
        $maximum = $elements->last();

        $statistics = new Statistics();
        $statistics->add('minimum', $minimum);
        $statistics->add('maximum', $maximum);
        $statistics->add('count', $count);
        $statistics->add('average', $average);
        return $statistics;
    }
}
