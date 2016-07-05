<?php

namespace spec\Game;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PlayerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith(6);
        $this->shouldHaveType('Game\Player');
    }
}
