<?php namespace PhpPackages\Fluent;

trait FluentTrait
{

    /**
     * @var Fluent|null
     */
    protected $fluent = null;

    /**
     * Returns an existing instance of Fluent, or creates a new one first.
     *
     * @return Fluent
     */
    public function getFluent()
    {
        if (is_null($this->fluent)) {
            $this->fluent = new Fluent;
        }

        return $this->fluent;
    }

    /**
     * Replaces the currently used Fluent instance with the given one.
     *
     * @param Fluent $fluent
     * @return void
     */
    public function setFluent(Fluent $fluent)
    {
        $this->fluent = $fluent;
    }

    /**
     * Magic!
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
     * Magic!
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
