<?php
class Database {
    private static $dsn = 'mysql:host=student.ecc.iwcc.edu;dbname=bsmith257_my_guitar_shop1';
    private static $username = 'bsmith257';
    private static $password = 'Reiver2018';
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
                include('../errors/database_error.php');
                exit();
            }
        }
        return self::$db;
    }
}
?>