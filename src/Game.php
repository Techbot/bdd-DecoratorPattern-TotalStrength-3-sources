<?php
namespace Game;

abstract class Game {
    abstract function getStrength();
}

/*
$game = new FactionDecorator(new Player(6));
print $game->getStrength() . PHP_EOL;

$game2 = new WeaponDecorator(new FactionDecorator(new Player(6)));
print $game2->getStrength(). PHP_EOL;

$game3 = new WeaponDecorator(new FactionDecorator(new WeaponDecorator(new Player(6))));
print $game3->getStrength(). PHP_EOL;

*/