<?php

namespace specs\PhpPackages\Fluent
{

    use PhpPackages\Fluent\Fluent;

    class FluentTraitTestSpec extends \PhpSpec\ObjectBehavior
    {

        public function it_is_initializable()
        {
            $this->shouldHaveType("PhpPackages\Fluent\FluentTraitTest");
        }

        public function it_returns_the_existing_Fluent_instance_and_creates_a_new_one()
        {
            $this->getFluent()->shouldHaveType("PhpPackages\Fluent\Fluent");

            $this->setFluent($fluent = new Fluent);
            $this->getFluent()->shouldBe($fluent);
        }

        public function it_brings_in_the_magic(Fluent $fluent)
        {
            $this->setFluent($fluent);
            $fluent->registerCall("doSomethingCool", [])->shouldBeCalledTimes(2);
            $this->getWrappedObject()->doSomethingCool();
            $this->getWrappedObject()->doSomethingCool;
        }
    }
}

namespace PhpPackages\Fluent
{

    class FluentTraitTest
    {

        use FluentTrait;
    }
}
