<?php

namespace CompartSoftware\App\Controller;

use CompartSoftware\System\Core\Controller;

class Game extends Controller
{
    public function index()
    {
        $this->view('game');
    }
}
