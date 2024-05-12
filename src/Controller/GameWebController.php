<?php

namespace App\Controller;

use App\Views\Web\GameWebView;

class GameWebController
{
    public function __construct()
    {
        return new GameWebView();
    }
}
