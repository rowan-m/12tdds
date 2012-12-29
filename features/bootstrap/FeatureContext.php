<?php

use Behat\Behat\Context\BehatContext;
use Behat\Behat\Context\ClosuredContextInterface;
use Behat\Behat\Context\TranslatedContextInterface;
use Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

use Kata\StatisticsCalculator;
use Kata\IntegerListProvider;

//
// Require 3rd-party libraries here:
//
require_once __DIR__ . '/../../vendor/phpunit/phpunit/PHPUnit/Autoload.php';
require_once __DIR__ . '/../../vendor/phpunit/phpunit/PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{
    private $elements;

    private $statistics;

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
    public function theListContains($elements)
    {
        $provider = new IntegerListProvider();
        $this->elements = $provider->fromString($elements);
    }

    /**
     * @When /^I calculate the statistics$/
     */
    public function iCalculateTheStatistics()
    {
        $sc = new StatisticsCalculator();
        $this->statistics = $sc->calculate($this->elements);
    }

    /**
     * @Then /^the minimum should equal "([^"]*)"$/
     */
    public function theMinimumShouldEqual($expectedMinimum)
    {
        assertEquals($expectedMinimum, $this->statistics->getMinimum());
    }

    /**
     * @Given /^the maximum should equal "([^"]*)"$/
     */
    public function theMaximumShouldEqual($expectedMaximum)
    {
        assertEquals($expectedMaximum, $this->statistics->getMaximum());
    }

    /**
     * @Given /^the count should equal "([^"]*)"$/
     */
    public function theCountShouldEqual($expectedCount)
    {
        assertEquals($expectedCount, $this->statistics->getCount());
    }

    /**
     * @Given /^the average should equal "([^"]*)"$/
     */
    public function theAverageShouldEqual($expectedAverage)
    {
        assertEquals($expectedAverage, $this->statistics->getAverage());
    }
}
