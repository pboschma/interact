<?php
define("DS", DIRECTORY_SEPARATOR);
define("ROOT", dirname(__DIR__) . DS . 'public_html');



spl_autoload_register(function($sClassPath)
{
    $sClassPath = str_replace('\\', '/', $sClassPath);

    if(file_exists(ROOT . DS . $sClassPath . '.php'))
    {
        require_once ROOT . DS . $sClassPath . '.php';
    }
    else if(file_exists(ROOT . DS . 'classes'. DS . $sClassPath . '.php'))
    {
        require_once ROOT . DS . 'classes' . DS . $sClassPath . '.php';
    }
    else if(file_exists(ROOT . DS . 'assets'. DS . $sClassPath . '.php'))
    {
        require_once ROOT . DS . 'assets' . DS . $sClassPath . '.php';
    }
    else
    {
        throw new Exception("Couldn't find the class " . $sClassPath);
    }
});
