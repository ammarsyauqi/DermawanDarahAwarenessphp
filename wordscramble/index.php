<?php
require 'C:\xampp\htdocs\fyp\config.php';


// Check if the user is logged in
if (!empty($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM registration WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
  
    // User is logged in, display logout and highscore buttons
    $isLoggedIn = true;
  } else {
    // User is not logged in
    $isLoggedIn = false;
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Word Scramble</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link href="stylews.css" rel="stylesheet" />
</head>
	
<body>
	<header>
		<a href="/fyp/interactive.php"><i class="fa fa-arrow-left" style="font-size:36px" id="backbtn"></i></a>
	</header>
	<main>

		<div class="root">
			<h1 class="title">Word Scramble Game</h1>
			<div id="scrambled">
				<h2 id="scrambleWord"><!--words---></h2>

			</div>
			<div id="form">
				<input id="input" type="text" placeholder="Guess correct word" />
			</div>
			<p id="hint"></p>
			<h3 id="output">Result:</h3>
			<div id="score-container">Score: <span id="score">0</span></div>
			<div class="foot">
				<button type="button" onclick="check()">
					Check
				</button>
				<button type="button" onclick="refresh()">
					Refresh
				</button>
			</div>
			<div class="end-container" style="display: none;">
			<div id="completion-message" class="completion-message"></div>
			<button class="end-btn" onclick="restart()">Restart Quiz</button>
            <button class="end-btn" onclick="goHomeAndScore()">Save and Return Home</button>
			</div>
		</div>

	</main>
	<!-- Footer Section -->
	<footer>
		<p>&copy; 2024 Dermawan Darah Word Scramble. All rights reserved.</p>
	</footer>
	<script src="scriptscram.js"></script>
	<script>
    // Function to return home and update score
    function goHomeAndScore() {
        // Call updateScores function with the quiz score
        updateScores(score);
        // Return home
        goHome();
    }
</script>
<!-- Win Sound -->
<audio id="win-sound" src="win.mp3"></audio>
</body>


</html>