<?php
    require_once 'db.php';
    $db=new Db();
    $con=$db->conn();
    $hospemail=$_POST['hospemail'];
    $hosppass=$_POST['hosppass'];
    $user1=$_POST['user'];
    
    
    mysqli_select_db($con,'bloodbank') or die("Database Connection error");

    if($user1==1)
    {
        $q="select hospemail,hosppass from hospital where hospemail='$hospemail' && hosppass='$hosppass'";
        $result=mysqli_query($con,$q);
        $num=mysqli_num_rows($result);
        $message="Email Or Password Is Wrong";
        if($num==1)
        {
            session_start();
            $_SESSION['email']=$hospemail;
            header('location:http://localhost/Blood_Bank/home.php');
        }
        else
        {
            header('location:http://localhost/Blood_Bank/login.php?Message='.$message);
        }
    }
    else
    {
        $q="select * from receiver where rec_email='$hospemail' && rec_pass='$hosppass'";
        $result=mysqli_query($con,$q);
        $num=mysqli_num_rows($result);
        $message="Email Or Password Is Wrong";
        if($num==1)
        {
            session_start();
            $_SESSION['email']=$hospemail;
            header('location:http://localhost/Blood_Bank/home1.php');
        }
        else
        {
            header('location:http://localhost/Blood_Bank/login.php?Message='.$message);
        }
    }
    
?>
