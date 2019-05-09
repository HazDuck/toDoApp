<?php

namespace Portal\Factories;

use Portal\Controllers\CompletedTaskController;
use Psr\Container\ContainerInterface;

class CompletedTaskControllerFactory {

    public function __invoke(ContainerInterface $container)
    {
        $data = $container->get('ListModel');
        return new CompletedTaskController($data);
    }
}
