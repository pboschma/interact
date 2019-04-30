<script>
    window.top.location.href="views/login/login.php";
</script>
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



