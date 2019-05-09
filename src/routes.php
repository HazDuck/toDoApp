<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;


return function (App $app) {
//    $container = $app->getContainer();
    $app->get('/', 'HomepageController');
    $app->post('/addTask', 'AddTaskController');
};
