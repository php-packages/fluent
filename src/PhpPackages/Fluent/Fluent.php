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

        $this->calls = array_merge($this->calls, explode("_", $name));

        if (count($arguments) > 0) {
            $lastIndex = count($this->calls) - 1;

            $this->calls[$lastIndex] = [$this->calls[$lastIndex], $arguments];
        }
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
