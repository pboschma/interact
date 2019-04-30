<?php
/**
 * Created by PhpStorm.
 * user: Jan-Lukas Müller
 * Date: 19.03.2019
 * Time: 14:34
 */
namespace database;

use base\validation\Sanitize;

class Database
{
    protected $connection;

    /**
     * Builds core database connection
     */
    public function buildConnection() {
        $connection = mysqli_connect(SERVER, USER_NAME, PASSWORD, DATABASE_NAME);

        // Check connection
        if (!$connection) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $this->setConnection($connection);
    }

    /**
     * Getter for database connection
     * @return mixed
     */
    public function getConnection() {
        return $this->connection;
    }

    /**
     * Setter for database connection
     * @param $connection
     */
    public function setConnection($connection) {
        $this->connection = $connection;
    }

    /**
     * Returns array with values in correlation to query input string
     * @param String $sql
     * @return array
     */
    public function selectToArray(String $sql) {
        $connection = $this->getConnection();
        $sanitize = new Sanitize();
        $sanitizedSql = $sanitize->sanitizeSql($connection, $sql);
        $result = mysqli_query($connection, $sanitizedSql);
        $val = (array) mysqli_fetch_array($result, MYSQLI_ASSOC);
        $this->endConnection($connection);
        return $val;
    }


    /**
     * Returns single value in correlation to query input string
     * @param String $sql
     * @return string
     */
    public function selectScalar(String $sql) {
        $connection = $this->getConnection();
        $sanitize = new Sanitize();
        $sanitizedSql = $sanitize->sanitizeSql($connection, $sql);
        $result = mysqli_query($connection, $sanitizedSql);
        $valArray = (array)mysqli_fetch_assoc($result);
        $val = (String)array_pop(array_reverse($valArray));
        $this->endConnection($connection);
        return $val;
    }

    /**
     * Executes input query string on database
     * @param String $sql
     */
    public function execute(String $sql) {
        $connection = $this->getConnection();
        $sanitize = new Sanitize();
        $sanitizedSql = $sanitize->sanitizeSql($connection, $sql);
        mysqli_query($connection, $sanitizedSql);
    }

    /**
     * Ends connection session to database
     * @param $connection
     */
    public function endConnection($connection) {
        mysqli_close($connection);
    }

}