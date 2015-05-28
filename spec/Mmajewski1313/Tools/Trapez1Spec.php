<?php

namespace spec\Mmajewski1313\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class Trapez1Spec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Mmajewski1313\Tools\Trapez1');
    }
    
    function it_should_calculate_trapez1()
    {
        $this->setA(5)->setB(7)->setH(2)->trapez1()->shouldReturn(12);
    }
}
