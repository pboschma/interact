<?php
/**
 * Created by PhpStorm.
 * User: Jan-Lukas
 * Date: 11.04.2019
 * Time: 21:11
 */

namespace classes\base\validation;


use classes\database\Database;

class Sanitize
{
    /**
     * Basic sanitize class for sanitizing and validating inputs to cleaned outputs
     * TODO: ADDING ERROR HANDLING FOR NON VALID OUTPUTS
     */

    /**
     * @param string $input
     * @return string
     */
    public function sanitize(string $input) {
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
     * @return string
     */
    public function sanitizeMail(string $mail) {
        $cleanedMail = (string) filter_var($mail, FILTER_SANITIZE_EMAIL);
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL) === false) {
            echo("{$cleanedMail} is valid");
        } else {
            echo("{$cleanedMail} is not valid");
            $cleanedMail = "";
        }
        return $cleanedMail;
    }

    /**
     * @param string $url
     * @return string
     */
    public function sanitizeUrl(string $url) {
        $cleanedUrl = (string)filter_var($url, FILTER_SANITIZE_URL);
        if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
            echo("{$cleanedUrl} is valid");
        } else {
            echo("{$cleanedUrl} is not valid");
            $cleanedUrl = "";
        }
        return $cleanedUrl;
    }

    /**
     * @param string $url
     * @return string
     */
    public function sanitizeUrlPlusQuery(string $url) {
        $cleanedUrl = (string)filter_var($url, FILTER_SANITIZE_URL);
        if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
            echo("{$cleanedUrl} is valid");
        } else {
            echo("{$cleanedUrl} is not valid");
            $cleanedUrl = "";
        }
        return $cleanedUrl;
    }

    /**
     * @param $sql
     * @return string
     */
    public function sanitizeSql($connection, string $sql) {
        $cleanedSql = mysqli_real_escape_string($connection, $sql);
        return $cleanedSql;
    }

    public function sanitizeInt(int $int) {
        $cleanedInt = filter_var($int, FILTER_SANITIZE_NUMBER_INT);
        if (filter_var($int, FILTER_VALIDATE_INT) === 0 ||
            !filter_var($int, FILTER_VALIDATE_INT) === false) {
            echo("{$cleanedInt} is valid");
        } else {
            echo("{$cleanedInt} is not valid");
            $cleanedInt = 0;
        }
        return $cleanedInt;
    }

    /**
     * @param string $string
     * @return string
     */
    public function sanitizeString(string $string) {
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
    public function sanitizeBoolean($boolean) {
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
     * @return string
     */
    public function sanitizeHTML(string $html) {
        $cleanedHtml = $html;
        return $cleanedHtml;
    }
}