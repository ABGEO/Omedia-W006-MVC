<?php
/**
 * @param $method
 * @param $request
 * @return bool
 */
function CompareRoute($method, $request)
{
    if (!(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == $method))
        return false;

    if (!(isset($_SERVER['PATH_INFO']) && $_SERVER['PATH_INFO'] == $request))
        return false;

    return true;
}

/**
 * @param $method
 * @param $request
 * @param $action
 */
function Route($method, $request, $action)
{
    if (strpos($request, '{') !== false) {
        if (isset($_SERVER['PATH_INFO'])) {
            $lPosRequest = strpos($request, '/');
            $rPosRequest = strpos($request, '/', $lPosRequest + 1);

            $strRequest = substr($request, $lPosRequest + 1, $rPosRequest - 1);

            $lPosPath = strpos($_SERVER['PATH_INFO'], '/');
            $rPosPath = strpos($_SERVER['PATH_INFO'], '/', $lPosPath + 1);

            $strPath = substr($_SERVER['PATH_INFO'], $lPosPath + 1, $rPosPath - 1);

            if ($strRequest == $strPath) {
                $argument = substr($_SERVER['PATH_INFO'],   $rPosPath + 1);

                $action = explode('@', $action);

                $controller = $action[0];
                $function = $action[1];

                require_once __ROOT__ . "/controllers/{$controller}.php";

                $function($argument);
            }
        }
    } else {
        if (CompareRoute($method, $request)) {
            $action = explode('@', $action);

            $controller = $action[0];
            $function = $action[1];

            require_once __ROOT__ . "/controllers/{$controller}.php";

            $function(1);
        }
    }

}