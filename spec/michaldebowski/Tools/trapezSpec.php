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
    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
        $this->setH(456)->getH()->shouldReturn(456);
    }
    function it_should_calculate_pole()
    {
        $this->setA(2)->setB(4)->setH(5)->pole()->shouldReturn(15);
    }
}
