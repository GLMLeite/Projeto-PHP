<?php
$host = 'mysql:dbname=banco_lpw; host=localhost';
$user = 'root';
$password = '';





try{
    $conn= new PDO($host, $user, $password);
    
} catch (PDOException $ex) {
    var_dump($ex);
    die();

}



