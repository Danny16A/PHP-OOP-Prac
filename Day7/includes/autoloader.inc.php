<?php

spl_autoload_register('myAutoloader');

function myAutoloader($className) {
    $path = "classes/";
    $extension = ".class.php";
    $fullPath = $path . $className . $extension;

    if (!file_exists($fullPath))
    {
        
    }

    include_once $fullPath;
}