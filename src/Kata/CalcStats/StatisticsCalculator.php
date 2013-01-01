<?php

namespace Kata\CalcStats;

class StatisticsCalculator
{
    public function calculate(IntegerList $elements)
    {
        $array = $elements->getArray();
        $count = count($array);
        $average = null;

        if ($count > 0) {
            $average = array_sum($array) / $count;
        }

        sort($array, SORT_NUMERIC);
        $minimum = reset($array);
        $maximum = end($array);

        $statistics = new Statistics();
        $statistics->add('minimum', $minimum);
        $statistics->add('maximum', $maximum);
        $statistics->add('count', $count);
        $statistics->add('average', $average);
        return $statistics;
    }
}
