<?php
namespace Yarygin\Example;

class AppContainer extends \Yarygin\Container
{
    public function boot()
    {
        $this->register(\Yarygin\Example\ExampleInterface::class, \Yarygin\Example\ExampleObject::class);
    }
}