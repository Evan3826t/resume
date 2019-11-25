<?php

include_once ("base.php");
$data = selectById($_POST['table'], $_POST['uid']);

echo json_encode($data);
?>