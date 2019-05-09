<?php
namespace Portal\Controllers;

use Portal\Models\ListModel;

class AddTaskController {

    public $listModel;

    public function __construct(ListModel $listModel) {

        $this->listModel = $listModel;
    }

    public function __invoke($request, $response, $args)
    {
        $this->listModel->addTask();
    }
}