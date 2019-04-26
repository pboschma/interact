<?php
//replacement for autoloader because I don't know how to build one just yet :(
require_once('Include.php');

use \classes\database\Database;
use \assets\constants\Constants;

//declaring objects for initialization
$database = new Database();
$constants = new Constants();

//bootstrap
$constants->init();
$database->buildConnection();

$sql = "SELECT vorname, user_id FROM tbl_user";
$test = $database->selectScalar($sql);
var_dump($test);

