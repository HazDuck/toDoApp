<?php
namespace Portal\Controllers;

use Portal\Models\ListModel;
use Slim\Views\PhpRenderer;

class HomepageController {

    public $renderer;
    public $listModel;

    public function __construct(PhpRenderer $renderer, ListModel $listModel)

    {
        $this->renderer = $renderer;
        $this->listModel = $listModel;
    }

    public function __invoke($request, $response, $args) {
        $args['tasks'] = $this->listModel->getTasks();
        $args['lists'] = $this->listModel->getToDoLists();
        $this->renderer->render($response, 'homepage.phtml', $args);
    }


}