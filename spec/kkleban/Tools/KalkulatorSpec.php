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
    function it_should_have_setter_and_gettter()
    {
        $this->setA(3)->getA()->shouldReturn(3);
        $this->setB(4)->getB()->shouldReturn(4);
        $this->setC(4)->getB()->shouldReturn(4);
    }
    function it_should_calculate_obj()
{
    $this->setA(3)->setB(4)->setC(5)->obj()->shouldReturn(60);
}
}
