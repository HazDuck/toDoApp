<?php

namespace Portal\Factories;

use Portal\Controllers\AddTaskController;
use Psr\Container\ContainerInterface;

class AddTaskControllerFactory{

    public function __invoke(ContainerInterface $container)
    {
        $data = $container->get('ListModel');
        return new AddTaskController($data);
    }

}