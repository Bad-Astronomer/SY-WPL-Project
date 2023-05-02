<?php 
  session_start();
  if(isset($_POST)){
    $data = json_decode(file_get_contents("php://input"), true);

    $score = $data["score"];
    $outcome = $data["outcome"];
    $conn = mysqli_connect("localhost", "root", "", "hand_cricket");

    echo $score;

    if (!$conn) {
      die('Connection failed: ' . mysqli_connect_error());
    }


    $query = "INSERT INTO results(win_loss, high_score, username) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'iis',$outcome ,$score, $_SESSION["username"]);

    if (mysqli_stmt_execute($stmt)) {
      echo "Score added successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
    mysqli_stmt_close($stmt);
  }
?>