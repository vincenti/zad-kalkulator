<?php

namespace spec\kustra88\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('kustra88\Tools\Kalkulator');
    }
}
