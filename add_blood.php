<?php 

    session_start();
    if(!isset($_SESSION['email']))
    {
    	header('location:http://localhost/Blood_Bank/login.php');
    }
    $k=0;
    if(isset($_POST['submitBtn']))
    {
        $hname=$_POST['hname'];
        $hcont=$_POST['hcont'];
        $haddr=$_POST['haddr'];
        $bldgrp=$_POST['bldgrp'];
        $cap=$_POST['cap'];
        $date=$_POST['date1'];
        require_once 'db.php';
        $db=new Db();
        $con=$db->conn();
        mysqli_select_db($con, 'bhDbcQRgN8') or die("connection error");
        $pass="insert into addblood(a_hospname,a_hospcont,a_hospaddr,a_bldgrp,a_cap,a_date) values ('$hname','$hcont','$haddr','$bldgrp','$cap','$date')";
        $fire=mysqli_query($con,$pass);
        $k=1;
    }
    if($k==1)
        echo "<script>alert('Blood Sample Added')</script>";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reciever Register</title>
    <link rel="stylesheet" type="text/css" href="css/log_reg.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="icon" type="image/ico" href="images/Blood_icon.png" />
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body style="overflow-y: scroll;">
    <div class="container">
        <div class="img">
            <img src="images/bg2.png">
        </div>
        <div class="login-content">
            <form action="add_blood.php" method="POST">
                <img src="images/add_blood.png">
                <button class="btn"><a class="reg" href="home.php">Back</a></button>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Hospital Name</h5>
                        <input type="text" name="hname" class="input" required>
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-phone-square-alt"></i>
                    </div>
                    <div class="div">
                        <h5>Hospital Contact</h5>
                        <input type="tel" name="hcont" class="input" required>
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-map-pin"></i>
                    </div>
                    <div class="div">
                        <h5>Hospital Address</h5>
                        <input type="text" name="haddr" class="input" required>
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Blood Group</h5>
                        <input type="text" name="bldgrp" class="input" required>
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-vial"></i>
                    </div>
                    <div class="div">
                        <h5>Capacity</h5>
                        <input type="text" name="cap" class="input" required>
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-vial"></i>
                    </div>
                    <div class="div">
                        <input type="date" name="date1" formate="yyyy-mm-dd" class="input" required>
                    </div>
                </div>
                <input type="submit" name="submitBtn" class="btn" value="Add">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>