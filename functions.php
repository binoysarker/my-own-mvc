<?php

function dd($value)
{
    echo "<pre>";
    return die(var_dump($value));
    echo "</pre>";
}
function view($name, $data = [])
{
    extract($data);
    return require "app/views/{$name}.view.php";
}
function redirect($uri)
{
    return header("Location:{$uri}");
}
