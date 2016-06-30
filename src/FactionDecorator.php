<?php
/**
 * Created by PhpStorm.
 * User: techbot
 * Date: 30/06/16
 * Time: 13:52
 */

namespace Game;

class FactionDecorator extends GameDecorator {
    function getStrength() {
        return $this->game->getStrength()  + 1;
    }
}