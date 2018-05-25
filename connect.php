<?php
$con=mysqli_connect("127.0.0.1","root","","new_cpe231final");
//$con=mysqli_connect("127.0.0.1","root","","testtestdb");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_set_charset($con,"utf8");
?>
