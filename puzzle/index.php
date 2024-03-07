<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sliding Puzzle Game</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
  <!-- Stylesheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="stylepuzzle.css" />
  <style>
    #home-button {
      display: none;
      margin-top: 20px;
      font-size: 1.2em;
      padding: 0.8em 2em;
      border: none;
      border-radius: 3em;
      cursor: pointer;
    }
  </style>
</head>

<body>
<header>
		<a href="/fyp/interactive.php"><i class="fa fa-arrow-left" style="font-size:36px" id="backbtn"></i></a>
	</header>
  <main>
  <div class="cover-screen">
    <p id="result"></p>
    <button id="start-button">Start Game</button>
    <button id="home-button" class="home-button" onclick="goHomeAndScore()">Save and Go Home</button>
  </div>
  <div id="moves"></div>
  <div class="slider-game">
    <div class="container"></div>
    <div class="original-image">
      <img src="images/puzzle1.jpg" alt="" />
    </div>
  </div>
  </main>
  <!-- Footer Section -->
	<footer>
		<p>&copy; 2024 Dermawan Darah Puzzle Game. All rights reserved.</p>
	</footer>
  <!-- Script -->
  <script src="script.js"></script>
  <script>

    // Function to return home and update score
    function goHomeAndScore() {
      // Call updateScores function with the moves score
      updateScores(movesCount);
      // Return home
      goHome();
    }

  </script>
  <!-- Win Sound -->
  <audio id="win-sound" src="images/win.mp3"></audio>
</body>

</html>