<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given I have a playerStrength of :arg1
     */
    public function iHaveAPlayerstrengthOf($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given a weaponStrength of :arg1
     */
    public function aWeaponstrengthOf($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given a factionStrength of :arg1
     */
    public function aFactionstrengthOf($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When I begin a game
     */
    public function iBeginAGame()
    {
        throw new PendingException();
    }

    /**
     * @Then I should have a totalStrength of :arg1
     */
    public function iShouldHaveATotalstrengthOf($arg1)
    {
        throw new PendingException();
    }
}
