<?php
/**
 * Created by PhpStorm.
 * User: techbot
 * Date: 30/06/16
 * Time: 13:51
 */

namespace Game;

class WeaponDecorator extends GameDecorator {
    
   
    function getStrength() {
        return $this->game->getStrength() + 4;
    }
}