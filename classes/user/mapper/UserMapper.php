<?php
/**
 * Created by PhpStorm.
 * User: Jan-Lukas
 * Date: 04.04.2019
 * Time: 21:16
 */

namespace classes\user\mapper;

use assets\constants\Constants;
use classes\database\Database;

class UserMapper
{
    /**
     * Creating new user on registration
     * @param $userModel
     */
    public function create($userModel) {
        $database = new Database();
        $constants = new Constants();

        $constants->init();
        $database->buildConnection();

        $username = $userModel->getUsername();
        $password = $userModel->getPassword();
        $mail = $userModel->getMail();

        $sql = "INSERT INTO user_login (username, mail, password)" .
               " VALUES ({$username}, {$mail}, {$password})";

        $database->execute($sql);
    }
}