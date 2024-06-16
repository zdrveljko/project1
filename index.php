<?php

require_once 'connection.php';

function dd($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    die();
}

dd($posts);
