<?php

namespace Kata;

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

        $builder = new StatisticsBuilder();
        return $builder
            ->setMinimum($minimum)
            ->setMaximum($maximum)
            ->setCount($count)
            ->setAverage($average)
            ->buildStatistics();
    }
}
