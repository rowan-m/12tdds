<?php

namespace Kata\CalcStats;

class IntegerListProvider
{
    public function fromString($stringRepresentation)
    {
        $integerList = new IntegerList();

        if (trim($stringRepresentation) == '') {
            $array = array();
        } else {
            $array = explode(',', $stringRepresentation);
        }

        foreach ($array as $element) {
            $integerList->append(trim($element));
        }

        return $integerList;
    }
}