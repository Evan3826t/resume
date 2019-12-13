<style>
td{
    width: 100px;
}
</style>
<H2>工作經歷</H2>
<table id="tb" style="text-align:center">
    <input type="button" class="btn" id="addItem" value="新增">
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
            <input type="button" class="edit btn" data-id="<?=$row['id']?>" value="更改">
            <input type="button" class="del btn" data-id="<?=$row['id']?>" value="刪除">
        </td>
    </tr>

    <?php
}
?>
</table>
<script>
    $("#addItem").on("click", function(){
        let text = ` <tr><td><input type="text" id="newWork" name="skill" ></td>
                         <td><input type="text" id="newPosition" name="skill" ></td>
                        <td>
                            <input type="button" class="add btn" value="新增">
                            <input type="button" class="cancel btn" value="取消"><br>
                        </td>
                    </<td>`;
        $("#tb").append( text);
        $(".add").on("click", function(){
            let data = [];
            data.push( $("#newWork").val(), $("#newPosition").val());
            
            $.post( "./api/add.php", { "select":select, data}, function(res){
                query( "work_api");
            })
        })
        $("#addItem").attr("disabled", true);
        $(".cancel").on( "click", function(){
            query( "work_api");
        })
    })
