<?php
session_start();
if(!isset($_SESSION['email']))
{
	header('location:http://localhost/Blood_Bank/login.php');
}
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'bloodbank') or die("connection error");
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
                        <a href="view_sample.php">Blood Sample</a>
                    </li>
                    <li>
                        <a href="home1.php">Back
                        </a>
                    </li>
                </ul>
            </div>
            <div style="padding: 0;margin:0;">
                <table style="padding: 0; margin:0;">
                    <tr>
                        <th>Sr_no</th>
                        <th>Hospital Name</th>
                        <th>Hospital Contact</th>
                        <th>Hospital Address</th>
                        <th>Blood Group</th>
                        <th>Capacity</th>
                        <th>Date</th>
                        <th>Hospital ID</th>
                        <th>Request</th>
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
                            <td> <?php echo $dos['hospid']; ?></td>
                            <td> <a href="request.php?id=<?php echo $dos[0];?>">Request</a></td> 
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