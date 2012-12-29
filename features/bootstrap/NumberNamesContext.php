<?php

use Behat\Behat\Context\BehatContext;
use Behat\Behat\Exception\PendingException;

use Kata\NumberNames\Integer;
use Kata\NumberNames\IntegerToWords;

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
        $convertor = new IntegerToWords();
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