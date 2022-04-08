<?php require('server.php'); 
if (isset($_POST['logout'])){
    header('location: login.php');
}?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="minimal-table.css" rel="stylesheet" type="text/css">
    <title>Home</title>

    <style>
        body{
            margin: 0;
            padding: 0;


        }
        
        .home{
            width: 80%;
            margin: 20px auto 0px;
            padding: 5rem;
            text-align: center;
        }
        .Text1{
            width: 45%;
            padding: 0.25rem;
            margin: 0px auto 0px;
            text-align: center;

        }
        .Text2{
            width: 55%;
            padding: 1rem;
            margin: 0px auto 0px;
            border: 3px solid #2d2b2b;
            background-color: #eaeef3;
            text-align: center;
        }
        .Text3{
            font-size: 70%;
            width: 45%;
            padding: 1rem;
            margin: 20px auto 0px;
            text-align: center;

        }

        img{
            width: 25%;
            text-align: center;

        }
        H1{
            font-size: 52px;
            color: #FFFFFF;
            margin: 0px auto 0px;
        }
        .input {
            height: 30px;
            width: 30%;
            padding: 5px 10px;
            font-size: 16px;
            border: 1px solid gray;
            background-color: #FFCCCC;
        }
        .btn {
            padding: 10px;
            font-size: 20px;
            color: white;
            background: black;
            border: none;
            width: 150px;
            border-radius: 5px;
        }
        .Text3{
            font-size: 14px;
        }
        .logout{
            position: fixed;
            right: 40px;
        }
        .btn_log{
            padding: 10px;
            font-size: 20px;
            color: white;
            background: #CC3300;
            border: none;
            width: 150px;
            border-radius: 5px;
        }
        

    </style>
    
        
</head>
<body background="img/6.jpg" >
<div class="logout">
<form action="" method="POST">
    <button type="submit" name="logout" class="btn_log">Logout</button>
</form>
</div>
        
<div class="home">

<H1>Numdosarn Airlines</H1>
    <img src="img/1.png">
    <form method="get" id="form" enctype="multipart/form-dataa" action="search.php">
        <input type="text" name="start" size="20" placeholder="เมืองต้นทาง" value="" class="input">
        <input type="text" name="end" size="20" placeholder="เมืองปลายทาง" value="" class="input">
        <input type="submit" value="search" class="btn">
    </form>
    
</div>

    <div Class="Text3">

        <h5> รายละเอียด การใช้งาน Webpage </h5>
        <a> 
            webpage นี้จะเป็นการใช้งานเพื่อเช็คจำนวณ fight ของเที่ยวบิน ตามเมืองที่ผู้โดยสารต้องการที่เดินทางไป
        </a><br>

        <a>
            webpage นี้สร้างขึ้นมาเพื่อให้ผู้โดยสารดูตารางเที่ยวบินเพื่อ เผื่อเวลามายังสนามบินหรือ เพื่อที่ผู้โดยสารจะได้ไม่ตกเครื่องบิน 
            ขอบคุณครับ/ค่ะ
        </a>

    </div>


    

</body>
</html>