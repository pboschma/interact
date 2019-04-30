<script src="js/index.js"></script>
<?php
require_once('_autoloader.php');

use database\Database;
use constants\Constants;

//declaring objects for initialization
$database = new Database();
$constants = new Constants();

//bootstrap
$constants->init();
$database->buildConnection();



