<?php
    $dsn = 'mysql:host=student2014.ecc.iwcc.edu;dbname=bsmith257_shop1';
    $username = 'bsmith257';
    $password = 'Reiver2018';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>