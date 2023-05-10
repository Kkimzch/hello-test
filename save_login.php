<?php
ob_start();
require("database.php");
session_start();
$errors = array();

// โค้ดก๊อปเพื่อนมา เข้าใจไหม ไม่อ่ะ 
//ใจจริงอยากเอามาทั้งหมดเเต่มันเยอะมากกกกกกกกกกกกกกกกกกกกก หลังจบฝึกกลับมาดูโค้ดตัวเองเเล้วยังอาย พี่โต้น พี่โยเซฟ พี่ไอซ์ต้อสาปหนูเเต่
if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (empty($email)) {
        array_push($errors, "email is required");
    }

    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password' ";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $_SESSION['member_id'] = $row['member_id'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['tel'] = $row['tel'];
            $_SESSION['password'] = $row['password'];
        }


        if (mysqli_num_rows($result) == 1) {
            $_SESSION['email'] = $email;
            header("location:index.php");
        } else {
            header("location:login.php");
        }
    }
}
echo "hello?";
ob_end_flush();
