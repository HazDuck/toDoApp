<?php

namespace Portal\Factories;

use Psr\Container\ContainerInterface;

class AddTaskControllerFactory{

    public function __invoke(ContainerInterface $container)
    {
        $renderer = $container->get('renderer');
        $data = $container->get('ListModel');
        return new AddTaskController($renderer, $data);
    }

}