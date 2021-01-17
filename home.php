<?php 
session_start();
if(!isset($_SESSION['email']))
{
	header('location:http://localhost/Blood_Bank/login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="icon" type="image/ico" href="images/Blood_icon.png" />
    <title> Blood Bank</title>
</head>

<body>
    <div class="container1">
        <div class="part2">
        </div>
        <div class="part1">
            <div class="nav1">
                <h3><a>Blood Bank</a></h3>
                <ul>
                    <li>
                        <a href="sample_v1.php">Blood Sample</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <div class="content1">
                <div class="card card1">
                    <img src="images/blood1.jpg" alt="Denim Jeans" style="width:50%; height: 40%;">
                    <h1>Blood Information</h1>
                    <p>Blood is the life-giving fluid that delivers oxygen to the cells of the body. It is a specialized type of connective tissue that consists of red blood cells, platelets, and white blood cells suspended in a liquid plasma matrix. </p>
                    <p><button><a href="add_blood.php" style="color: white;">Add Blood Info</a></button></p>
                  </div>
                  <div class="card card2">
                    <img src="images/blood1.jpg" alt="Denim Jeans" style="width:50%; height: 40%;">
                    <h1>Blood Information</h1>
                    <p>Blood is the life-giving fluid that delivers oxygen to the cells of the body. It is a specialized type of connective tissue that consists of red blood cells, platelets, and white blood cells suspended in a liquid plasma matrix. </p>
                    <p><button><a href="view_req.php" style="color: white;">View Request</a></button></p>
                  </div>
            </div>
        </div>
    </div>
</body>

</html>