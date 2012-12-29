<?php

use Behat\Behat\Context\BehatContext;
use Behat\Behat\Exception\PendingException;

class NumberNamesContext extends BehatContext
{
    /**
     * @Given /^the numeric representation (\d+)$/
     */
    public function theNumericRepresentation($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When /^I convert the integer$/
     */
    public function iConvertTheInteger()
    {
        throw new PendingException();
    }

    /**
     * @Then /^the representation in words should be zero$/
     */
    public function theRepresentationInWordsShouldBeZero()
    {
        throw new PendingException();
    }
}