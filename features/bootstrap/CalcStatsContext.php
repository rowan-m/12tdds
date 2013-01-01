<?php

use Behat\Behat\Context\BehatContext;

use Kata\CalcStats\StatisticsCalculator;
use Kata\CalcStats\IntegerListProvider;

class CalcStatsContext extends BehatContext
{
    private $elements;

    private $statistics;

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
        assertEquals($expectedMinimum, $this->statistics->get('minimum'));
    }

    /**
     * @Given /^the maximum should equal "([^"]*)"$/
     */
    public function theMaximumShouldEqual($expectedMaximum)
    {
        assertEquals($expectedMaximum, $this->statistics->get('maximum'));
    }

    /**
     * @Given /^the count should equal "([^"]*)"$/
     */
    public function theCountShouldEqual($expectedCount)
    {
        assertEquals($expectedCount, $this->statistics->get('count'));
    }

    /**
     * @Given /^the average should equal "([^"]*)"$/
     */
    public function theAverageShouldEqual($expectedAverage)
    {
        assertEquals($expectedAverage, $this->statistics->get('average'));
    }
}