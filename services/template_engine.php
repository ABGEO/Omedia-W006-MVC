<?php
/**
 * @param $view
 * @param null $data
 * @return mixed
 */
function render($view, $data = null)
{
    $templatesFolder = __ROOT__ . "/views";

    return require_once "$templatesFolder/$view";
}