<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "hand_cricket");

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

$username = $_SESSION["username"];
$query = "SELECT win_loss, high_score FROM results WHERE username = '$username'";

$result = mysqli_query($conn, $query);

$scores = array();
$records = array();

while ($row = mysqli_fetch_array($result)) {
  // Populate each array with the corresponding value from the row
  $scores[] = $row['high_score'];
  $records[] = $row['win_loss'];
}

echo '<script>';
echo 'var scores = ' . json_encode($scores) . ';';
echo 'var records = ' . json_encode($records) . ';';
echo '</script>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PassVault | Vault</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="score-container">
        <div class="backbtn" onclick="window.location.href = '../home_main/home.html'">
            <p>^</p>
        </div>
        <h2>PREVIOUS SCORES</h2>
    </div>

    <div class="vault-container">
        <div class="vaultbox">
            <div id="entrybox" class="entrybox">
                <h2 id="search-error">NO GAMES</h2>
            </div>
        </div>

        <div class="high-score-container">
            <h2>HIGH SCORE</h2>
            <h2 id="high-score">00</h2>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
