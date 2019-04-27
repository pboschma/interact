<?php
/**
 * Created by PhpStorm.
 * User: Jan-Lukas
 * Date: 24.04.2019
 * Time: 17:14
 */

/**
 * Initializing Classes and requirements
 */

require_once("../../../Include.php");
$sanitize = new \classes\base\validation\Sanitize();
$encryption = new \classes\base\validation\Encryption();
$userModel = new \classes\user\User();
$userMapper = new \classes\user\mapper\UserMapper();
$error = [];
$errorCount = 0;

/**
 * Parsing data to Model
 */

if (isset($_REQUEST['username']) && !is_null($_REQUEST['username'])) {
    $cleanedUserName = $sanitize->sanitizeString($_REQUEST['username']);
    $userModel->setUsername($cleanedUserName);
}

if (isset($_REQUEST['password']) && !is_null($_REQUEST['password'])) {
    $cleanedPassword = $sanitize->sanitizeString($_REQUEST['password']);
    $userModel->setPassword($cleanedPassword);
}

if (isset($_REQUEST['passwordRepeat']) && !is_null($_REQUEST['passwordRepeat'])) {
    $cleanedPasswordRepeat = $sanitize->sanitizeString($_REQUEST['passwordRepeat']);
    $userModel->setPasswordRepeat($cleanedPasswordRepeat);
}

if (isset($_REQUEST['mail']) && !is_null($_REQUEST['mail'])) {
    $cleanedMail = $sanitize->sanitizeMail($_REQUEST['mail']);
    $userModel->setMail($cleanedMail);
}

/**
 * Testing for errors of inputs
 */

if ($userModel->getPasswordRepeat() !== $userModel->getPassword()) {
    $error['password'] = "Die Passwörter stimmen nicht überein!";
    $errorCount++;
}

if ((String)$userModel->getMail() === "") {
    $error['mail'] = "Bitte geben Sie eine gültige E-Mail Adresse ein!";
    $errorCount++;
}

if ((String)$userModel->getUsername() === "") {
    $error['username'] = "Bitte geben Sie einen gültigen Benutzernamen ein!";
    $errorCount++;
}

if((int)$errorCount === 0) {
    $userModel->setActive(1);
    $blankPassword = $userModel->getPassword();
    $encryptedPassword = $encryption->encrypt($blankPassword);
    $userModel->setPassword($encryptedPassword);
    $userMapper->create($userModel);
}

echo $userModel->getActive();
