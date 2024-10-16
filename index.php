<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Memory Matching Game</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      background-color: gray;
    }

    #game-board {
      display: grid;
      grid-template-columns: repeat(4, 100px);
      grid-template-rows: repeat(4, 100px);
      grid-gap: 10px;
      justify-content: center;
      margin: 20px auto;
    }

    .card {
      width: 100px;
      height: 100px;
      background-color: #3498db;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2rem;
      color: white;
      cursor: pointer;
    }

    .card.flipped {
      background-color: #2ecc71;
    }

    .card.matched {
      background-color: #95a5a6;
      pointer-events: none;
    }

    .game-stats {
      margin-top: 20px;
      font-size: 1.2rem;
    }
  </style>
</head>

<body>
  <h1>Memory Matching Game</h1>
  <div id="game-board"></div>
  <div class="game-stats">
    <p>Moves: <span id="moves">0</span></p>
    <p>Matches: <span id="matches">0</span></p>
  </div>
  <script src="app.js"></script>
</body>

</html>


<?php 
// db connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "game_scores";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




?>