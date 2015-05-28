<?php

namespace spec\jwasik\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TrapezSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('jwasik\Tools\Trapez');
    }
    
    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
        $this->setH(12)->getH()->shouldReturn(12);
    }
    
    function it_should_calculate_area()
{
    $this->setA(5)->setB(7)->setH(3)->area()->shouldReturn(18);
}
}
