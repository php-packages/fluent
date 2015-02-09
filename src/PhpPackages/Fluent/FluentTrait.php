<?php namespace PhpPackages\Fluent;

trait FluentTrait
{

    /**
     * An instance of Fluent.
     *
     * @var Fluent|null
     */
    protected $fluent;

    /**
     * Returns an existing instance of Fluent, or creates a new one first and then returns it.
     *
     * @return PhpPackages\Fluent\Fluent
     */
    public function getFluent()
    {
        if (is_null($this->fluent)) {
            $this->fluent = new Fluent;
        }

        return $this->fluent;
    }

    /**
     * Replaces the current Fluent instance with the given one.
     *
     * @param PhpPackages\Fluent\Fluent $fluent
     * @return void
     */
    public function setFluent(Fluent $fluent)
    {
        $this->fluent = $fluent;
    }

    /**
     * Magic (an undefined method was called).
     *
     * @param string $method
     * @param array $arguments
     * @return object
     */
    public function __call($method, array $arguments)
    {
        $this->getFluent()->registerCall($method, $arguments);

        return $this;
    }

    /**
     * Magic method (an undefined property was requested).
     *
     * @param string $name
     * @return object
     */
    public function __get($name)
    {
        $this->getFluent()->registerCall($name, []);

        return $this;
    }
}
