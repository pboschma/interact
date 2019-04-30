<?php
/**
 * Created by PhpStorm.
 * User: Jan-Lukas
 * Date: 11.04.2019
 * Time: 21:11
 */

namespace base\validation;
use database\Database;

class Sanitize
{
    /**
     * Basic sanitize class for sanitizing and validating inputs to cleaned outputs
     * TODO: ADDING ERROR HANDLING FOR NON VALID OUTPUTS
     */

    /**
     * @param string $input
     * @return String
     */
    public function sanitize(string $input) : String {
        $cleanedOutput = (string) strip_tags($input);
        $cleanedOutput = (string) filter_var(
            $cleanedOutput,
            FILTER_SANITIZE_STRING,
            FILTER_FLAG_STRIP_HIGH
        );
        return $cleanedOutput;
    }


    /**
     * @param string $mail
     * @return String
     */
    public function sanitizeMail(string $mail) : String {
        $cleanedMail = (string) filter_var($mail, FILTER_SANITIZE_EMAIL);
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL) === false) {
        } else {
            $cleanedMail = "";
        }
        return $cleanedMail;
    }


    /**
     * @param string $url
     * @return String
     */
    public function sanitizeUrl(string $url) : String {
        $cleanedUrl = (string)filter_var($url, FILTER_SANITIZE_URL);
        if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
        } else {
            $cleanedUrl = "";
        }
        return $cleanedUrl;
    }


    /**
     * @param string $url
     * @return String
     */
    public function sanitizeUrlPlusQuery(string $url) : String {
        $cleanedUrl = (string)filter_var($url, FILTER_SANITIZE_URL);
        if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
            var_dump("{$cleanedUrl} is valid");
        } else {
            var_dump("{$cleanedUrl} is not valid");
            $cleanedUrl = "";
        }
        return $cleanedUrl;
    }


    /**
     * @param $connection
     * @param string $sql
     * @return String
     */
    public function sanitizeSql($connection, string $sql) : String {
        $cleanedSql = mysqli_real_escape_string($connection, $sql);
        return (String)$cleanedSql;
    }

    public function sanitizeInt(int $int) : Int {
        $cleanedInt = filter_var($int, FILTER_SANITIZE_NUMBER_INT);
        if (filter_var($int, FILTER_VALIDATE_INT) === 0 ||
            !filter_var($int, FILTER_VALIDATE_INT) === false) {
        } else {
            $cleanedInt = 0;
        }
        return $cleanedInt;
    }


    /**
     * @param string $string
     * @return String
     */
    public function sanitizeString(string $string) : String {
        $cleanedString = (string) strip_tags($string);
        $cleanedString = (string) filter_var(
            $cleanedString,
            FILTER_SANITIZE_STRING,
            FILTER_FLAG_STRIP_HIGH
        );
        return $cleanedString;
    }

    /*
     * TODO: ADD SANITIZE FOR THOSE INPUT TYPES ASWELL IF NEEDED
     * NOTE: METHODS FROM HERE ON CANT BE USED IN REAL CODE YET
     */

    /**
     * @param $boolean
     * @return mixed
     */
    public function sanitizeBoolean($boolean) : bool {
        $cleanedBoolean = $boolean;
        return $cleanedBoolean;
    }

    /**
     * @param array $request
     * @return array
     */
    public function sanitizeRequest(array $request) {
        $cleanedRequest = $request;
        return $cleanedRequest;
    }

    /**
     * @param array $post
     * @return array
     */
    public function sanitizePost(array $post) {
        $cleanedPost = $post;
        return $cleanedPost;
    }

    /**
     * @param array $get
     * @return mixed
     */
    public function sanitizeGet(array $get) {
        $cleanedGet = $get;
        return $cleanedGet;
    }


    /**
     * @param string $html
     * @return String
     */
    public function sanitizeHTML(string $html) : String {
        $cleanedHtml = $html;
        return $cleanedHtml;
    }
}