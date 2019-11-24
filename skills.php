<h2>專業技能</h2>
<table>

<?php
include_once ("./api/base.php");

$data = selectA("skills");
$i = 1;
foreach($data as $row){
    ?>
    <tr>
        <td><?=$i?>-<?=$row['skill']?></td>
    </tr>

    <?php
    $i++;
}
?>
</table>
