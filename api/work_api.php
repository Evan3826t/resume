<H2>工作經歷</H2>
<table>
    <tr>
        <td>公司名稱</td>
        <td>職位</td>
    </tr>
<?php
include_once ("base.php");

$data = selectA("work");
foreach($data as $row){
    ?>
    <tr>
        <td><?=$row['work']?></td>
        <td><?=$row['position']?></td>
        <td>
            <input type="button" class="edit" data-id="<?=$row['id']?>" value="更改">
            <input type="button" class="del" data-id="<?=$row['id']?>" value="刪除">
        </td>
    </tr>

    <?php
}
?>
</table>
