<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Resume</title>
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <style>
    .main{
        width: 1024px;
        height: 768px;
        background-color: aqua;
        margin: auto;
        position: relative;
        top: 25px;
    }
    .title{
        width: 100%;
        height: 200px;
        background-color: blanchedalmond;
    }
    .middle{
        width: 100%;
        height: calc( 768px - 200px);
        background-color: blue;
        position: relative;
    }
    .select{
        width: 200px;
        height: 100%;
        background-color: blueviolet;
        display: inline-block;

    }
    .content{
        width: calc( 100% - 200px);
        height: 100%;
        background-color: brown;
        position: absolute;
        left: 200px;
        display: inline-block;
    }
    .login{
        position: absolute;
        right: 10px;
        top: 10px;
        border: 2px solid black;
    }
    #modal{
        width: 100%;
        height: 100vh;
        background:rgba(200,200,200,0.8);
        display: none;
        position: absolute;
        z-index: 90;
        top: 0;
        left: 0;
    }
    #log{
        width: 250px;
        height: 150px;
        margin: auto;
        background-color: ivory;
        position: relative;
        top: 250px;
        padding: 50px;
    }
    </style>
</head>
<body>
    <div class="main">
        <div class="title"></div>
        <div class="login">登入</div>
        <div class="middle">
            <div class="select">
                <a href="?do=profile">個人簡介</a><br>
                <a href="?do=skills">專業技能</a><br>
                <a href="?do=work">工作經歷</a><br>
                <a href="?do=license">證照</a><br>
                <a href="?do=cover_letter">自傳</a>
            </div>
            <div class="content">
                <?php
                    $do = (!empty($_GET['do']))?$_GET['do']:'porfile';
                    $path = "./content/" . $do . ".php";

                    if(file_exists($path)){
                        include ($path);
                    }else{
                        include ("./content/profile.php");
                    }
                ?>
            </div>
        </div>       
    </div>
    <div id="modal">
        <div id="log">
            <div>帳號登入</div>
            帳號：<input type="text" id="acc"><br>
            密碼：<input type="text" id="pw"><br>
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