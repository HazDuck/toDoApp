<?php

namespace portal\Factories;

use Portal\Models\ListModel;
use Psr\Container\ContainerInterface;

class ListModelFactory {

    public function __invoke(ContainerInterface $container) {

        $db = $container->get('dbConnection');
        return new ListModel($db);
}
}