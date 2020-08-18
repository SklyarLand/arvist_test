<?php
require_once __DIR__ . '/vendor/autoload.php';

use FastRoute\RouteCollector;

//библиотека FastRouter
$dispatcher = FastRoute\simpleDispatcher(function(RouteCollector $r) {
    $r->get('/', 'BranchesController@index');
    $r->addGroup('/branches', function (RouteCollector $r) {
        $r->get( '', 'BranchesController@index');
        $r->get( '/', 'BranchesController@index');
        $r->get( '/{id:\d+}', 'BranchesController@show');
    });
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        echo '404 Not Found';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        echo '405 Method Not Allowed';
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        list($class, $method) = explode('@',$handler,2);

        $class = 'App\Controllers\\'.$class;//в этом случае для создание объекта сонтроллера нужно его полное имя
        call_user_func_array([new $class, $method], $vars);
        break;
}
?>