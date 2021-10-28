<?php

namespace App\Controllers;

use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    public function home()
    {
        ob_start();
        require __DIR__.'/../../pages/home.php';
        return new Response(ob_get_clean());
    }
}