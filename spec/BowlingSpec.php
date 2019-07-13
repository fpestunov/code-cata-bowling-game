<?php

namespace spec;

use Bowling;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BowlingSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Bowling::class);
    }
}
