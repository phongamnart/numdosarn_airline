<?php
require('server.php');

$sql = "SELECT * FROM flight WHERE flight='".$_GET["flight"]."'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);

if (isset($_POST['back'])){
    header('location: show.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit</title>
</head>
<body>
    <h1>แก้ไขข้อมูล</h1>
    <form action="edit_db.php" method="post">
        <label for="flight">เที่ยวบิน</label>
        <input type="text" name="flight" require value="<?php echo $row['flight'];?>">
        <br>
        <label for="start_city">เมืองต้นทาง</label>  
        <input type="text" name="start_city" require value="<?php echo $row['start_city'];?>">
        <br>
        <label for="end_city">เมืองปลายทาง</label>
        <input type="text" name="end_city"  require value="<?php echo $row['end_city'];?>">
        <br>
        <label for="date">วันที่</label>
        <input type="text" name="date"  require value="<?php echo $row['date'];?>">
        <br>
        <label for="time">เวลาออกบิน</label>
        <input type="text" name="time"  require value="<?php echo $row['time'];?>">
        <br>
        <label for="time_traval">เวลาที่ใช้ในการเดินทาง</label>
        <input type="text" name="time_travel" require value="<?php echo $row['time_travel'];?>">
        <br>
        <label for="airline">สายการบิน</label>
        <input type="text" name="airline" require value="<?php echo $row['airline'];?>">
        <br>
        <label for="airplane">เครื่องบิน</label>
        <input type="text" name="airplane" require value="<?php echo $row['airplane'];?>">
        <br>
        <label for="class">ชั้นโดยการ</label>
        <input type="text" name="class" require value="<?php echo $row['class'];?>">
        <br>
        <label for="price">ราคา</label>
        <input type="text" name="price" require value="<?php echo $row['price'];?>">
        <br>
        <button type="submit" name="edit" class="btn">Save</button>
        <button type="submit" name="back" class="btn">Back</button>
    </form>
</body>
</html>