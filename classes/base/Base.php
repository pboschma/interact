<?php
/**
 * Created by PhpStorm.
 * User: Jan-Lukas
 * Date: 04.04.2019
 * Time: 22:40
 */

namespace base;


class Base
{
    public static function json(array $data) {
        header('Content-Type: application/json');
        echo json_encode($data);
        exit;
    }
}