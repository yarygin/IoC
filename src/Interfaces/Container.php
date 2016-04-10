<?php
namespace Yarygin\Interfaces;

interface Container
{

    public function boot();

    public function register(array $bindings);
}