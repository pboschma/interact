<?php
use classes\database\Database;

class Auth
{
    private static $database;
    private static $isAuthenticated = false;
    private static $currentUser;
    private static $sessionId;

    public function __construct()
    {
        self::$database = new Database();
    }

    public static function checkAuthenticated()
    {
        if(!self::$isAuthenticated) {
            // Not authenticated.
        }
    }

    public static function isAuthenticated()
    {
        return self::$isAuthenticated;
    }

    public static function authenticate()
    {
        $authSession = $_SESSION['interact_session'];

        if(!isset($_SESSION['interact_session']))
        {

            $sql = "SELECT `user_id` FROM tbl_sessions WHERE `session_key` = {$authSession}";

            self::$database->buildConnection();
            $getSession = self::$database->execute($sql);

            if($getSession->num_rows == 0) {
                // Unset Session

                return;
            }

            $sessionData = mysqli_fetch_assoc($getSession);
            // set currentUser
        }

    }

    public static function user($userId)
    {
        // return new User..
    }
}