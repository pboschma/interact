<?php
/**
 * Created by PhpStorm.
 * user: Jan-Lukas Müller
 * Date: 19.03.2019
 * Time: 14:34
 */
namespace classes\database;

use mysqli;

class Database
{
    public function buildConnection() {

    $connection = new mysqli(SERVER, USER_NAME, PASSWORD, DATABASE_NAME);

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    echo "Connected successfully";

    }
}