<?php
session_start();

//initializing variables

$username = "";
$email    = "";
$errors = array();

$db  = mysqli_connect('localhost', 'root', '', 'hand_cricket');

//Register New User
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password']);
  $password_2 = mysqli_real_escape_string($db, $_POST['confirmPassword']);

  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  $user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = $password_1;

  	$query = "INSERT INTO user (username, pwd, email) 
  			  VALUES('$username', '$password', '$email')";
  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
    $_SESSION['username'] = $username;
  	header('location: ../main/index.html');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  $query = "SELECT * FROM user WHERE email='$email' AND pwd='$password'";

  $results = mysqli_query($db, $query);
  if (mysqli_num_rows($results) == 1) {
    $_SESSION['email'] = $email;
    $query1 = "SELECT username FROM user WHERE email='$email'";
    $result = mysqli_fetch_assoc(mysqli_query($db, $query1));
    $username = $result['username'];
    $_SESSION['username'] = $username;
    header('location: ../main/index.php');
  }else {
    array_push($errors, "Wrong username/password combination");
  }
}



?>