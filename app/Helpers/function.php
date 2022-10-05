<?php

ini_set('xdebug.var_display_max_depth', 10);
ini_set('xdebug.var_display_max_children', 256);
ini_set('xdebug.var_display_max_data', 1024);

function dd(...$data)
{
    die(var_dump(
        (object)$data
    ));
}

function logger()
{
    throw new Exception();
}

function uri()
{
    return trim($_SERVER['REQUEST_URI'], '/');
}

function checkRoute(string $route)
{
    $routeParts = explode('/', $route);
    $uriParts = explode('/', uri());

    if (count($routeParts) !== count($uriParts)) return false;

    foreach ($routeParts as $key => $partRoute) {
        if ($partRoute !== $uriParts[$key] && !isParamRouteSection($partRoute)) return false;
    }

    return true;
}

function isParamRouteSection($routeSection)
{
    return strstr($routeSection, '{') && strstr($routeSection, '}');
}
