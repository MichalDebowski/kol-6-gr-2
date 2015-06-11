<?php

namespace spec\michaldebowski\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class trapezSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('michaldebowski\Tools\trapez');
    }
}
