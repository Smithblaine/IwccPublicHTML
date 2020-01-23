<?php
    $dsn = 'mysql:host=student.ecc.iwcc.edu;dbname=my_guitar_shop1';
    $username = 'bsmith257';
    $password = 'Reiver2018';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>