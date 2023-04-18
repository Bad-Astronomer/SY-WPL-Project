<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div id="form-container">
    <form id="login_form" method="post">
      <label for="usrnm">Username:</label>
      <input type="text" id="usrnm" name="usrnm"><br>
      <label for="pwd">Password:</label>
      <input type="password" id="pwd" name="pwd"><br>
      <input type="submit" id="submit-btn">
    </form>
  </div>

  <script src="C:\Users\HP\Documents\GitHub\SY-WPL-Project\hand_cricket-4\login_page\login_verification.js"></script>
</body>
</html>

<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "hand_cricket";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  $get_usrnm = $_POST["usrnm"];
  $get_password = $_POST["pwd"];

  $query = mysqli_prepare($conn, "INSERT INTO user VALUES(?, ?, ?)");
  mysqli_stmt_bind_param($query, "ssi", $get_usrnm, $get_password, '0');

  mysqli_stmt_execute($query);

  mysqli_stmt_close($query);
  mysqli_close($conn);
?>