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
            <img src="images/bg1.png">
        </div>
        <div class="login-content">
            <form action="rec_registration.php" method="POST">
                <img src="images/avatar1.png">
                <h2 class="title">Welcome</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Reciever Name</h5>
                        <input type="text" name="rname" class="input" required>
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-phone-square-alt"></i>
                    </div>
                    <div class="div">
                        <h5>Reciever Contact</h5>
                        <input type="tel" name="rcont" class="input" required>
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-map-pin"></i>
                    </div>
                    <div class="div">
                        <h5>Reciever Address</h5>
                        <input type="text" class="input" name="raddr" required>
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Reciever Age</h5>
                        <input type="text" name="rage" class="input" required>
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-vial"></i>
                    </div>
                    <div class="div">
                        <h5>Reciever Blood Group</h5>
                        <input type="text" name="rbgp" class="input" required>
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-vial"></i>
                    </div>
                    <div class="div">
                        <input type="date" name="rdate" format="yyyy-mm-dd" class="input" required>
                    </div>
                </div>
                <div class="vv">
                    <div class="select-box">
                        <select name="user" id="user" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Email</h5>
                        <input type="email" name="remail" class="input" required>
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" name="rpass" class="input" required>
                    </div>
                </div>
                <input type="submit" class="btn" value="Register">
                <button class="btn" style="justify-content: space-between;">
                <a class="reg" href="login.php">Login</a>
            </button>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>