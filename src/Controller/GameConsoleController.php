<?php

namespace App\Controller;

use App\Views\Console\GameView;

class GameConsoleController
{
    public function __construct()
    {
        new GameView();
    }
}
