<?php

namespace user\mapper;

use constants\Constants;
use database\Database;

class UserMapper
{
    public function create($userModel) {
        $database = new Database();
        $constants = new Constants();

        $constants->init();
        $database->buildConnection();

        $vorname = $userModel->getVorname();
        $nachname = $userModel->getNachname();
        $password = $userModel->getPassword();
        $mail = $userModel->getMail();

        $sql = "INSERT INTO tbl_user (vorname, nachname, user_email, user_passwort)" .
               " VALUES ({$vorname}, {$nachname}, {$mail}, {$password})";

        if(!$database->execute($sql)){
            return false;
        }

        return true;
    }

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