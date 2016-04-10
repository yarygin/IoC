<?php
namespace Yarygin\Interfaces;

interface Container
{

    public function boot();

    public function register($binding_interface, $binding_class);

    public function getBindings();
}