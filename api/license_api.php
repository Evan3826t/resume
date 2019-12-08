<h2>證照</h2>
<table id="tb">
<input type="button" id="addItem" value="新增">


<?php
include_once ("base.php");

$data = selectA("license");
$i = 1;
foreach($data as $row){
    ?>
    <tr>
        <td><?=$i?>_<?=$row['license']?></td>
        <td>
            <input type="button" class="edit" data-id="<?=$row['id']?>" value="更改">
            <input type="button" class="del" data-id="<?=$row['id']?>" value="刪除">
        </td>
    </tr>

    <?php
    $i++;
}
?>
</table>
<script>
    $("#addItem").on("click", function(){
        let text = ` <tr><td><input type="text" id="newAdd" name="skill" ></td>
                        <td>
                            <input type="button" class="add" value="新增">
                            <input type="button" class="cancel" value="取消"><br>
                        </td>
                    </tr>`;
        $("#tb").append( text);
        $(".add").on("click", function(){
            let data = [];
            data.push( $("#newAdd").val());
            $.post( "./api/add.php", { "select":select, data}, function(res){
                query( "license_api");
            })
        })
        $("#addItem").attr("disabled", true);
        $(".cancel").on( "click", function(){
            query( "license_api");
        })

    })
</script>