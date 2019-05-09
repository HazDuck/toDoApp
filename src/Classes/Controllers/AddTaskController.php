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
        $newtask = $request->getParsedBody();
        $taskInfo = $newtask['task'];
        $this->listModel->addTask($taskInfo);
        return $response->withRedirect('/');
    }
}