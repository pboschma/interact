<?php
/**
 * Created by PhpStorm.
 * user: Jan-Lukas Müller
 * Date: 19.03.2019
 * Time: 14:35
 */
namespace classes\database;

class DatabaseConfig
{
    public function __construct()
    {
    }

    public function defineDatabaseConstants() {
        define('SERVER', 'web0106.zxcs.nl');
        define('USER_NAME', 'u36244p31547_interact');
        define('PASSWORD', '12345');
        define('DATABASE_NAME', 'u36244p31547_interact');
    }
}