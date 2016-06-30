<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use PHPUnit_Framework_Assert as Assert;

use Game\Player;
use Game\WeaponDecorator;
use Game\GameDecorator;
use Game\FactionDecorator;
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
    private $playerStrength;
    private $totalStrength;   
    private $newPlayer;
    

    /**
     * @Given I have a playerStrength of :playerStrength
     */
    public function iHaveAPlayerstrengthOf($playerStrength)
    {
        $this->playerStrength = $playerStrength;
    }

    /**
     * @When I begin a game
     */
    public function iBeginAGame()
    {

       $this->newPlayer = new WeaponDecorator(new FactionDecorator(new Player(6)));
       
       $this->totalStrength = $this->newPlayer->getStrength();
    }

    /**
     * @Then I should have a totalStrength of :totalStrength
     */
    public function iShouldHaveATotalstrengthOf($totalStrength )
    {
        Assert::assertEquals($this->totalStrength ,$totalStrength);
    }
}
