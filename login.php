<?php
// Start the session
session_start();

require 'connect.php';
//clear session
session_unset();

// Set php variables
$cardno = mysqli_real_escape_string($con,$_POST['cardno']);
$tel =  mysqli_real_escape_string($con,$_POST['tel']);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
//query
$sql = "SELECT firstname , lastname FROM student WHERE cardno = '$cardno' AND tel = '$tel'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

if($row['firstname'] == ""){
  echo "เลขบัตรประชาชน หรือ เบอร์โทรศัพท์ ไม่ถูกต้อง !";
  echo "<script>setTimeout(\"location.href = 'login.html';\",1500);</script>";
}else {
  $_SESSION['cardno'] = $cardno;
  $_SESSION['tel'] = $tel;
  $_SESSION['firstname'] = $row['firstname'];
  $_SESSION['lastname'] = $row['lastname'];
  if( substr( $cardno, 0, 5 ) === "admin"){
    header("Location: adminview.php"); //go to student view
    exit;
  }else {
    header("Location: studentview.php"); //go to student view
    exit;
  }

}

//close sql
mysqli_close($con);

 ?>
