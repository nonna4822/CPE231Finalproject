
<?php

include 'connect.php';
$FirstName = mysqli_real_escape_string($con, $_POST['FirstName']);
$LastName = mysqli_real_escape_string($con, $_POST['LastName']);
$CardNo = mysqli_real_escape_string($con, $_POST['CardNo']);
$DateofBirth=mysqli_real_escape_string($con,$_POST['DateofBirth']);
$Address=mysqli_real_escape_string($con,$_POST['Address']);
$Province=mysqli_real_escape_string($con,$_POST['Province']);
$ZIPcode=mysqli_real_escape_string($con,$_POST['ZIPcode']);
$Occupation=mysqli_real_escape_string($con,$_POST['Occupation']);
// $StudentPic=mysqli_real_escape_string($con,$_POST['StudentPic']);
$sql="INSERT INTO student(FirstName, LastName,CardNo,DateofBirth,Address,Province,ZIPcode,Occupation) VALUES
('$FirstName', '$LastName','$CardNo','$DateofBirth','$Address','$Province','$ZIPcode','$Occupation')";
// $sql="INSERT INTO student(firstname, lastname) VALUES
// ('$FirstName', '$LastName')";

if (!mysqli_query($con,$sql)) {
    die('Error: ' . mysqli_error($con));
    mysqli_close($con);
    header("Location: signupsuccess.php");
    exit;
}
mysqli_close($con);
?>
