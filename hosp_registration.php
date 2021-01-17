<?php
                    
    $hospname=$_POST['hospname'];
    $hospcont=$_POST['hospcontact'];
    $hospaddr=$_POST['hospaddr'];
    $hospemail=$_POST['hospemail'];
    $hosppass=$_POST['hosppass']; 
    require_once 'db.php';
    $db=new Db();
    $con=$db->conn();
    mysqli_select_db($con,'bloodbank') or die("connection error");
    $email="select * from hospital where hospemail='$hospemail'";
    $pass="select * from hospital where hospcont='$hospcont'";
    $email1=mysqli_query($con,$email);
    $pass1=mysqli_query($con,$pass);
    $res1=mysqli_num_rows($email1);
    $res2=mysqli_num_rows($pass1);
    $t=0;
    $tt=0;
    if($res1==0 || $res2 ==0)
    {
        $tt=1;
        $ee="insert into hospital(hospname,hospcont,hospaddr,hospemail,hosppass) values ('$hospname','$hospcont','$hospaddr','$hospemail','$hosppass')";
        if(mysqli_query($con,$ee))
        {
            $t=1;
        }
        else{
            echo "error";
            $t=0;
        }
    }
    else
    {     
        $tt=0;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hospital Register</title>
    <link rel="stylesheet" type="text/css" href="css/log_reg.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="icon" type="image/ico" href="images/Blood_icon.png" />
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="container">
                <?php
                    if($tt==1)
                    {
                        echo "<div class='img'><img src='images/bg1.png'></div>";
                    }
                    else
                    {
                        echo "<script>alert('Email or Password Already In Use')</script><img src='images/access.png'>";
                    }
                ?>
        
        <div class="login-content">
                <?php
                    if($t==1)
                    {
                        echo "<h2 class='title'>Registered Successfully</h2></br>";
                        echo "<button class='btn'><a class='reg' href='login.php'>Goto Login Page</a></button>";
                    }
                    else
                    {
                        echo "<button class='btn'><a class='reg' href='hosp_reg.html'>Goto Registration Page</a></button>";
                    }
                ?>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>