<?php namespace Database;
require('Db.php');

class Conn
{
    private $sHost, $sUsername, $sPassword, $sDbName;
    private $oConnection;

    public function __construct($sHost, $sUsername, $sPassword, $sDbName)
    {
        $this->sHost = $sHost;
        $this->sUsername = $sUsername;
        $this->sPassword = $sPassword;
        $this->sDbName = $sDbName;
        $this->connect();
    }

    private function connect()
    {
        try {
            $this->oConnection = new \PDO("mysql:dbname=$this->sDbName;host=$this->sHost",
                $this->sUsername,
                $this->sPassword);
            $this->oConnection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }catch(\PDOException $e) {
            throw new \Exception("DB connection failed:" . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->oConnection;
    }
}