<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require("database.php");
?>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <!-- <link rel="stylesheet" href="css/login.css" /> -->
  <title>เข้าสู่ระบบ</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="save_login.php" method="pos" class="sign-in-form">
          <h2 class="title">เข้าสู่ระบบ</h2>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" required placeholder="อีเมล" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" required placeholder="รหัสผ่าน" />
          </div>
          <button type="submit" class="btn solid">เข้าสู่ระบบ</button>
          <div class="pass">
            <a class="a" href="forgetpassword.php">
              <p>ลืมรหัสผ่าน</p>
            </a>
          </div>
        </form>
        <form action="register_db.php" method="post" class="sign-up-form">
          <h2 class="title">สมัครสมาชิก</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="name" required placeholder="ชื่อ" />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" required placeholder="อีเมล" />
          </div>
          <div class="input-field">
            <i class="fas fa-phone"></i>
            <input type="text" name="tel" required placeholder="เบอร์โทรศัพท์" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password_1" required placeholder="รหัสผ่าน" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password_2" required placeholder="ยืนยันรหัสผ่าน" />
          </div>
          <button type="submit" class="btn solid">สมัครสมาชิก</button>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>ยังไม่ได้เป็นสมาชิก ?</h3>
          <p>
            สมัครสมาชิกเพื่อเริ่มต้นการสั่งซื้อของคุณ
          </p>
          <button class="btn transparent" id="sign-up-btn">
            สมัครสมาชิก
          </button>
        </div>

      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>เป็นสมาชิกอยู่เเล้ว ?</h3>
          <p>
            เข้าสู่ระบบเพื่อเริ่มต้นการสั่งซื้อของคุณ
          </p>
          <button class="btn transparent" id="sign-in-btn">
            เข้าสู่ระบบ
          </button>
        </div>

      </div>
    </div>
  </div>

  <script src="js/app.js"></script>
</body>

</html>