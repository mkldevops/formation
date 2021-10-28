<?php

namespace App;

use App\Controllers\HomeController;
use App\Controllers\EmployesController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

class App 
{
  public function run(Request $request) : Response
  {
    $uri = $request->getPathInfo();
    if(!empty($uri) && strlen($uri) > 1 && $uri[-1] === '/') {
      return new Response('', Response::HTTP_PERMANENTLY_REDIRECT, [
        'headers' => ['Location',  substr($uri, 0, -1)]
      ]);
    }    

    $context = new RequestContext($request);
    $urlMatcher = new UrlMatcher(self::routes(), $context);
    try {
      $result = $urlMatcher->match($uri);
      $request->attributes->add($result);
      $controller = (new ControllerResolver())->getController($request);
      $arguments = (new ArgumentResolver())->getArguments($request, $controller);
      return call_user_func_array($controller, $arguments);
    } catch (ResourceNotFoundException $th) {
      return new Response('Page not Found', 404);
    }
  }

  public static function routes() : RouteCollection
  {
    $routes = new RouteCollection();
    $routes->add('home', new Route('', [
      '_controller' => HomeController::class.'::home'
    ]));
    
    $routes->add('home_1', new Route('/home', [
      '_controller' => HomeController::class.'::home'
    ]));
    
    $routes->add('employes', new Route('/employes', [
      '_controller' => EmployesController::class.'::index'
    ]));
    
    $routes->add('employes_name', new Route('/employes/{name}', [
      '_controller' => EmployesController::class.'::show'
    ]));

    return $routes;
  }
}