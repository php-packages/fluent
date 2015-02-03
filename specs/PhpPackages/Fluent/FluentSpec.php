<?php namespace specs\PhpPackages\Fluent;

class FluentSpec extends \PhpSpec\ObjectBehavior
{

    public function it_is_initializable()
    {
        $this->shouldHaveType("PhpPackages\Fluent\Fluent");
    }

    public function it_registers_a_call()
    {
        $this->getCalls()->shouldBe([]);
        $this->registerCall("shouldBeEmpty");
        $this->getCalls()->shouldBe(["should", "be", "empty"]);
        $this->clearCalls();

        $this->getCalls()->shouldBe([]);
        $this->registerCall("should_has_length", [8]);
        $this->getCalls()->shouldBe(["should", "has", ["length", [8]]]);
    }
}
