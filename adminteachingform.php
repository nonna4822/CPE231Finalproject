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
        <title>Teaching Form</title>
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

            table,
            td,
            th {
                border: 1px solid black;
                padding: 5px;
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

            h2 {
                font-size: 50px;
                color: navy;
            }


            .btn-primary {
                font-size: 30px;
                border-radius: 12px;
            }

            .form-control {
                display: block;
                width: 100%;
                padding: .375rem .75rem;
                font-size: 1.8rem;
                line-height: 1.5;
                color: #495057;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid #ced4da;
                border-radius: .25rem;
                transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            }

            select.form-control:not([size]):not([multiple]) {
                height: calc(3.65rem + 1px);
                width: 100%;
            }
        </style>
    </head>

    <body>
        <!-- <div class="container-fluid">
        <div class="row">
            <div class="menubar">
                <div class="col">
                    <div class="col-sm-5" style="color:white; font-size:35px; text-align:center;margin-left:800px;">
                        <div class="form-group">
                            <a href = 'staffview.php'class="button1" style="width:250px">
                                <strong> <?php echo $firstname." ".$lastname ?></strong>
                            </a>
                            <a href='logout.php' class="button1" style="width:250px">
                                <img src="picture/login (1).png" alt="" width="40px">
                                <strong> Log out</strong>
                            </a>

                        </div>
                    </div>

                    <div class="col-sm-12" style="color:white; font-size:35px; text-align:right;">
                        <div class="form-group">
                            <a href='homepage.php' class="button1" style="width:250px">
                                <img src="picture/house.png" alt="" width="30px">
                                <strong> Home</strong>
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
        <h2>
            <strong>ลงทะเบียนการสอน</strong>
        </h2>
        <div class="container-fluid" style="font-size:30px; text-align:center;">
            <div class="row" text-align="center">
                <form action="student.php" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="FirstName">Staff ID</label>
                            <input type="int" class="form-control" id="Student ID" placeholder=" Enter Student ID" name="studentid">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="BranchName">Branch Name</label>
                            <select name="branchname" class="form-control" style="width:100%;">
                               <option value="Bangkok Training School (Din Daeng 1)">Bangkok Training School (Din Daeng 1)</option>
                                <option value="Bangkok Training School (Din Daeng 2)">Bangkok Training School (Din Daeng 2)</option>
                                <option value="Bangkok Training School (Khlong Toei)">Bangkok Training School (Khlong Toei)</option>
                                <option value="Bangkok Training School (Bon Kai)">Bangkok Training School (Bon Kai)</option>
                                <option value="Bangkok Training School (Nong Jok)">Bangkok Training School (Nong Jok)</option>
                                <option value="Bangkok Training School (Bang Rak)">Bangkok Training School (Bang Rak)</option>
                                <option value="Bangkok Training School (Luang Por Taweesak)">Bangkok Training School (Luang Por Taweesak)</option>
                                <option value="Bangkok Training School (Kanchana Singh)">Bangkok Training School (Kanchana Singh)</option>
                                <option value="Bangkok Training School (Mouan Bumrungsin)">Bangkok Training School (Mouan Bumrungsin)</option>
                                <option value="Bangkok Training School (Arthon)">Bangkok Training School (Arthon)</option>
                                <option value="Career Education">Career Education</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Term">Term</label>
                            <select name="term" class="form-control" style="width:100%;">
                                <option value="1">Term 1</option>
                                <option value="2">Term 2</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="sectionname">Section Name</label>
                            <select name="sectionname" class="form-control" style="width:100%;">
                                <option value="a">A</option>
                                <option value="b">B</option>
                                <option value="c">C</option>
                            </select>
                        </div>

                        <div style="width:100% ">
                            <input type="submit" value="submit" style="border-radius: 15px; width: 100px; border: 1px solid black; font-size: 25px;background-color: white;">
                        </div>
                    </div>


                </form>
            </div>

        </div>
    </div> -->

        <body>

            <form>


                <div class="form-group col-md-6">
                    <label for="Branchid">Branch Name</label>
                    <select name="branchid" class="form-control" onchange="param1(this.value)">
                        <option value="">null </option>
                        <option value="Bangkok Training School (Din Daeng 1)">Bangkok Training School (Din Daeng 1)</option>
                        <option value="Bangkok Training School (Din Daeng 2)">Bangkok Training School (Din Daeng 2)</option>
                        <option value="Bangkok Training School (Khlong Toei)">Bangkok Training School (Khlong Toei)</option>
                        <option value="Bangkok Training School (Bon Kai)">Bangkok Training School (Bon Kai)</option>
                        <option value="Bangkok Training School (Nong Jok)">Bangkok Training School (Nong Jok)</option>
                        <option value="Bangkok Training School (Bang Rak)">Bangkok Training School (Bang Rak)</option>
                        <option value="Bangkok Training School (Luang Por Taweesak)">Bangkok Training School (Luang Por Taweesak)</option>
                        <option value="Bangkok Training School (Kanchana Singh)">Bangkok Training School (Kanchana Singh)</option>
                        <option value="Bangkok Training School (Mouan Bumrungsin)">Bangkok Training School (Mouan Bumrungsin)</option>
                        <option value="Bangkok Training School (Arthon)">Bangkok Training School (Arthon)</option>
                        <option value="Career Education">Career Education</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="subjectid">Subject Title</label>
                    <select name="subjectid" class="form-control" onchange="param2(this.value)">
                        <option value="">null </option>
                        <option value="1">Automotive</option>
                                <option value="2">Dessert Making Skills</option>
                                <option value="3">Electrician</option>
                                <option value="4">Air Conditioning Technician</option>
                                <option value="5">Sound Engineer</option>
                                <option value="6">Thai massage</option>
                                <option value="7">English Skill</option>
                                <option value="8">Makeup Skill</option>
                                <option value="9">Hair dresser</option>
                                <option value="10">Cooking skill</option>
                    </select>
                </div>

                <button type="button" name="button" onclick="showteaching()"> Search </button>

            </form>

            <br>

            <div id="txtHint">
                <b>Person info will be listed here...</b>
            </div>

            <div id="sectionid">
                <b>Person info will be listed here...</b>
            </div>

            <script>
                var branchid = "";
                var subjectid = "";

                function param1(str) {
                    branchid = str;
                }

                function param2(str) {
                    subjectid = str;
                }

                function showteaching() {
                    if (branchid == "" || subjectid == "") {
                        document.getElementById("txtHint").innerHTML = "";
                        return;
                    } else {
                        xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function () {
                            if (this.readyState == 4 && this.status == 200) {
                                document.getElementById("txtHint").innerHTML = this.responseText;
                            }
                        };
                        xmlhttp.open("GET", "adminteachingajax.php?p1=" + branchid + "&p2=" + subjectid + "\"", true);
                        xmlhttp.send();
                    }
                }

                function confirm(teachingid) {
                    xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("sectionid").innerHTML = this.responseText;
                        }
                    };
                    xmlhttp.open("GET", "adminconfirmstaff.php?teachingid=" + teachingid, true);
                    xmlhttp.send();
                }
            </script>



        </body>

    </html>