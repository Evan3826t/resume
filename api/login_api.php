<?php
include_once ("base.php");
$acc = $_GET['acc'];

$stu = select("information", $acc);

echo json_encode($stu);


?>