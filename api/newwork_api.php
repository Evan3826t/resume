<?php
include_once ("base.php");
$row = selectA("newwork");


?>
<style>
td{
    width: 100px;
}
</style>
<h2>求職狀態</h2>
<table style="text-align:center">
    <tr>
        <td>工作地點</td>
        <td>工作類型</td>
        <td>希望待遇</td>
        <td>職位</td>
        <td>顯示</td>
    </tr>
    <?php
    foreach( $row as $value){
        echo "<tr>";
        echo "<td>" . $value['location'] . "</td>";
        echo "<td>" . $value['work_type'] . "</td>";
        echo "<td>" . $value['salary'] . "</td>";
        echo "<td>" . $value['position'] . "</td>";
        echo "<input type='hidden' id='uid' value='" . $value['id'] . "'>";
        if( $value['sh'] == 1){
            echo "<td>✔</td>";
        }else{
            echo "<td>X</td>";
        }
        
        echo "<td><input type='button' class='edit'  data-id='" . $value['id'] . "' value='修改'></td>";
        echo "</tr>";
    }
   
    ?>
</table>

