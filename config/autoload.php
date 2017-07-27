<?php
/**
 * Created by PhpStorm.
 * User: mouhamed aly sidibe
 * Date: 16/07/2017
 * Time: 13:04
 */

function autoload($classname)
{
    if (file_exists($file = __DIR__ . '/' . $classname . '.php'))
    {
        require $file;
    }
}

spl_autoload_register('autoload');