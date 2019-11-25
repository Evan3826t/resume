
<?php
include_once ("base.php");

$data = selectA("information");
?>
<h2>自傳</h2>
<div class="coverLetter"><?=$data[0]["profile"]?></div>
<div>
    <input type="button" class="proEdit" data-Id="<?=$data[0]['id']?>" value="更改">
</div>