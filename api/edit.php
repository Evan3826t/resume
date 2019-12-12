<?php
include_once ("base.php");
if($_POST['table'] == "newwork"){
    $data = selectA("newwork");
    print_r ($data);
    print_r ($_POST['data']);
    if($_POST['data'][4] != 0){
        foreach( $data as $rows){
            if($rows['id'] == $_POST['data'][4]){
                echo "sh";
                echo "<br>";
                editSh($_POST['table'], $rows['id'],1);
            }else{
                echo "nonesh";
                echo "<br>";
                editSh($_POST['table'], $rows['id'],0);
            }
        }
    }
    

}
echo edit($_POST['table'], $_POST['uid'],$_POST['data']);

?>