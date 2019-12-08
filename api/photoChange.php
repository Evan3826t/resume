<?php
include_once ("../base.php");

if(!empty( $_FILES['name']['tmp_name'])){
    move_uploaded_file( $_FILES['file']['tmp_name'], "../img/photo_sticker.jpg")
}





?>