<?php
  session_start();
  if(isset($_SESSION['firstname'])){
    $firstname = $_SESSION['firstname'];
    $lastname = $_SESSION['lastname'];
    $cardno = $_SESSION['cardno'];
  } else {
    header("location : login.html");
    exit;
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Staff View</title>
    <script src="myscripts.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>


    <style>
        * {
            font-family: 'Waffle Regular';


        }

        .menubar {
            background-color: #225A69;
            /* padding: 15px; */
            opacity: 0.85;
            width: 100%;
            color: white;
            font-size: 30px;
            text-align: right;

        }

        .element {
            background-color: #119FA4;
            /* padding: 15px; */
            opacity: 0.85;
            width: 100%;
            color: white;
            font-size: 50px;
            text-align: left;
            margin: 0px 0px;
        }

        .element2 {
            background-color: rgba(17, 159, 164, 0.60);
            /* padding: 15px; */
            width: 100%;
            color: white;
            font-size: 30px;
            text-align: center;
            margin: 0px 0px;

        }

        .picstyle {
            width: 50px;
            position: absolute;
            z-index: 999;
            bottom: -160px;
        }

        .button1 {
            background-color: rgba(255, 255, 255, 0.3);
            background-position: center;
            border: none;
            padding: 0px 0px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 32px;
            font-family: 'Waffle Regular';
            border-radius: 12px;
            color: white;

        }

h2{
    font-size:50px;
    color: navy;
}
        .form-group {
            text-align: right;
        }

        .modal-body {
            color: black;
        }

        .btn-primary {
            font-size: 30px;
            border-radius: 12px;
        }

        .table-bordered {
            width: 100%;
        }
        .gg td, .gg th , .gg tr,
        .table-bordered thead td, .table-bordered thead th{
            border:4px solid white;


        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="menubar">
                <div class="col">
                    <div class="col-sm-5" style="color:white; font-size:35px; text-align:center;margin-left:800px;">
                        <div class="form-group">
                            <a href='staffview.php' class="button1" style="width:250px">
                                <strong> <?php echo $firstname." ".$lastname ?></strong>
                            </a>
                            <a href='logout.php' class="button1" style="width:250px">
                                <img src="picture/login (1).png" alt="" width="40px">
                                <strong> Log out</strong>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-12" style="color:white; font-size:35px; text-align:left;">
                        <div class="form-group">
                            <a href='homepage.php' class="button1" style="width:250px">
                                <img src="picture/house.png" alt="" width="30px">
                                <strong> Home</strong>
                            </a>

                            <a href='teachingform.php' class="button1" style="width:250px">
                                <strong> ลงทะเบียนการสอน</strong>
                            </a>
                            <a href='editprofile-staff.php' class="button1" style="width:250px">
                                <strong> Edit Profile</strong>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-image:linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%);">
        <h2><strong>ตารางแสดงรายละเอียดการสอน (ยืนยันแล้ว)</strong></h2>
        <table class="table table-bordered gg" style="font-size:35px; text-align:center;">
            <thead>
                <tr style="color:#6E038E;font-size:40px;">
                  <th>Teaching id</th>
                  <th>Section Name</th>
                  <th>Subject</th>
                  <th>Shift</th>
                  <th>Branch Name</th>
                  <th>Class No.</th>
                </tr>
            </thead>
            <tbody style="color:#4B4D4A;" id = "rowajax">

            </tbody>

          </table>
    </div>

    <!-- <button type="button" onclick="showsection()" name="button">button</button> -->

    <script>
    var cardno = <?php echo $cardno ?>;
    showsection();
    function showsection() {
       if (cardno == "") {
           document.getElementById("rowajax").innerHTML = "<tr>"+
             "<td>test</td>" +
             "<td>test</td>" +
             "<td>test</td>" +
             "<td>test</td>" +
             "<td>test</td>" +
           "</tr>";
           return;
       } else {
               xmlhttp = new XMLHttpRequest();
               xmlhttp.onreadystatechange = function() {
               if (this.readyState == 4 && this.status == 200) {
                   document.getElementById("rowajax").innerHTML = this.responseText;
               }
           };
           xmlhttp.open("GET","staffviewajax.php?cardno="+cardno,true);
           xmlhttp.send();
       }
    }

    </script>
</body>

</html>
