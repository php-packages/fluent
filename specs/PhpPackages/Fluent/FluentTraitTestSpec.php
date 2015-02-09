<?php namespace specs\PhpPackages\Fluent;

use PhpPackages\Fluent\Fluent;

class FluentTraitTestSpec extends \PhpSpec\ObjectBehavior
{

    public function it_is_initializable()
    {
        $this->shouldHaveType("PhpPackages\Fluent\FluentTraitTest");
    }

    public function it_returns_a_Fluent_instance_or_creates_a_new_one(Fluent $fluent)
    {
        $this->getFluent()->shouldHaveType("PhpPackages\Fluent\Fluent");

        $this->setFluent($fluent);
        $this->getFluent()->shouldBe($fluent);
    }

    public function it_brings_in_the_magic(Fluent $fluent)
    {
        $this->setFluent($fluent);
        $fluent->registerCall("doSomethingCool", [])->shouldBeCalledTimes(2);

        $this->getWrappedObject()->doSomethingCool(); // A missing method.
        $this->getWrappedObject()->doSomethingCool; // A missing property.
    }
}
