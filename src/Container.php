<?php
namespace Yarygin;

abstract class Container
{
    protected $bindings = [];

    public function __construct()
    {

    }

    public function boot()
    {

    }

    public function register($binding_interface, $binding_class)
    {
        $this->bindings[$binding_interface] = $binding_class;
    }

    public function getBindings()
    {
        return $this->bindings;
    }
}