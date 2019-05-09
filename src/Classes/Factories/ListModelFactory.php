<?php

namespace portal\Factories;

use Portal\Models\ListModel;

class ListModelFactory {

    public function __invoke() {
        return new ListModel();
}
}