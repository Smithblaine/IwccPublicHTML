<?php
    $dsn = 'mysql:host=student.ecc.iwcc.edu;dbname=Bsmith257_enrollment';
    $username = 'bsmith257';
    $password = 'Reiver2018';
    /*$dsn = 'mysql:host=localhost;dbname=course_enrollment';
    $username = 'mgs_user';
    $password = 'pa55word';*/

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>