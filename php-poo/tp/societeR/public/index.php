<?php

require __DIR__.'/../vendor/autoload.php';

use App\App;
use Symfony\Component\HttpFoundation\Request;

(new App())
  ->run(Request::createFromGlobals())
  ->send();