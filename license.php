<h2>證照</h2>
<table>

<?php
include_once ("./api/base.php");

$data = selectA("license");
$i = 1;
foreach($data as $row){
    ?>
    <tr>
        <td><?=$i?>-<?=$row['license']?></td>
    </tr>

    <?php
    $i++;
}
?>
</table>
