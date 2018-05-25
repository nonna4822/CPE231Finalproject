
<?php

include 'connect.php';
$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
$cardno = mysqli_real_escape_string($con, $_POST['cardno']);
$birthday=mysqli_real_escape_string($con,$_POST['birthday']);
$gender=mysqli_real_escape_string($con,$_POST['gender']);
$tel = mysqli_real_escape_string($con,$_POST['tel']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$province=mysqli_real_escape_string($con,$_POST['province']);
$zipcode=mysqli_real_escape_string($con,$_POST['zipcode']);
$occupation=mysqli_real_escape_string($con,$_POST['occupation']);

$sql="INSERT INTO student(firstname, lastname,cardno,birthday,gender,tel,address,province,zipcode,occupation) VALUES
('$firstname', '$lastname','$cardno','$birthday','$gender','$tel','$address','$province','$zipcode','$occupation')";

if (!mysqli_query($con,$sql)) {
    die('Error: ' . mysqli_error($con));
}
mysqli_close($con);
?>
