<?php

namespace spec;

use Bowling;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BowlingSpec extends ObjectBehavior
{
    function it_scores_a_gutter_game_as_zero()
    {
        $this->roll(0);
    }
}
