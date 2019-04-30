<?php namespace Database;
require('Conn.php');

class Db
{
    private static $oDb;

    public static function db_connect($sHost, $sUser, $sPassword, $sName)
    {
        $oConnection = new \Database\Conn($sHost, $sUser, $sPassword, $sName);
        self::$oDb = $oConnection->getConnection();
    }

    public static function db()
    {
        return self::$oDb;
    }
}