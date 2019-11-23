<?php

$dsn = "mysql:host=localhost;charset=utf8;dbname=resume";
$pdo = new PDO($dsn,"root","");

function select($table,$value){
    global $pdo;
    $sql = "select * from $table where `acc`='$value'"  ;
    return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
}
?>