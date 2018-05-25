<!-- session start-->
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
    <h1>Admin View</h1>

    <button type="button" onclick="location.href='homepage.php'"> กลับไปยังหน้าหลัก </button>

    <button type="button" >เพิ่มวิชาเรียนตามเซคชั่น </button>

    <button type="button" >เพิ่มสาขา </button>

    <button type="button" >ยืนยันการจ่ายตัง </button>

    <button type="button" >ยืนยันการจ่ายตัง </button>
  </body>
</html>
