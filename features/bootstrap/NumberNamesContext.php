<?php

use Behat\Behat\Context\BehatContext;
use Behat\Behat\Exception\PendingException;

use Kata\NumberNames\Integer;
use Kata\NumberNames\IntegerToWords;
use Kata\NumberNames\UniqueNames;
use Kata\NumberNames\MultiplesOfTen;

class NumberNamesContext extends BehatContext
{
    private $digits;

    private $words;

    /**
     * @Given /^the numeric representation (\d+)$/
     */
    public function theNumericRepresentation($digits)
    {
        $this->digits = $digits;
    }

    /**
     * @When /^I convert the integer$/
     */
    public function iConvertTheInteger()
    {
        $integer = new Integer($this->digits);
        $convertor = new IntegerToWords(new UniqueNames(), new MultiplesOfTen());
        $this->words = $convertor->convert($integer);
    }

    /**
     * @Then /^the representation in words should be "([^"]*)"$/
     */
    public function theRepresentationInWordsShouldBe($words)
    {
        assertEquals($words, $this->words);
    }

}