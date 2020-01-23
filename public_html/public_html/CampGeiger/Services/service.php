<?php
$dsn = 'mysql:host=student2014.ecc.iwcc.edu;dbname=bsmith257_my_guitar_shop1;charset=utf8';
$username = 'bsmith257';
$password = 'Reiver2018';

try{
    $dsn = new PDO($dsn, $username, $password);
    $statement = $dsn->prepare('select * from Geiger2019');
    $statement->execute();
    $results = $statement->fetchAll();
    $json = json_encode($results);
    header('Content-Type: application/json; charset=utf-8');
    if($json){
        echo $json;
    }
    else{
        echo json_last_error_msg();
    }

}
catch (PDOException $e){
    echo $error_message = json_encode($e->getMessage());
    exit();
}
?>