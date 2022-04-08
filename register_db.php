<?php 
    session_start();
    require('server.php');
    
    $errors = array();//เก็บ error ใน array

    if (isset($_POST['reg_user'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);//ประกาศตัวแปรที่รับค่า
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

        if (empty($name)) {//เช็คว่าช่องว่างไหม ถ้าว่างให้แจ้ง error
            array_push($errors, "ต้องใส่ชื่อ");
            $_SESSION['error'] = "ต้องใส่ชื่อ";
        }
        if (empty($username)) {
            array_push($errors, "ต้องใส่ชื่อผู้ใช้");
            $_SESSION['error'] = "ต้องใส่ชื่อผู้ใช้";
        }
        if (empty($email)) {
            array_push($errors, "ต้องใส่อีเมล");
            $_SESSION['error'] = "ต้องใส่อีเมล";
        }
        if (empty($password_1)) {
            array_push($errors, "ต้องใส่รหัสผ่าน");
            $_SESSION['error'] = "ต้องใส่รหัสผ่าน";
        }
        if ($password_1 != $password_2) {
            array_push($errors, "รหัสผ่านทั้ง 2 ไม่ตรงกัน");
            $_SESSION['error'] = "รหัสผ่านทั้ง 2 ไม่ตรงกัน";
        }

        $user_check_query = "SELECT * FROM member WHERE username = '$username' OR email = '$email' LIMIT 1";//เช็ค user and email ว่ามีในฐานข้อมูลหรือยัง
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if ($result) { 
            if ($result['username'] === $username) {
                array_push($errors, "ชื่อผู้ใช้นี้ ถูกใช้งานแล้ว");
            }
            if ($result['email'] === $email) {
                array_push($errors, "อีเมลนี้ ถูกใช้งานแล้ว");
            }
        }

        if (count($errors) == 0) {//นับ error
            $password = md5($password_1);

            $sql = "INSERT INTO member (name, username, email, password) VALUES ('$name', '$username', '$email', '$password')";
            mysqli_query($conn, $sql);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "ยินดีต้อนรับสู่ ต้นหอมแอร์ไลน์";
            header('location: login.php');
        } else {
            header("location: register.php");
        }
    }

?>