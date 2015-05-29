<?php

namespace spec\kkleban\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('kkleban\Tools\Kalkulator');
    }
}
