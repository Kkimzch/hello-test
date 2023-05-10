<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <title>เข้าสู่ระบบ</title>
    <?php
    session_start();
    require("../database.php");
    ?>
    <link rel="stylesheet" href="include/styles.css">
</head>

<body>
    <div class="container p-3">

        <div class="mt-5">

            <div class="mt-2" align="center">
                <h3 class="m-0">ร้านกาแฟสดเขาทะลุ @ น่าน</h3>
                <h4 class="m-0">โทร 0623456789</h4>
            </div>
            <img class="img-fluid rounded mt-2" src="../img/coffee.jpg">
            <div class="container">
                <form action="login_db.php" method="post">
                    <h5 class="mt-4 mb-0 text-center"> เข้าสู่ระบบ</h5>
                    <div>
                        <lable for="email" class="form-label">อีเมล</lable>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-1">
                        <lable for="password" class="form-label">รหัสผ่าน</lable>
                        <input type="password" class="form-control" name="password" id="myInput" required>
                        <div class="d-flex justify-content-between pb-1 ">
                            <div>
                                <input type="checkbox" class="form-check-input" onclick="myFunction()">
                                <lable class="form-label text-black-50"> ดูรหัสผ่าน</lable>
                            </div>
                            <div class="d-flex justify-content-center mt-1"><a class="text-black-50" href="forgetpassword.php">ลืมรหัสผ่าน?</a></div>
                        </div>
                        <script>
                            function myFunction() {
                                var x = document.getElementById("myInput");
                                if (x.type === "password") {
                                    x.type = "text";
                                } else {
                                    x.type = "password";
                                }
                            }
                        </script>
                    </div>
                    <div align="center">
                        <button type="submit" class="btn btn-warning rounded-3 text-white" name="login_user" style="width: 200px; height: 40px;">เข้าสู่ระบบ</button>
                    </div>
            </div>
            </form>
        </div>
        <div class="container-fludi mt-2">
            <div class="d-flex justify-content-center">
                <h6>ยังไม่ได้เป็นสมาชิกใช่ไหม? <a href="register.php" class="text-warning">สมัครสมาชิก</a></h6>
            </div>
        </div>
    </div>
    </div>
</body>

</html>