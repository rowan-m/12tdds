<?php

namespace Kata;

class IntegerListProvider
{
    public function fromString($stringRepresentation)
    {
        $integerArray = new IntegerList();

        if (trim($stringRepresentation) == '') {
            $array = array();
        } else {
            $array = explode(',', $stringRepresentation);
        }

        foreach ($array as $element) {
            $integerArray->append(trim($element));
        }

        return $integerArray;
    }
}