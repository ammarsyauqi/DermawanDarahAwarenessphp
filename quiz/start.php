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
    <!--favicon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="stylequiz.css">
    <title>Quiz Game</title>
  
</style>
<body>
    <header>
        <a href="/fyp/interactive.php"><i class="fa fa-arrow-left" style="font-size:36px" id="backbtn"></i></a>
    </header>
    <main>
        <div class="container">
            <!-- Start Page -->
            <div id="start-page" class="start-page">
                <h1>Welcome to the Quiz Game</h1>
                <p>Test your Blood Donation knowledge with our quiz. Are you ready?</p>
                <button id="start-button" class="btn" onclick="startGame()">Start Quiz</button>
                
            </div>

            <!-- Quiz Container -->
            <div id="quiz-container" style="display: none;">
                <div id="question-container"></div>
                <div id="answer-buttons" class="btn-container"></div>
                <button id="next-button" class="btn" onclick="nextQuestion()">Next</button>
                <div id="score-container">Score: <span id="score">0</span></div>
                <div id="end-buttons" style="display: none;">
                    <div id="end-buttons-container">
                        <button class="end-btn" onclick="restartQuiz()">Restart Quiz</button>
                        <button class="end-btn" onclick="goHomeAndScore()">Return Home</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Dermawan Darah Quiz. All rights reserved.</p>
    </footer>

    <script src="quiz.js"></script>
    <script>
    // Function to return home and update score
    function goHomeAndScore() {
        // Call updateScores function with the quiz score
        updateScores(score);
        // Return home
        goHome();
    }
</script>
    

</body>

</html>