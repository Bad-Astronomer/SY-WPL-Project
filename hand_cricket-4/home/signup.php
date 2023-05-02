<?php
include('C:\xampp\htdocs\passvault\server.php') 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <div class="signupform-box">
            <div class="form-value">
                <form name = "signup" action="signup.php" method="POST">
                    <?php include('C:\xampp\htdocs\passvault\errors.php');?>
                    <h2>Signup</h2>
                    <div class="inputbox">
                        <!-- <ion-icon name="mail-outline"></ion-icon> -->
                        <label for="">Name</label>
                        <input type="text" name="username" pattern = "^(\w\w+)\s(\w+){2,}" title = "Invalid Name" value="<?php echo $username; ?>" required>
                    </div>
                    <div class="inputbox">
                        <!-- <ion-icon name="mail-outline"></ion-icon> -->
                        <label for="">E-mail</label>
                        <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title = "Enter Valid Email" value="<?php echo $email; ?>" required>
                    </div>
                    <div class="inputbox">
                        <!-- <ion-icon name="lock-closed-outline"></ion-icon> -->
                        <label for="">Password</label>
                        <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}" title="Must contain at least one  number and one uppercase and lowercase letter, and 8 to 15 characters" name="password" required>
                    </div>
                    <div class="inputbox">
                        <!-- <ion-icon name="lock-closed-outline"></ion-icon> -->
                        <label for="">Confirm Password</label>
                        <input type="password" name="confirmPassword" required>
                    </div>
                    
                    <button type="submit" class="btn" name="reg_user">Register</button>
                    <div class="register">
                        <p>Already Registered ? <a href="login.php">Login Now</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>