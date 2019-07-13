<?php

namespace spec;

use Bowling;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BowlingSpec extends ObjectBehavior
{
    function it_scores_a_gutter_game_as_zero()
    {
    	for ($i=0; $i < 20 ; $i++) { 
        	$this->roll(0);
    	}

    	$this->score()->shouldBe(0);
    }

    function it_scores_the_sum_of_all_knocked_down_pins_for_a_game()
    {
    	for ($i=0; $i < 20 ; $i++) { 
        	$this->roll(1);
    	}

    	$this->score()->shouldBe(20);
    }
}
