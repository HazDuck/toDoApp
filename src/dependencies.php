<?php

use Slim\App;

return function (App $app) {
    $container = $app->getContainer();

    // view renderer
    $container['renderer'] = function ($c) {
        $settings = $c->get('settings')['renderer'];
        return new \Slim\Views\PhpRenderer($settings['template_path']);
    };

    $container['HomepageController'] = new \Portal\Factories\HomepageControllerFactory();

    $container['ListModel'] = new \Portal\Factories\ListModelFactory();

    $container['AddTaskController'] = new \Portal\Factories\AddTaskControllerFactory();

    $container['CompletedTaskController'] = new \Portal\Factories\CompletedTaskControllerFactory();

    $container['AddNewToDoListController'] = new \Portal\Factories\AddNewToDoListControllerFactory();


    $container['dbConnection'] = function ($c) {
        $settings = $c->get('settings')['db'];
        $db = new PDO($settings['host'].$settings['dbName'], $settings['userName']);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        return $db;
    };

    // monolog
    $container['logger'] = function ($c) {
        $settings = $c->get('settings')['logger'];
        $logger = new \Monolog\Logger($settings['name']);
        $logger->pushProcessor(new \Monolog\Processor\UidProcessor());
        $logger->pushHandler(new \Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
        return $logger;
    };
};
