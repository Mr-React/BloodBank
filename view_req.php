<?php

    session_start();
    if(!isset($_SESSION['email']))
    {
    	header('location:http://localhost/Blood_Bank/login.php');
    }
    $temp=$_SESSION['email'];

    require_once 'db.php';
        $db=new Db();
        $con=$db->conn();
    mysqli_select_db($con, 'bhDbcQRgN8') or die("connection error");
    $pass = "select hospname from hospital where hospemail='$temp'";
    $result = mysqli_query($con, $pass);

    $pass1 = "select * from view_req";
    $result1 = mysqli_query($con, $pass1);
    

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="icon" type="image/ico" href="images/Blood_icon.png" />
    <title>View Request</title>
</head>

<body>
    <div class="container">
        <div class="part1">
            <div class="nav1">
                <h3><a>Blood Bank</a></h3>
                <ul>
                    <li>
                        <a href="#">Blood Sample</a>
                    </li>
                    <li>
                        <a href="home.php">Back
                        </a>
                    </li>
                </ul>
            </div>
            <div style="padding-left: 0%;padding-right: 70%;" class="tabdata">
                <table>
                    <tr>
                        <th>V_id</th>
                        <th>B_id</th>
                        <th>Hospital Name</th>
                        <th>Hospital Contact</th>
                        <th>Hospital Address</th>
                        <th>Blood Group</th>
                        <th>Capacity</th>
                        <th>Requester Name</th>
                    </tr>
                    <?php
                    while ( $dos = mysqli_fetch_array($result1)) {
                    ?>
                        <tr>
                            <td> <?php echo $dos['vid']; ?></td>
                            <td> <?php echo $dos['vbid']; ?></td>
                            <td> <?php echo $dos['v_hospname']; ?></td>
                            <td> <?php echo $dos['v_hospcont']; ?></td>
                            <td> <?php echo $dos['v_hospaddr']; ?></td>
                            <td> <?php echo $dos['v_bldgrp']; ?></td>
                            <td> <?php echo $dos['v_cap']; ?></td>
                            <td> <?php echo $dos['requester_name']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>