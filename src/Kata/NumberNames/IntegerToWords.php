<?php

namespace Kata\NumberNames;

class IntegerToWords
{
    private $uniqueNames;

    private $multiplesOfTen;

    public function __construct(UniqueNames $names, MultiplesOfTen $multiples)
    {
        $this->uniqueNames = $names;
        $this->multiplesOfTen = $multiples;
    }

    public function convert(Integer $integer)
    {
        if ($integer->getValue() == 0) {
            return 'zero';
        }

        $words = new NumberName();

        do {
            $thousands = $integer->divideBy(1000);
            $hundreds = $this->buildHundredsGroup($thousands->getRemainder()->divideBy(100));
            $words->addGroup($hundreds);
            $integer = $thousands->getQuotient();
        } while ($integer->getValue() > 0);

        return $words;
    }

    public function buildHundredsGroup(DivisionResult $hundreds)
    {
        $hundredsWord = '';

        if ($hundreds->getQuotient()->getValue() > 0) {
            $hundredsWord = $this->uniqueNames->getWordFor($hundreds->getQuotient()) . ' hundred';
        }

        $tens = $hundreds->getRemainder()->divideBy(10);
        $tensWord = '';

        if ($tens->getQuotient()->getValue() > 1) {
            $tensWord = $this->multiplesOfTen->getWordFor($tens->getQuotient());
        }

        $onesWord = $this->uniqueNames->getWordFor($tens->getRemainder());

        if ($hundreds->getRemainder()->getValue() < 20) {
            $onesWord = $this->uniqueNames->getWordFor($hundreds->getRemainder());
        }

        return new HundredsGroup($hundredsWord, $tensWord, $onesWord);
    }
}
