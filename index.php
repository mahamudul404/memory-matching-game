<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Memory Matching Game</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      background-color: gray;
    }

    h1 {
      margin-top: 20px;
      color: white;
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
      background-color: white;
      border: 1px solid black;
      border-radius: 5px;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 50px;
      cursor: pointer;
    }

    .card:hover {
      background-color: lightgray;
    }

    .card.flipped {
      background-color: lightgray;
    }
  </style>
</head>

<body>
  <h1>Memory Matching Game</h1>
  <div id="game-board"></div>
  <div id="game-status">
    <p>Moves: <span id="moves">0</span></p>
    <p>Matches: <span id="matches">0</span></p>
  </div>
</body>

</html>