<?php
function CompareRoute($method, $request)
{
    if (!(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == $method))
        return false;

    if (!(isset($_SERVER['PATH_INFO']) && $_SERVER['PATH_INFO'] == $request))
        return false;

    return true;
}

function Route($method, $request, $action)
{
    if (CompareRoute($method, $request)) {
        $action = explode('@', $action);

        $controller = $action[0];
        $function = $action[1];

        require_once __ROOT__ . "/controllers/{$controller}.php";

        $function();
    }
}