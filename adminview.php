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

    <button type="button" onclick="location.href='homepage.php'"> homepage </button>

    <button type="button" onclick="location.href='addsection.html'" >Add sections </button>

    <button type="button" onclick="location.href='addsection.html'" >delete subject </button>

    <button type="button" >Add branch </button>

    <button type="button" >Delete branch </button>

    <button type="button" >Enroll request </button>

    <button type="button" onclick="location.href='adminteachingform.php'">Register Teaching request </button>
  </body>
</html>
