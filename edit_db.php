<?php
require('server.php');

$flight = $_POST['flight'];
$start_city = $_POST['start_city'];
$end_city = $_POST['end_city'];
$date = $_POST['date'];
$time = $_POST['time'];
$time_travel = $_POST['time_travel'];
$airline = $_POST['airline'];
$airplane = $_POST['airplane'];
$class = $_POST['class'];
$price = $_POST['price'];

$sql = "UPDATE flight SET flight='$flight', start_city='$start_city', end_city='$end_city', date='$date', time='$time', time_travel='$time_travel', airline='$airline', airplane='$airplane', class='$class', price='$price' WHERE flight=$flight";
$result = mysqli_query($conn, $sql);
?>
