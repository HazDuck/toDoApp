<?php
namespace Portal\Controllers;

use Slim\Views\PhpRenderer;

class HomepageController {

    public $renderer;
    public $listModel;

    public function __construct(PhpRenderer $renderer)
    //TODO PASS LIST MODEL BACK IN
    {
        $this->renderer = $renderer;
//        $this->$listModel = $listModel;
    }

    public function __invoke($request, $response, $args) {
        $this->renderer->render($response, 'homepage.phtml', $args);
    }


}