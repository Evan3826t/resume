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
                <div id="skills">專業技能 <i class="fas fa-angle-right"></i></div>
                <div id="work">工作經歷 <i class="fas fa-angle-right"></i></a></div>
                <div id="license">證照 <i class="fas fa-angle-right"></i></a></div>
                <div id="coverLetter">自傳 <i class="fas fa-angle-right"></i></a></div>
            </div>
            <div class="content">
             
            </div>
        </div>       
    </div>
    <script>
    $(".login").on("click", function(){
        window.location = "index.php";
    })

    function query($table){

    }

    $("#skills").on("click", function(res){
    })
    $("#work").on("click", function(res){

    })
    $("#license").on("click", function(res){

    })
    $("#coverLetter").on("click", function(res){

    })
    </script>
</body>
</html>