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
$loginMapper = new \classes\user\mapper\UserMapper();
$database = new \classes\database\Database();
$error = [];
$errorCount = 0;

/**
 * Parsing data to Model
 */

if (isset($_REQUEST['username']) && !is_null($_REQUEST['username'])) {
    $cleanedUserName = $sanitize->sanitizeString($_REQUEST['username']);
}

if (isset($_REQUEST['password']) && !is_null($_REQUEST['password'])) {
    $cleanedPassword = $sanitize->sanitizeString($_REQUEST['password']);
    $encryptedPasswordLogin = $encryption->encrypt($cleanedPassword);
}

$sql = "SELECT id FROM tbl_user WHERE username = {$cleanedUserName}";
$userId = (int)$database->selectScalar($sql);
$userModel = $userMapper->getUser($userId);

if ($userModel['password'] === $encryptedPasswordLogin && $cleanedUserName === $userModel['username']) {

}


if((int)$errorCount === 0) {
    $userModel->setActive(1);
    $blankPassword = $userModel->getPassword();
    $encryptedPassword = $encryption->encrypt($blankPassword);
    $userModel->setPassword($encryptedPassword);
    $userMapper->create($userModel);
}

echo $userModel->getActive();
