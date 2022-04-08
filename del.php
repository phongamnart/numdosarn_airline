<?php
include('server.php');
if(isset($_POST) && !empty($_POST)){
    //print_r($_POST);
    $flight = $_POST['flight'];
    $sql = "DELETE FROM flight WHERE flight = '$flight'";
    $query = mysqli_query($conn, $sql);
    if($query){
        header('location: show.php');
    }else{
        echo "Error";
    }
}
?>
<head>
    <title> ยืนยันการลบข้อมูล </title>
    <style>
        body{
            text-align: center;
        }
        .Form{
            width: 30%;
            padding: 5rem;
            margin: 0px auto 0px;
            background-color: #eaeef3;
            border-radius: 10px 10px 10px 10px;

        }
        div{
            padding: 17rem;

        }
        .btn{
            padding: 10px;
            font-size: 20px;
            border: none;
            background: #ddff00;
            width: 150px;
            border-radius: 5px;
        }
        .Text1{
            padding: 10px;
                font-size: 20px;
                color: white;
                background: #37f13b;
                border: none;
                width: 150px;
                border-radius: 5px;

        }

    </style>
</head>
<body background="img/6.jpg">
    <div>
        <form action="" method="post" class="Form">
            <input type="hidden" name="flight" value="<?=$_GET['flight']?>">
            <label>คุณต้องการลบข้อมูลหรือไม่ ?</label><br><br>
            <input type="submit" value="ยืนยัน" class="Text1">
            <button type="submit" class="btn" name="cancel">ยกเลิก</button>
        </form>
    </div>
</body>