<?php

namespace App\Views\Web;

class GameWebView
{
    public function __construct()
    {
        return include_once ('Layouts/play.html');
    }
}
