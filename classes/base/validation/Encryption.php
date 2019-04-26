<?php
/**
 * Created by PhpStorm.
 * User: Jan-Lukas
 * Date: 26.04.2019
 * Time: 23:58
 */

namespace classes\base\validation;


class Encryption
{
    /**
     * Basic sha256 encryption
     * @param String $string
     * @return String
     */
    public function encrypt(String $string) : String {
        $encryptedString = hash('sha256', $string);
        return $encryptedString;
    }
}