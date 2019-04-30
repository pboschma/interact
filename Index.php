<?php
// require_once('Include.php');
require_once('_autoloader.php');

use database\Database;
use constants\Constants;

//declaring objects for initialization
$database = new Database();
$constants = new Constants();

//bootstrap
$constants->init();
$database->buildConnection();

$sql = "SELECT vorname, user_id FROM tbl_user";
$test = $database->selectScalar($sql);
var_dump($test);

