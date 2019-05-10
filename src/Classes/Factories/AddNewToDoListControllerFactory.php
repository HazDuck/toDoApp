<?php

namespace Portal\Factories;

use Portal\Controllers\AddNewToDoListController;
use Psr\Container\ContainerInterface;

class AddNewToDoListControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $data = $container->get('ListModel');
        return new AddNewToDoListController($data);
    }
}