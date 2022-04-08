<?php
require('server.php');
$sql = "SELECT * FROM flight";
$query = mysqli_query($conn, $sql);

if (isset($_POST['add_data'])){
    header('location: add.php');
}
if (isset($_POST['out_admin'])){
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Ticket</title>

    <style>
    body {
    font-size: 120%;
    background: #f8f8f8;
}
    form{
    width: 98%;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #b0c4de;
    background-image: url("img/6.jpg");
}
    .header {
    width: 98%;
    margin: 50px auto 0px;
    color: white;
    background: #0066FF;
    text-align: center;
    border: 1px solid #b0c4de;
    border-bottom: none;
    padding: 20px;
    font-size: 48px;
}
    .btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #0066FF;
    border: none;
    border-radius: 5px;
    width: 150px;
}
table{
    border: 1px solid #990000;
    background: #FFCCCC;
}
table th{
    border: 1px solid #990000;
    padding: 5px;
    background-color: #990000;
    color: #f8f8f8;
}
table td{
    border: 1px solid #990000;
    padding: 5px;
}

    </style>
</head>
<body>
    <div class="header">
        <p>Show Ticket</p>
    </div>
    <form action="" method="post">
        <table align="center"> 
            <tr>
                <th align="center" style="font-size: 20px;">เที่ยวบิน</th>
                <th align="center" style="font-size: 20px;">เมืองต้นทาง</th>
                <th align="center" style="font-size: 20px;">เมืองปลายทาง</th>
                <th align="center" style="font-size: 20px;">วัน/เดือน/ปี</th>
                <th align="center" style="font-size: 20px;">เวลาออกบิน</th>
                <th align="center" style="font-size: 20px;">เวลาที่ใช้ในการเดินทาง</th>
                <th align="center" style="font-size: 20px;">สายการบิน</th>
                <th align="center" style="font-size: 20px;">เครื่องบิน</th>
                <th align="center" style="font-size: 20px;">ชั้นโดยการ</th>
                <th align="center" style="font-size: 20px;">ราคา</th>
                <th align="center" style="font-size: 20px;">แก้ไขข้อมูล</th>
            </tr>
            <?php foreach($query as $data){ ?>
            <tr>
                <td align="center" style="font-size: 20px;"><?php echo $data['flight'] ?></td>
                <td align="center" style="font-size: 20px;"><?php echo $data['start_city'] ?></td>
                <td align="center" style="font-size: 20px;"><?php echo $data['end_city'] ?></td>
                <td align="center" style="font-size: 20px;"><?php echo $data['date'] ?></td>
                <td align="center" style="font-size: 20px;"><?php echo $data['time'] ?></td>
                <td align="center" style="font-size: 20px;"><?php echo $data['time_travel'] ?></td>
                <td align="center" style="font-size: 20px;"><?php echo $data['airline'] ?></td>
                <td align="center" style="font-size: 20px;"><?php echo $data['airplane'] ?></td>
                <td align="center" style="font-size: 20px;"><?php echo $data['class'] ?></td>
                <td align="center" style="font-size: 20px;"><?php echo $data['price'] ?></td>
                <td align="center" style="font-size: 20px;"><a href="del.php?flight=<?=$data['flight'];?>">Delete</a></td>
            </tr>
                <?php } ?>
        </table><br><br>
        <button type="submit" name="add_data" class="btn">Add</button>
        <button type="submit" name="out_admin" class="btn">Logout</button>
    </form>
</body>
</html>