<?php

use Behat\Behat\Context\BehatContext;

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
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        $this->useContext('calcstats', new CalcStatsContext());
    }
}
