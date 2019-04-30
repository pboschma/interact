<?php
/**
 * Created by PhpStorm.
 * user: Jan-Lukas
 * Date: 04.04.2019
 * Time: 20:51
 */

namespace constants;

use database\DatabaseConfig;

class Constants
{
    public function init() {
        $databaseConfig = new DatabaseConfig();
        $databaseConfig->defineDatabaseConstants();
    }
}