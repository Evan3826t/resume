<H2>工作經歷</H2>
<table>
    <tr>
        <td>公司名稱</td>
        <td>職位</td>
    </tr>
<?php
include_once ("./api/base.php");

$data = selectA("work");
foreach($data as $row){
    ?>
    <tr>
        <td><?=$row['work']?></td>
        <td><?=$row['position']?></td>
    </tr>
    <?php
}
?>
</table>
