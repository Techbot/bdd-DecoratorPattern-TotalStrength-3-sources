<?php

namespace Game;

class Player extends Game
{
    private $strength;

    function __construct($strength)
    {
        $this->strength = $strength;
    }

    function getStrength()
    {
        return $this->strength;
    }
}
