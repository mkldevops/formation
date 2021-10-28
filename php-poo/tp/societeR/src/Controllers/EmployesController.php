<?php

namespace App\Controllers;

use Symfony\Component\HttpFoundation\Response;

class EmployesController
{
  public function index() : Response
  {
    ob_start();
    require __DIR__.'/../../pages/employes.php';
    return new Response(ob_get_clean());
  }
  
  public function show(string $name)
  {
    dd($name);
    ob_start();
    require __DIR__.'/../../pages/employes.php';
    return new Response(ob_get_clean());
  }
}