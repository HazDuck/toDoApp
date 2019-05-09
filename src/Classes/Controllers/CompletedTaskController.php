<?php

namespace Portal\Controllers;

use Portal\Models\ListModel;

class CompletedTaskController
{

    public $listModel;

    public function __construct(ListModel $listModel)
    {

        $this->listModel = $listModel;
    }

    public function __invoke($request, $response, $args)
    {
        $newtask = $request->getParsedBody();
        $completedTaskId = $newtask['taskId'];
        $this->listModel->completedTask($completedTaskId);
        return $response->withRedirect('/');
    }

}