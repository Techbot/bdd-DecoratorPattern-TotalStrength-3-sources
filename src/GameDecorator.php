<?php
/**
 * Created by PhpStorm.
 * User: techbot
 * Date: 30/06/16
 * Time: 13:51
 */

namespace Game;


abstract class GameDecorator extends Game
{
    protected $game;

    function __construct(Game $game)
    {
        $this->game = $game;
    }

}