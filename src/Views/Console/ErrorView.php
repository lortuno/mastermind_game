<?php

namespace App\Views\Console;
use Exception;

class ErrorView
{
    public function __construct(Exception $error)
    {
        echo $error->getMessage();
    }
}