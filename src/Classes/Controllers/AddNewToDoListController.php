<?php

namespace Portal\Controllers;

use Portal\Models\ListModel;

class AddNewToDoListController {

    public $listModel;

    public function __construct(ListModel $listModel) {

        $this->listModel = $listModel;
    }

    public function __invoke($request, $response, $args)
    {
        $newToDoList = $request->getParsedBody();
        $addToDoList = $newToDoList['toDolist'];
        $this->listModel->addToDoList($addToDoList);
        return $response->withRedirect('/');
    }
}