<?php

namespace spec\furtakm\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TrapezSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('furtakm\Tools\Trapez');
    }
    
    function it_should_calculate_trapez()
    {
        $this->setA(5)->setB(7)->setH(2)->trapez()->shouldReturn(12);
    }
}
