<?php
  session_start();
  if(isset($_SESSION['firstname'])){
    $firstname = $_SESSION['firstname'];
    $lastname = $_SESSION['lastname'];
  } else {
    header("location : login.html");
    exit;
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Student View</h1>
      <p>
        <?php echo "สวัสดี".$firstname." ".$lastname; ?>
      </p>


      <button type="button" onclick="location.href='homepage.php'"> กลับไปหน้าหลัก </button>

      <button type="button" onclick="location.href = 'studentedit.php'"> แก้ไขข้อมูลส่วนตัว </button>

      <button type="button" onclick="location.href = 'enroll.php'"> ลงทะเบียนเพิ่มเติม </button>

      <button type="button" onclick="location.href = 'logout.php'"> ออกจากระบบ </button>
  </body>
</html>
