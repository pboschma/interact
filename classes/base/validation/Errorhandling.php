<?php
/**
 * Created by PhpStorm.
 * User: Jan-Lukas
 * Date: 27.04.2019
 * Time: 00:56
 */

namespace base\validation;


class Errorhandling
{
    /**
     * @param string $message
     * @return String
     */
    public function createError(string $message) : String {
        $output = file_get_contents("../../views/errors/basic_error/basic-error.php");
        $output = sprintf($output, $message);
        return $output;
    }
}