<?php

namespace specs\PhpPackages\Fluent
{

    class FluentTraitTestSpec extends \PhpSpec\ObjectBehavior
    {

        public function it_is_initializable()
        {
            $this->shouldHaveType("PhpPackages\Fluent\FluentTraitTest");
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
