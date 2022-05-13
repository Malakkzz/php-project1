<?php
//connecting to a database
    $host="localhost";
    $db="restaurant";
    $user="root";
    $pass="";
    $charset="utf8";

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e) {
        throw new PDOException($e->getMessage());
    }
//finish connecting
    require_once 'crud.php';
    $crud = new crud($pdo);
?>