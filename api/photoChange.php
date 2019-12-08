<?php
include_once ("../api/base.php");

if(!empty( $_FILES['name']['tmp_name'])){
    move_uploaded_file( $_FILES['name']['tmp_name'], "../img/photo_sticker.jpg");
    header("location:../admin.php");
}





?>