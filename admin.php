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
            <div class="photo">
                <img src="./img/photo_sticker.jpg" alt=""><br>
                <input type="button" style="margin-left:80px" id="photoEdit" value="修改照片">
            </div>
            <div class="information">
                <form action="">
                    <?php
                        include_once ("./api/base.php");
                        $profile =selectA("information");
                        foreach( $profile as $row){
                            echo "<input type='hidden' id='id' name='id' value='$row[id]'><br>";
                            echo "姓名：<input type='text' id='name' name='name' value='$row[name]'><br>";
                            echo "生日：<input type='text' id='birthday' name='birthday' value='$row[birthday]'><br>";
                            echo "聯絡地址：<input type='text' id='addr' name='addr' value='$row[addr]'><br>";
                            echo "畢業學校：<input type='text' id='Education' name='Education' value='$row[Education]'><br>";
                            echo "科系：<input type='text' id='major' name='major' value='$row[major]'><br>";
                        }
                    ?>
                    <input type="button" value="修改" id="profileEdit">
                    <input type="reset" value="重置">
                </form>
            </div>

        
        </div>
        <div class="login">登出</div>
        <div class="middle">
            <div class="select">
                <div id="skill">專業技能 <i class="fas fa-angle-right"></i></div>
                <div id="work">工作經歷 <i class="fas fa-angle-right"></i></a></div>
                <div id="license">證照 <i class="fas fa-angle-right"></i></a></div>
                <div id="coverLetter">自傳 <i class="fas fa-angle-right"></i></a></div>
                <div id="newwork">求職狀態<i class="fas fa-angle-right"></i></a></div>
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
            <input id="type3" type="text"><br>
            <input id="type4" type="text"><br>
            <input id="type5" type="text"><br>
            <button id="editBtn">修改</button>
            <button class="cancel">取消</button>
        </div>
        <div id="profile">
            <div>自傳</div>
            <textarea name="" id="typeProfile" cols="60" rows="20"></textarea><br>
            <button id="proBtn">修改</button>
            <button class="cancel">取消</button>
        </div>
        <div id="photoChange">
            <div>更換照片</div>
            <form action="./api/photoChange.php" method="POST" enctype="multipart/form-data">
                選擇檔案：<input type="file" name="name">
                <br><br><input type="submit" value="確認">
            </form>
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
            if( select == "information"){
                $(".proEdit").on("click",function(){
                    let uid = $(this).data("id");
                    $.post("./api/getData.php",{"table":select, uid},function(res){
                    let data = JSON.parse(res);
                    $("#typeProfile").val(data[6]);
                })
                $("#proBtn").attr("data-id", uid);
                $("#modal").show();
                $("#edit").hide();
                $("#delete").hide();
                $("#profile").show();
                $("#profile").show();
                $("#photoChange").hide();
                })
            }else{
                $(".edit").on("click", function(){               
                let uid = $(this).data("id");
                console.log(uid)
                if(select == 'newwork'){
                    $("#type2").show();
                    $("#type3").show();
                    $("#type4").show();
                    $("#type5").show();
                }else if(select == 'work'){
                    $("#type2").show();
                }else{
                    $("#type2").hide();
                    $("#type3").hide();
                    $("#type4").hide();
                    $("#type5").hide();
                }
                
                
                $.post("./api/getData.php",{"table":select, uid},function(res){
                    let data = JSON.parse(res);
                    $("#type1").val(data[1]);
                    $("#type2").val(data[2]);
                    $("#type3").val(data[3]);
                    $("#type4").val(data[4]);
                    $("#type5").val(data[5]);
                })

                $("#editBtn").attr("data-id", uid);
                $("#modal").show();
                $("#edit").show();
                $("#delete").hide();
                $("#profile").hide();
                $("#photoChange").hide();
        })
            }
            $(".del").on("click", function(){
                let uid = $(this).data('id');
                $("#delBtn").attr("data-id", uid);
                $("#modal").show();
                $("#edit").hide();
                $("#delete").show();
                $("#profile").hide();
                $("#photoChange").hide();
            })
        })
    }

    $("#skill").on("click", function(res){
        query("skill_api");
        select = "skill";
        console.log(select);
        $("#skill").css("background-color", "#F5F5F5");
        $("#work").css("background-color", "white");
        $("#license").css("background-color", "white");
        $("#coverLetter").css("background-color", "white");
        $("#newwork").css("background-color", "white");
    })

    $("#work").on("click", function(res){
        query("work_api");
        select = "work";
        console.log(select);
        $("#skill").css("background-color", "white");
        $("#work").css("background-color", "#F5F5F5");
        $("#license").css("background-color", "white");
        $("#coverLetter").css("background-color", "white");
        $("#newwork").css("background-color", "white");
    })
    
    $("#license").on("click", function(res){
        query("license_api");
        select = "license";
        console.log(select);
        $("#skill").css("background-color", "white");
        $("#work").css("background-color", "white");
        $("#license").css("background-color", "#F5F5F5");
        $("#coverLetter").css("background-color", "white");
        $("#newwork").css("background-color", "white");
    })
    
    $("#coverLetter").on("click", function(res){
        query("coverLetter_api");
        select = "information";
        console.log(select);
        $("#skill").css("background-color", "white");
        $("#work").css("background-color", "white");
        $("#license").css("background-color", "white");
        $("#coverLetter").css("background-color", "#F5F5F5");
        $("#newwork").css("background-color", "white");
    })
    $("#newwork").on("click", function(res){
        query("newwork_api");
        select = "newwork";
        console.log(select);
        $("#skill").css("background-color", "white");
        $("#work").css("background-color", "white");
        $("#license").css("background-color", "white");
        $("#coverLetter").css("background-color", "white");
        $("#newwork").css("background-color", "#F5F5F5");    })
    
    $("#editBtn").on("click", function(){
        let uid = $("#editBtn").attr("data-id");
        console.log(uid);
        let data = [$("#type1").val()];
        if(select == "work"){
            data.push($("#type2").val());
        }
        if(select == "newwork"){
            data.push($("#type2").val());
            data.push($("#type3").val());
            data.push($("#type4").val());
            data.push($("#type5").val());
        }
        console.log(data);
        $.post("./api/edit.php",{"table":select, uid, data},function(res){
            console.log(res);
            $("#modal").hide();
            query(select+"_api");
        })
    })

    $("#proBtn").on("click", function(){
        let uid = $("#proBtn").attr("data-id");
        console.log(uid);
        let data = [$("#typeProfile").val()];
        console.log(data);
        $.post("./api/edit.php",{"table":select, uid, data},function(res){
            console.log(res);
            $("#modal").hide();
            query("coverLetter_api");
        })
    })

    $("#delBtn").on("click", function(){
        let uid = $("#delBtn").data("id");
        console.log(uid ,select);
        $.post("./api/del.php",{"table":select,uid},function(res){
            $("#modal").hide();
           query( select + "_api");
        })
    })

    $(".cancel").on("click", function(){
        $("#modal").hide();
    })

    $("#photoEdit").on("click", function(){
        
    })

   $(function(){
        $("#profileEdit").on("click", function(){
           let data = [ $("#name").val(), $("#birthday").val(), $("#addr").val(), $("#Education").val(), $("#major").val()];
           let uid = $("#id").val();
           $.post("./api/edit.php", {"table":"informationP", uid, data}, function(res){
                location.reload();
           })
        })
   })
   
   $("#photoEdit").on( "click", function(){
    $("#modal").show();
    $("#edit").hide();
    $("#delete").hide();
    $("#profile").hide();
    $("#photoChange").show();
   })
   
   
  
    </script>
</body>
</html>