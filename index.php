<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Resume</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">


   
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                Resume
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="?do=skill"><i class="fas fa-briefcase"></i> 專業技能</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="?do=work"><i class="far fa-id-badge"></i> 工作經歷</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="?do=license"><i class="far fa-id-card"></i> 證照</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="?do=cover_letter"><i class="fas fa-user-circle"></i> 自傳</a>
                    </li>
                    <li class="nav-item ">
                        <div class="login">登入</div>
                    </li>
                  </ul>
            </div>
        </div>
    </nav>
    <div class="main">
        <div class="title">
            <div class="photo"><img src="./img/photo_sticker.jpg" alt=""></div>
            <div class="information">
                <?php
                    include_once ("./api/base.php");
                    $profile =selectA("information");
                    foreach( $profile as $row){
                        echo "<p>姓名：".$profile[0]['name'].'</p>';
                        echo "<p>生日：".$profile[0]['birthday'].'</p>';
                        echo "<p>住址：".$profile[0]['addr'].'</p>';
                        echo "<p>最高學歷：".$profile[0]['Education'].'</p>';
                        echo "<p>科系：".$profile[0]['major'].'</p>';
                    }
                ?>
            
            </div>
        
        </div>
        
        <div class="middle">
            <?php
                $do = (!empty($_GET['do']))?$_GET['do']:'skill';
                $path = "./" . $do . ".php";
                if(file_exists($path)){
                    include ($path);
                }else{
                    include ("./api/skill.php");
                }
            ?>
        </div>       
    </div>
    <div id="modal">
        <div id="log">
            <div>帳號登入</div>
            帳號：<input type="text" id="acc"><br>
            密碼：<input type="password" id="pw"><br>
            <button id="login">登入</button>
            <button id="logcancel">取消</button>
        </div>
    </div>
    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>

    <script>
    $(".login").on("click", function(){
        $("#modal").show();
    })
    $("#logcancel").on("click", function(){
        $("#modal").hide();
    })
    $("#login").on("click", function(){
        let acc = $("#acc").val();
        let pw = $("#pw").val();
        $.get("./api/login_api.php",{acc},function(res){
            let info = JSON.parse(res);
            if( info['pw'] == pw){
                // 網頁跳轉
                window.location = "admin.php";
            }else{
                alert("帳號或密碼錯誤");
            }
        })
    })
    </script>
</body>
</html>