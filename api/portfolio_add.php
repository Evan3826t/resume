<?php
include_once "base.php";

if(!empty($_FILES) && $_FILES['file']['error']==0){

    $text=$_POST['text'];
    $type=$_FILES['file']['type'];
    $filename=$_FILES['file']['name'];
    $path="./img/" . $filename;
    
    move_uploaded_file($_FILES['file']['tmp_name'] , "." . $path);

    $sql="insert into portfolio (`name`,`type`,`path`,`text`) values('$filename','$type','$path','$text')";

    $result=$pdo->exec($sql);
}
header("location:../admin.php");
?>

