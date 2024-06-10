<?php

$host = 'localhost';
$db = 'gabre_khatti';
$user = 'root';
$password = '24081381';
function connect ( $db , $user , $password , $host )
{
    $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        return $pdo = new PDO ($dsn , $user , $password , $options);
    }
    catch ( PDOException $e ){
        echo $e -> getMessage();
    }
}
return connect( $db , $user , $password , $host );