<?php
namespace Yarygin;

use Yarygin\Interfaces\Container;

class IoC
{
    /**
     * @var Container[]
     */
    protected $containers = [];

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
        $this->containers[] = $container;
    }

    public function start()
    {
        foreach($this->containers as $container)
        {
//            var_dump($container);
            $ioc_container = new $container();
            $ioc_container->boot();
            $this->bindings = array_merge($this->bindings, $ioc_container);
        }
    }

    public function get($ioc_interface)
    {
        var_dump($this->bindings);
        return $this->bindings[$ioc_interface];
    }
}