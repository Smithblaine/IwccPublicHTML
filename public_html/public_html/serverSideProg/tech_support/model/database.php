<?php
    $dsn = 'mysql:host=student2014.ecc.iwcc.edu;dbname=bsmith257_tech_support';
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