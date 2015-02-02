<?php namespace specs\PhpPackages\Fluent;

class FluentSpec extends \PhpSpec\ObjectBehavior
{

    public function it_is_initializable()
    {
        $this->shouldHaveType("PhpPackages\Fluent\Fluent");
    }
}
