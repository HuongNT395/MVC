<?php

/**
 * Created by PhpStorm.
 * User: kabi1
 * Date: 30/8/2017
 * Time: 10:14 AM
 */
class database
{
    private static $dbName = 'my_guitar_shop2';
    private static $host = 'localhost';
    private static $userName = 'huongnt';
    private static $password = '123456';

    private  static  $conn = null;

    function __construct()
    {
        die('Init function is not allowed');
    }

    public static function connect() {
        if (null == self::$conn) {
            try {
                self::$conn = new PDO("mysql:host=".self::$host."; dbname=".self::$dbName, self::$userName, self::$password);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }
        return self::$conn;
    }
}