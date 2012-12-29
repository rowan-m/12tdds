<?php

use Behat\Behat\Context\BehatContext;
use Behat\Behat\Exception\PendingException;

class NumberNamesContext extends BehatContext
{
    /**
     * @Given /^the numeric representation (\d+)$/
     */
    public function theNumericRepresentation($digits)
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
     * @Then /^the representation in words should be "([^"]*)"$/
     */
    public function theRepresentationInWordsShouldBe($words)
    {
        throw new PendingException();
    }

}