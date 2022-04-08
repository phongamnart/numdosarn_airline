<?php 
    session_start();
    require('server.php');
    
    $errors = array();//เก็บ error ใน array
    $success = array();

    if (isset($_POST['add_data'])) {
        $flight = mysqli_real_escape_string($conn, $_POST['flight']);
        $start = mysqli_real_escape_string($conn, $_POST['start']);
        $end = mysqli_real_escape_string($conn, $_POST['end']);
        $date = mysqli_real_escape_string($conn, $_POST['date']);
        $time = mysqli_real_escape_string($conn, $_POST['time']);
        $time_travel = mysqli_real_escape_string($conn, $_POST['time_travel']);
        $airline = mysqli_real_escape_string($conn, $_POST['airline']);
        $airplane = mysqli_real_escape_string($conn, $_POST['airplane']);
        $class = mysqli_real_escape_string($conn, $_POST['class']);
        $price = mysqli_real_escape_string($conn, $_POST['price']);

        
        

        if (count($errors) == 0) {//นับ error

            $flight = "INSERT INTO flight (flight, start_city, end_city, date, time, time_travel, airline, airplane, class, price) VALUES ('$flight', '$start', '$end', '$date', '$time', '$time_travel', '$airline', '$airplane', '$class', '$price')";
            mysqli_query($conn, $flight);

            header('location: show.php');
        }else{
            header('location: add.php');
        }
    }
    if (isset($_POST['back'])){
        header('location: show.php');
    }

?>