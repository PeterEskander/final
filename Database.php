<?php
class Database {
    private static $dsn = 'mysql:host=sql2.njit.edu;dbname=phe3';
    private static $username = 'phe3';
    private static $password = 'Patoura01';
    private static $db;
    private function __construct() {}
    public static function getDB () {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn,
                                     self::$username,
                                     self::$password);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                echo $error_message;
                exit();
            }
        }
        return self::$db;
    }
}
?>