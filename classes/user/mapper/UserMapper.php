<?php
/**
 * Created by PhpStorm.
 * User: Jan-Lukas
 * Date: 04.04.2019
 * Time: 21:16
 */

namespace user\mapper;

use constants\Constants;
use database\Database;

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

    /**
     * @param int $userId
     * @return array
     */
    public function getUser(int $userId) {
        $database = new Database();
        $constants = new Constants();

        $constants->init();
        $database->buildConnection();

        $fields = " user_id, user_passwort, vorname, nachname, telefon, user_email, session, profile_picture, status," .
                  " aktiv, admin, member ";
        $sql = "SELECT {$fields} FROM user_data WHERE user_id = {$userId}";
        $userModel = $database->selectToArray($sql);
        return $userModel;
    }
}