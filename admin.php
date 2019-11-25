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
        <div class="title"></div>
        <div class="login">登出</div>
        <div class="middle">
            <div class="select">
                <div id="skill">專業技能 <i class="fas fa-angle-right"></i></div>
                <div id="work">工作經歷 <i class="fas fa-angle-right"></i></a></div>
                <div id="license">證照 <i class="fas fa-angle-right"></i></a></div>
                <div id="coverLetter">自傳 <i class="fas fa-angle-right"></i></a></div>
            </div>
            <div class="content">
            </div>
        </div>       
    </div>
    <div id="modal">
        <div id="delete">
            <div>確認刪除?</div>
            <button id="delBtn">刪除</button>
            <button class="cancel">取消</button>
        </div>
        <div id="edit">
            <div>確認修改?</div>
            <input id="type1" type="text"><br>
            <input id="type2" type="text"><br>
            <button id="editBtn">修改</button>
            <button class="cancel">取消</button>
        </div>
    </div>
    <?php
        include_once ("./api/base.php");
    ?>
    <script>
    $(".login").on("click", function(){
        window.location = "index.php";
    })
    var select = "";
    function query(table){
        $.get("./api/" + table + ".php",function(res){
            $(".content").html(res);
            $(".edit").on("click", function(){
                let uid = $(this).data("id");
                console.log(uid)
                if(select == 'work'){
                    $("#type2").show();
                }else{
                    $("#type2").hide();
                }
                $.post("./api/getData.php",{"table":select, uid},function(res){
                    let data = JSON.parse(res);
                    $("#type1").val(data[1]);
                    $("#type2").val(data[2]);
                })

                $("#editBtn").attr("data-id", uid);
                $("#modal").show();
                $("#edit").show();
                $("#delete").hide();
            })
            $(".del").on("click", function(){
                let uid = $(this).data('id');
                $("#delBtn").attr("data-id", uid);
                $("#modal").show();
                $("#edit").hide();
                $("#delete").show();
            })
        })
    }

    $("#skill").on("click", function(res){
        query("skill_api");
        select = "skill";
        console.log(select);
    })

    $("#work").on("click", function(res){
        query("work_api");
        select = "work";
        console.log(select);

    })
    
    $("#license").on("click", function(res){
        query("license_api");
        select = "license";
        console.log(select);

    })
    
    $("#coverLetter").on("click", function(res){
        query("coverLetter_api");
        select = "coverLetter";
        console.log(select);

    })
    
    $("#editBtn").on("click", function(){
        let uid = $("#editBtn").attr("data-id");
        console.log(uid);
        let data = [$("#type1").val()];
        if(select == "work"){
            data.push($("#type2").val());
        }
        console.log(data);
        $.post("./api/edit.php",{"table":select, uid, data},function(res){
            console.log(res);
            $("#modal").hide();
            query(select+"_api");
        })
    })

    $("#delBtn").on("click", function(){
        let uid = $("#delBtn").data("id");
        console.log(uid ,select);
        $.post("./api/del.php",{"table":select,uid},function(res){
            $("#modal").hide();
           query(select+"_api");
        })
    })

    $(".cancel").on("click", function(){
        $("#modal").hide();
    })
   
    </script>
</body>
</html>