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
                <div class="img">
                        <img src="images/bg1.png">
                </div>
                <div class="login-content">
                        <form action="hosp_registration.php" method="POST">
                                <img src="images/avatar1.png">
                                <h2 class="title">Welcome</h2>
                                <div class="input-div one">
                                        <div class="i">
                                                <i class="fas fa-hospital-user"></i>
                                        </div>
                                        <div class="div">
                                                <h5>Hospital Name</h5>
                                                <input type="text" pattern="^[a-zA-Z&#39;.]+(\s+[a-zA-Z&#39;.]+)*$"
                                                        name="hospname" class="input" required>
                                        </div>
                                </div>
                                <div class="input-div one">
                                        <div class="i">
                                                <i class="fas fa-phone-square-alt"></i>
                                        </div>
                                        <div class="div">
                                                <h5>Hospital Contact</h5>
                                                <input type="number" pattern="^\d{10}$" name="hospcontact" class="input"
                                                        required>
                                        </div>
                                </div>
                                <div class="input-div one">
                                        <div class="i">
                                                <i class="fas fa-map-pin"></i>
                                        </div>
                                        <div class="div">
                                                <h5>Hospital Address</h5>
                                                <input type="text" name="hospaddr" class="input" required>
                                        </div>
                                </div>
                                <div class="input-div one">
                                        <div class="i">
                                                <i class="fas fa-user"></i>
                                        </div>
                                        <div class="div">
                                                <h5>Email</h5>
                                                <input type="email" name="hospemail" class="input" required>
                                        </div>
                                </div>
                                <div class="input-div pass">
                                        <div class="i">
                                                <i class="fas fa-lock"></i>
                                        </div>
                                        <div class="div">
                                                <h5>Password</h5>
                                                <input type="password" name="hosppass" class="input" required>
                                        </div>
                                </div>
                                <input type="submit" name="submit" class="btn" value="Register">
                        </form>
                </div>
        </div>
        <script type="text/javascript" src="js/main.js"></script>
</body>

</html>