<?php
function render($view, $data = null)
{
    $templatesFolder = __ROOT__ . "/views";

    require_once "$templatesFolder/$view";
}