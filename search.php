<?php require('server.php');?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="minimal-table.css" rel="stylesheet" type="text/css">
    <title>Search</title>
   <style>
       body {
    font-size: 120%;
    background: #f8f8f8;
    background-image: url("img/6.jpg");
}
.header {
    width: 98%;
    margin: 50px auto 0px;
    color: white;
    background: 	#009900;
    text-align: center;
    border: 1px solid #b0c4de;
    border-bottom: none;
    padding: 20px;
    font-size: 48px;
}

    .search{
    width: 98%;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #b0c4de;
    background: white;
}
    .btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #009900;
    border: none;
    border-radius: 5px;
    width: 150px;
}
    table{
    border: 1px solid #0000FF;
    text-align: center;
    background: #CCFFFF;
    font-size: 20px;
    }
table th{
    border: 1px solid #0000FF;
    padding: 5px;
    background-color: #0033FF;
    color: #f8f8f8;
}
table td{
    border: 1px solid #0000FF;
    padding: 5px;
}
   </style>
</head>
<body>
    <div class="header">
        <p>Search</p>
    </div>
        
<div class="search">
    <form action="" method="post">
    <table border="1" align="center">
            <tr>
                <th>เที่ยวบิน</th>
                <th>เมืองต้นทาง</th>
                <th>เมืองปลายทาง</th>
                <th>วันที่</th>
                <th>เวลาออกบิน</th>
                <th>เวลาที่ใช้ในการเดินทาง</th>
                <th>สายการบิน</th>
                <th>เครื่องบิน</th>
                <th>ชั้นโดยการ</th>
                <th>ราคา</th>
            </tr>

    <?php
    $start = isset($_GET['start']) ? $_GET['start']:'';
    $end = isset($_GET['end']) ? $_GET['end']:'';

    $sql = "SELECT * FROM flight WHERE start_city LIKE '%$start%' AND end_city LIKE '%$end%'";
    $result = $conn->query($sql);

    if($result->num_rows>0){ 
        while($row=$result->fetch_assoc()){ ?>
        <tr>
                <td><?php echo $row["flight"];?></td>
                <td><?php echo $row["start_city"];?></td>
                <td><?php echo $row["end_city"];?></td>
                <td><?php echo $row["date"];?></td>
                <td><?php echo $row["time"];?></td>
                <td><?php echo $row["time_travel"];?></td>
                <td><?php echo $row["airline"];?></td>
                <td><?php echo $row["airplane"];?></td>
                <td><?php echo $row["class"];?></td>
                <td><?php echo $row["price"];?></td>
            </tr>
            
    <?php
        }
    }else{
        header("location: fail.php");
    }
    $conn->close();
    ?>
   
    </table><br><br>
    </form>
    <a href="home.php">
            <button type="submit" class="btn">Back</button>
    </a>
</div>
</body>
</html>