<?php
include('C:\xampp\htdocs\hand_cricket-4\mainserver.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
    <section>
        <div class="form-box">
            <div class="form-value">
                <form name = "login" action="login.php" method = 'post'>
                    <?php include('C:\xampp\htdocs\passvault\errors.php'); ?>
                    <h2>Login</h2>
                    <div class="inputbox">
                        <!-- <ion-icon name="mail-outline"></ion-icon> -->
                        <label for="">E-mail</label>
                        <input type="email" name = 'email' title="Invalid Email" required>
                    </div>
                    <div class="inputbox">
                        <!-- <ion-icon name="lock-closed-outline"></ion-icon> -->
                        <label for="">Password</label>
                        <input type="password" name = 'password' required>
                    </div>
                    <button type="submit" class="btn" name="login_user">Login</button>
                    <div class="register">
                        <p>Don't have an account? <a href="signup.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script> -->
    <!-- <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> -->
</body>
</html>