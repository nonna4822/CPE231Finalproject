<?php

session_start();
//connect
include 'connect.php';

//query sql to find sections ************
//1.sections same ( sectionname && subjectid && branchname) ? ไม่ให้ลง section เดิมซ้ำ **************
//2.class exsit ?
//3.class same ? ( classid && shift ) ? มี section อื่น จองแล้ว ***********

$sectionname = mysqli_real_escape_string($con,$_POST['sectionname']);
$subjectid = mysqli_real_escape_string($con,$_POST['subjectid']);
$branchid = mysqli_real_escape_string($con,$_POST['branchid']);
$classid = mysqli_real_escape_string($con,$_POST['classid']);
$shift = mysqli_real_escape_string($con,$_POST['shift']);

// *********** check same section ? in section table ***************
$sql= "SELECT sectionid FROM section WHERE sectionname='$sectionname' AND subjectid = '$subjectid' AND branchid = '$branchid'";

if (!mysqli_query($con,$sql)) {
    echo('Error: ' . mysqli_error($con));
    echo "<script>setTimeout(\"location.href = 'addsection.html';\",3000);</script>";
}

$result = mysqli_query($con, $sql);
$row_1 = mysqli_fetch_assoc($result);

if($row_1['sectionid'] != NULL){ //แสดงว่ามีอยู่แล้ว
  mysqli_close($con);
  echo "มี Section นี้ในระบบแล้ว กรุณาอย่ากรอกซ้ำ";
  // echo "<script>setTimeout(\"location.href = 'addsection.html';\",1500);</script>";
}else {
  echo "นำไปพิจารณาห้องว่างก่อนครับ"."<br  />";
}

// *********** check class exist ? in class table ***************
$sql= "SELECT classid FROM class WHERE branchid='$branchid' AND classid = '$classid";

if (!mysqli_query($con,$sql)) {
    echo('Error: ' . mysqli_error($con));
    echo "<script>setTimeout(\"location.href = 'addsection.html';\",3000);</script>";
}

$result = mysqli_query($con, $sql);
$row_2 = mysqli_fetch_assoc($result);

if($row_2['classid'] != NULL){ //มีห้องนี้อยู่จริง
  echo "พบห้องเรียน จะตรวจสอบว่าว่างหรือไม่ ?";
  // echo "<script>setTimeout(\"location.href = 'addsection.html';\",1500);</script>";
}else {
  echo "ไม่พบห้องนี้ในระบบ ท่านจำเป็นต้องกรอกห้องใหม่เพิ่มเข้าไปในสาขา ต้องการเพิ่มตอนนี้เลยหรือไม่ ? "."<br  />";
  echo "<button type=\"button\" onclick=\"location.href='addclass.html'\"> Yes </button>"
  echo "<button type=\"button\" onclick=\"location.href='addsection.html'\"> Iqnore </button>"
  mysqli_close($con);
}

// ********** check same schedule ? ****************
$sql = "SELECT s.sectionid FROM section s LEFT join schedule sc on sc.sectionid = s.sectionid
WHERE s.shift = '$shift' AND sc.classid = '$classid' ";

if (!mysqli_query($con,$sql)) {
    echo('Error: ' . mysqli_error($con));
    echo "<script>setTimeout(\"location.href = 'staffregister.php';\",3000);</script>";
}

$result = mysqli_query($con, $sql);
$row_3 = mysqli_fetch_assoc($result);

if($row_3['sectionid'] != NULL){ //แสดงว่ามีอยู่แล้ว
  mysqli_close($con);
  echo "ห้องที่จะใช้นี้ ถูกเลือกไว้ใน Schedule อื่นแล้ว ( เต็มนั่นเอง ) กรุณาเลือกห้องใหม่ ";
  // echo "<script>setTimeout(\"location.href = 'addsection.html';\",1500);</script>";
}else {
  echo "ห้องว่างครับ";
}

// now table schedule and sections
// $sql= "SELECT classid FROM class WHERE sectionname='$sectionname' AND subjectid = '$subjectid' AND branchid = '$branchid'";
// //
// // else {
// //   $firstname = mysqli_real_escape_string($con, $_POST['firstname']);//
// //   $lastname = mysqli_real_escape_string($con, $_POST['lastname']);//
// //   $cardno = mysqli_real_escape_string($con, $_POST['cardno']);//
// //   $birthday=mysqli_real_escape_string($con,$_POST['birthday']);//
// //   $gender=mysqli_real_escape_string($con,$_POST['gender']);//
// //   $tel = mysqli_real_escape_string($con,$_POST['tel']);//
// //   $address=mysqli_real_escape_string($con,$_POST['address']);//
// //   $province=mysqli_real_escape_string($con,$_POST['province']);//
// //   $zipcode=mysqli_real_escape_string($con,$_POST['zipcode']);//
// //   $graduate=mysqli_real_escape_string($con,$_POST['graduate']);//
// //   $position=mysqli_real_escape_string($con,$_POST['position']);//
// //   $branchid=mysqli_real_escape_string($con,$_POST['branchid']);// 12
// //
// //   $sql="INSERT INTO staff(firstname, lastname,cardno,birthday,gender,tel,address,province,zipcode,graduate,position,branchid,status) VALUES
// //   ('$firstname', '$lastname','$cardno','$birthday','$gender','$tel','$address','$province','$zipcode','$graduate','$position','$branchid','notconfirm')";
// //
// //   if (!mysqli_query($con,$sql)) {
// //       echo('Error na: ' . mysqli_error($con));
// //       echo "<script>setTimeout(\"location.href = 'staffregister.php';\",1500);</script>";
// //   }
// //
// //   if (mysqli_query($con,$sql)){
// //     $_SESSION['firstname'] = $firstname;
// //     $_SESSION['lastname'] = $lastname;
// //     mysqli_close($con);
// //     header("Location: staffrecive.php");
// //     exit;
// //   }
// //   mysqli_close($con);
// // }


?>
