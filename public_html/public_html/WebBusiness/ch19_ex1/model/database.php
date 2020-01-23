<?php
$dsn = 'mysql:host=student.ecc.iwcc.edu;dbname=bsmith257_my_guitar_shop2';
$username = 'bsmith257';
$password = 'Reiver2018';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include 'errors/db_error_connect.php';
    exit;
}

function display_db_error($error_message) {
    include 'errors/db_error.php';
    exit;
}
?>