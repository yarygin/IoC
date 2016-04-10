<?php
namespace Yarygin;

use Yarygin\Interfaces\Container;

class IoC
{
    /**
     * @var array
     */
    protected $bindings = [];

    public function registerContainers(array $containers)
    {
        foreach($containers as $container)
        {
            $this->registerContainer($container);
        }
    }

    public function registerContainer($container)
    {
        $ioc_container = new $container();
        $ioc_container->boot();
        foreach ($ioc_container->getBindings() as $binding_interface => $binding_class) {
            $this->bindings[$binding_interface] = $binding_class;
        }
    }

    public function get($ioc_interface)
    {
        return new $this->bindings[$ioc_interface]();
    }
}