<?php
/**
 * 1.建立資料庫及資料表來儲存檔案資訊
 * 2.建立上傳表單頁面
 * 3.取得檔案資訊並寫入資料表
 * 4.製作檔案管理功能頁面
 */
include_once "base.php";

if(!empty($_FILES) && $_FILES['file']['error']==0){

    $note=$_POST['note'];
    $type=$_FILES['file']['type'];
    $filename=$_FILES['file']['name'];
    $path="./upload/" . $filename;
    
    move_uploaded_file($_FILES['file']['tmp_name'] , $path);

    $sql="insert into portfolio (`name`,`type`,`path`,`note`) values('$filename','$type','$path','$note')";

    $result=$pdo->exec($sql);
}

?>
    <style>
    
    
    </style>
</head>
<body>
<h1 class="header">檔案管理練習</h1>
<!----建立上傳檔案表單及相關的檔案資訊存入資料表機制----->
<form action="./api/portfolio_add.php" method="post" enctype="multipart/form-data">
  檔案：<input type="file" name="file" ><br><br>
  說明：<input type="text" name="text" ><br>
  <input type="submit" class="btn" value="上傳">
</form>

<!----透過資料表來顯示檔案的資訊，並可對檔案執行更新或刪除的工作----->

<table>
    <tr>
        <td>作品名稱</td>
        <td>檔名</td>
        <td>縮圖</td>
        <td>操作</td>
    </tr>

    <?php
        $rows = selectA("portfolio");
        foreach ($rows as $key => $file) {  
    ?>
    <tr>
        <td><?=$file['text'];?></td>
        <td><?=$file['name'];?></td>
        <td><img src="<?=$file['path'];?>" style="width:100px;height:50px;"></td>
        <td>
            <button class='del btn' data-id="<?=$file['id'];?>">刪除檔案</button>
        
        </td>
    </tr>
   
    <?php
     }
    ?>

</table>


