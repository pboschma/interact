<?php
/**
 * Created by PhpStorm.
 * user: Jan-Lukas Müller
 * Date: 19.03.2019
 * Time: 14:35
 */
namespace database;

class DatabaseConfig
{
    public function __construct()
    {

    }

    public function defineDatabaseConstants() {
        define('SERVER', 'localhost');
        define('USER_NAME', 'u36244p31547_interact');
        define('PASSWORD', 'ekNte6');
        define('DATABASE_NAME', 'u36244p31547_interact');
    }
}