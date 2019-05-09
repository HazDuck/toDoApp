<?php

namespace Portal\Factories;

use Portal\Controllers\HomepageController;
use Psr\Container\ContainerInterface;

class HomepageControllerFactory {

    public function __invoke(ContainerInterface $container)
    {
        $renderer = $container->get('renderer');
        $data = $container->get('ListModel');
        return new HomepageController($renderer, $data);
    }

}