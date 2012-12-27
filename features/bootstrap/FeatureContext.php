<?php

use Behat\Behat\Context\BehatContext;
use Behat\Behat\Context\ClosuredContextInterface;
use Behat\Behat\Context\TranslatedContextInterface;
use Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
    }

    /**
     * @Given /^the list contains "([^"]*)"$/
     */
    public function theListContains($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When /^I calculate the statistics$/
     */
    public function iCalculateTheStatistics()
    {
        throw new PendingException();
    }

    /**
     * @Then /^the minimum should equal "([^"]*)"$/
     */
    public function theMinimumShouldEqual($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given /^the maximum should equal "([^"]*)"$/
     */
    public function theMaximumShouldEqual($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given /^the count should equal "([^"]*)"$/
     */
    public function theCountShouldEqual($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given /^the average should equal "([^"]*)"$/
     */
    public function theAverageShouldEqual($arg1)
    {
        throw new PendingException();
    }
}
