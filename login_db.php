<?php 
    session_start();
    require('server.php');

    $errors = array();

    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        
        if (empty($username)) {
            array_push($errors, "ต้องใส่ชื่อผู้ใช้");
        }

        if (empty($password)) {
            array_push($errors, "ต้องใส่รหัสผ่าน");
        }

        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM member WHERE username = '$username' AND password = '$password' ";
            $result = mysqli_query($conn, $query);
            
            
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result);

                $_SESSION["username"] = $row["username"];
                $_SESSION["status"] = $row["status"];

                if($_SESSION["status"] == "admin"){
                    header("location: show.php");
                }else{
                    header("location: home.php");
            }
            } else {
                array_push($errors, "ชื่อผู้ใช้หรือรหัสผ่านผิด!");
                $_SESSION['error'] = "ชื่อผู้ใช้หรือรหัสผ่านผิด!";
                header("location: login.php");
            }
        } else {
            array_push($errors, "ต้องใส่ชื่อผู้ใช้และรหัสผ่าน");
            $_SESSION['error'] = "ต้องใส่ชื่อผู้ใช้และรหัสผ่าน";
            header("location: login.php");
        }
    }

?>