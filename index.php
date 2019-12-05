<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Resume</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
   
</head>
<body>
    <div class="main">
        <div class="title">
            <div class="photo"><img src="./img/123.jpg" alt=""></div>
            <div class="information">
                <?php
                    include_once ("./api/base.php");
                    $profile =selectA("information");
                    foreach( $profile as $row){
                        echo "<p>".$profile[0]['name'].'</p>';
                        echo "<p>".$profile[0]['birthday'].'</p>';
                        echo "<p>".$profile[0]['addr'].'</p>';
                        echo "<p>".$profile[0]['Education'].'</p>';
                        echo "<p>".$profile[0]['major'].'</p>';
                    }
                ?>
            
            </div>
        
        </div>
        <div class="login">登入</div>
        <div class="middle">
            <div class="select">
                <div><a href="?do=skill">專業技能 <i class="fas fa-angle-right"></i></a></div>
                <div><a href="?do=work">工作經歷 <i class="fas fa-angle-right"></i></a></div>
                <div><a href="?do=license">證照 <i class="fas fa-angle-right"></i></a></div>
                <div><a href="?do=cover_letter">自傳 <i class="fas fa-angle-right"></i></a></div>
            </div>
            <div class="content">
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