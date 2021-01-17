<?php 
session_start();
if(!isset($_SESSION['email']))
{
	header('location:http://localhost/Blood_Bank/login.php');
}
        require_once 'db.php';
        $db=new Db();
        $con=$db->conn();
		mysqli_select_db($con,'bhDbcQRgN8') or die("Database Connection Error");
		$id=$_GET['id'];
        $upd=mysqli_query($con,"select * from addblood where bid='$id'");

        $temp=$_SESSION['email'];
        $query="select * from receiver where rec_email='$temp'";
        $res=mysqli_query($con,$query);
        while($res2=mysqli_fetch_array($res))
        {
            $reqq=$res2['rec_name'];
        }
    

        while($rows=mysqli_fetch_array($upd))
        {
            $vbid=$rows['bid'];
            $v_hospname=$rows['a_hospname'];
            $v_hospcont=$rows['a_hospcont'];
            $v_hospaddr=$rows['a_hospaddr'];
            $v_bldgrp=$rows['a_bldgrp'];
            $v_cap=$rows['a_cap'];
            $query="insert into view_req(vbid,v_hospname,v_hospcont,v_hospaddr,v_bldgrp,v_cap,requester_name) values ('$vbid','$v_hospname','$v_hospcont','$v_hospaddr','$v_bldgrp','$v_cap','$reqq')";
            //$query1=mysqli_query($con,$query);
            if(mysqli_query($con,$query))
            {
                echo "<script>alert('Request Successfully Done')</script>";
                header('location:http://localhost/Blood_Bank/view_sample.php');
            }
            else
            {
                echo "<script>alert('Request Failed try again')</script>";
                header('location:http://localhost/Blood_Bank/view_sample.php');
            }
        }
?>
