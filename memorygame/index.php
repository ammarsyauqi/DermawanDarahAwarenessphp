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
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="stylemgame.css">
	<title>Memory Card Game</title>

</head>

<body>
	<header>
		<a href="/fyp/interactive.php"><i class="fa fa-arrow-left" style="font-size:36px" id="backbtn"></i></a>
	</header>
	<main>

		<div class="container">
			<div id="dynamic-cards" class="game-container">
				<div class="heading-container">
					<h1 class="heading">
						Test Your Memory!
					</h1>
					<h2 class="game-heading">Click any card to flip it!</h2>
				</div>
				<div class="cards-container">
					<div class="card">
						<img src="images/asset5.png" class="outline-image">
						<img id="1" src="images/blood.png" alt="blood Image" class="card-image">
					</div>
					<div class="card">
						<img src="images/asset5.png" class="outline-image">
						<img id="2" src="images/bloodbag.png" alt="bloodbag Image" class="card-image">
					</div>
					<div class="card">
						<img src="images/asset5.png" class="outline-image">
						<img id="3" src="images/plasma.png" alt="plasma Image" class="card-image">
					</div>
					<div class="card">
						<img src="images/asset5.png" class="outline-image">
						<img id="4" src="images/bloodbag.png" alt="bloodbag Image" class="card-image">
					</div>

					<div class="card">
						<img src="images/asset5.png" class="outline-image">
						<img id="5" src="images/blood.png" alt="blood Image" class="card-image">
					</div>
					<div class="card">
						<img src="images/asset5.png" class="outline-image">
						<img id="6" src="images/platelet.png" alt="platelet Image" class="card-image">
					</div>
					<div class="card">
						<img src="images/asset5.png" class="outline-image">
						<img id="7" src="images/plasma.png" alt="plasma Image" class="card-image">
					</div>
					<div class="card">
						<img src="images/asset5.png" class="outline-image">
						<img id="8" src="images/wholeb.png" alt="wholeb Image" class="card-image">
					</div>

					<div class="card">
						<img src="images/asset5.png" class="outline-image">
						<img id="9" src="images/platelet.png" alt="platelet Image" class="card-image">
					</div>
					<div class="card">
						<img src="images/asset5.png" class="outline-image">
						<img id="10" src="images/redcell.png" alt="redcell Image" class="card-image">
					</div>
					<div class="card">
						<img src="images/asset5.png" class="outline-image">
						<img id="11" src="images/wholeb.png" alt="wholeb Image" class="card-image">
					</div>
					<div class="card">
						<img src="images/asset5.png" class="outline-image">
						<img id="12" src="images/redcell.png" alt="redcell Image" class="card-image">
					</div>
				</div>

				<div class="progress-container">

					<div class="move-counter">Moves: 0</div>
					<button id="restart" class="restart-button">
						Restart Game
					</button>
				</div>
				<div class="end-container" style="display: none" ;>
					<div id="completion-message" class="completion-message"></div>
					<button class="end-btn" onclick="restartMemory()">Restart Game</button>
					<button class="end-btn" onclick="goHomeAndScore()">Save and Return Home</button>
				</div>
			</div>
		</div>

	</main>
	<!-- Footer Section -->
	<footer>
		<p>&copy; 2024 Dermawan Darah Memory Card Game. All rights reserved.</p>
	</footer>
	<script src="scriptmg.js"></script>

	<script>


		// Function to return home and update score
		function goHomeAndScore() {
			// Call updateScores function with the quiz score
			updateScores(move);
			// Return home
			goHome();
		}
	</script>

	<!-- Win Sound -->
	<audio id="win-sound" src="images/win.mp3"></audio>
</body>

</html>