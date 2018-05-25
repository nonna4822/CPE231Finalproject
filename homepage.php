<?php
  session_start();

  if(isset($_SESSION['firstname']) ){
    echo "สวัสดีครับ คุณ".$_SESSION['firstname']." ".$_SESSION['lastname'];
  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Homepage</title>
    <script src="myscripts.js"></script>
  </head>
  <body>
    <h1> Homepage </h1>
    <?php
      if(!isset($_SESSION['firstname']) ){
        echo "<button onclick=\"location.href ='studentsignup.php'\">สร้างบัญชี</button>";
        echo "<button onclick=\"location.href ='login.html'\">เข้าสู่ระบบ</button>";
      }else echo "<button onclick=\"location.href ='logout.php'\">ออกจากระบบ</button>";
    ?>


    <button onclick="location.href ='contactall.php'">
      ติดต่อเรา
    </button>

    <button onclick = "location.href ='subjectall.php'">
      รายวิชาทั้งหมด
    </button>

    <button onclick= "location.href ='FAQ.php'">
      คำถามที่พบบ่อย
    </button>


  </body>
</html>
