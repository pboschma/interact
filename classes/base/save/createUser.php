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

require_once('../../../_autoloader.php');

$sanitize = new base\validation\Sanitize();
$encryption = new base\validation\Encryption();
$userModel = new user\User();
$userMapper = new user\mapper\UserMapper();
$base = new base\Base;

/**
 * Parsing data to Model
 */

if (isset($_REQUEST['first_name']) && !is_null($_REQUEST['first_name'])) {
    $cleanedUserName = $sanitize->sanitizeString($_REQUEST['first_name']);
    $userModel->setVorname($cleanedUserName);
}

if (isset($_REQUEST['last_name']) && !is_null($_REQUEST['last_name'])) {
    $cleanedLastName = $sanitize->sanitizeString($_REQUEST['last_name']);
    $userModel->setNachname($cleanedLastName);
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
    $base::json([
        'status' => 'error',
        'content' => 'Die Passwörter stimmen nicht überein!'
    ]);
}

if ((String)$userModel->getMail() === "") {
    $base::json([
        'status' => 'error',
        'content' => 'Bitte geben Sie eine gültige E-Mail Adresse ein!'
    ]);
}

if ((String)$userModel->getVorname() === "") {
    $base::json([
        'status' => 'error',
        'content' => 'Bitte geben Sie einen gültige Vorname ein!'
    ]);

}

if ((String)$userModel->getNachname() === "") {
    $base::json([
        'status' => 'error',
        'content' => 'Bitte geben Sie einen gültige Nachname ein!'
    ]);

}

$userModel->setActive(1);
$blankPassword = $userModel->getPassword();
$encryptedPassword = $encryption->encrypt($blankPassword);
$userModel->setPassword($encryptedPassword);

$addUser = $userMapper->create($userModel);
$base::json([
    'status' => 'error',
    'error' => $addUser
]);

if(!$addUser) {
    $base::json([
        'status' => 'error',
        'activeState' => 'Das registrieren ist leider fehlgeschlagen.'
    ]);
}

$base::json([
    'status' => 'success',
    'activeState' => $userModel->getActive()
]);

