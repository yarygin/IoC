<?php
namespace Yarygin;

abstract class Container implements \Yarygin\Interfaces\Container
{
    protected $bindings = [];

    public function register($binding_interface, $binding_class)
    {
        $this->bindings[$binding_interface] = $binding_class;
    }

    public function getBindings()
    {
        return $this->bindings;
    }
}