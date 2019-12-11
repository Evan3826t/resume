<h2>自傳</h2>

<?php
include_once ("./api/base.php");

$data = selectA("information");
?>
<div><?=$data[0]['profile']?></div>
<?php
?>
