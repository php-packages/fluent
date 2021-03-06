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

        $this->registerCall("type", ["string"]);
        $this->getCalls()->shouldBe([["type", ["string"]]]);

        $this->clearCalls();

        $this->registerCall("shouldBeEmpty");
        $this->getCalls()->shouldBe(["should", "be", "empty"]);

        $this->clearCalls();

        $this->registerCall("_should");
        $this->getCalls()->shouldBe(["should"]);

        $this->clearCalls();

        $this->registerCall("should_has_length", [8]);
        $this->getCalls()->shouldBe($calls = ["should", "has", ["length", [8]]]);

        // $this->clearCalls();

        $this->registerCall("shouldNot_be_truthy");
        $this->getCalls()->shouldBe(array_merge($calls, ["should", "not", "be", "truthy"]));
    }
}
