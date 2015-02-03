<?php namespace PhpPackages\Fluent;

class Fluent
{

    /**
     * @var array
     */
    protected $calls = [];

    /**
     * Registers a call.
     *
     * @param string $name
     * @param array $arguments
     * @return void
     */
    public function registerCall($name, array $arguments = [])
    {
        $name = strtolower(preg_replace("/([A-Z]{1})/", "_$0", $name));

        $this->calls = explode("_", $name);
    }

    /**
     * Returns all registered calls.
     *
     * @return array
     */
    public function getCalls()
    {
        return $this->calls;
    }

    /**
     * Removes all registered calls.
     *
     * @return void
     */
    public function clearCalls()
    {
        $this->calls = [];
    }
}
