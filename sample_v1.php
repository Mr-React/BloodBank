<?php
session_start();
if(!isset($_SESSION['email']))
{
    header('location:http://localhost/Blood_Bank/login.php');
}
require_once 'db.php';
$db=new Db();
$con=$db->conn();
mysqli_select_db($con, 'bhDbcQRgN8') or die("connection error");
$pass = "select * from addblood";
$result = mysqli_query($con, $pass);

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
        <div class="part2" style="padding: 0;margin:0;width:0;"></div>
        <div class="part1" style="margin:0">
            <div class="nav1">
                <h3><a>Blood Bank</a></h3>
                <ul>
                    <li>
                        <a href="sample_v1.php">Blood Sample</a>
                    </li>
                    <li>
                        <a href="home.php">Back
                        </a>
                    </li>
                </ul>
            </div>
            <div style="padding: 5%;margin:0;">
                <table style="padding: 5%; margin:0;">
                    <tr>
                        <th>Sr_no</th>
                        <th>Hospital Name</th>
                        <th>Hospital Contact</th>
                        <th>Hospital Address</th>
                        <th>Blood Group</th>
                        <th>Capacity</th>
                        <th>Date</th>
                    </tr>
                    <?php
                    while ( $dos = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td> <?php echo $dos['bid']; ?></td>
                            <td> <?php echo $dos['a_hospname']; ?></td>
                            <td> <?php echo $dos['a_hospcont']; ?></td>
                            <td> <?php echo $dos['a_hospaddr']; ?></td>
                            <td> <?php echo $dos['a_bldgrp']; ?></td>
                            <td> <?php echo $dos['a_cap']; ?></td>
                            <td> <?php echo $dos['a_date']; ?></td>
                            
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