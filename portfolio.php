<style>
</style>
<h2>作品集</h2>
<table>
<tr>
        <td>名稱</td>
        <td>縮圖</td>

    </tr>
<?php
include_once ("./api/base.php");

$data = selectA("portfolio");
foreach( $data as $row){
    ?>
    <tr>
        <td><?=$row['text']?></td>
        <td ><img style="width:200px;" src="<?=$row['path']?>" alt=""></td>
    </tr>

    <?php

}
?>

</table>
