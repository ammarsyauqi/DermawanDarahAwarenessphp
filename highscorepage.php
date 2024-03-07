<?php
require 'config.php';

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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Highscore</title>

    <!----bootstrap---->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!---favicon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="/fyp/style.css">

    <style>
        #texttitle {
            margin-top: 70px;
            text-align: center;
            color: black;
            text-decoration: underline;
            font-size: 30px;
        }

        #tableSection {
            margin-top: 10%;
        }

        tr th {
            text-align: center;
        }

        tr td {
            text-align: center;
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            padding: 20px;
            background-color: #010066;
            text-align: center;
            color: white;
        }
    </style>

</head>

<body id="top">
    <main>
        <!-- HEADER-->

        <header class="header" data-header>
            <div class="container">
                <div class="logo-container">
                    <img src="images/asset5.png" alt="Logo" class="logo-image">
                    <span class="logo-text">DermawanDarah</span>
                </div>




                <nav class="navbar" data-navbar>

                    <ul class="navbar-list">

                        <li class="navbar-item">
                            <a href="/fyp/index.php" class="navbar-link" data-nav-link>Home</a>
                        </li>

                        <li class="navbar-item">
                            <a href="#features" class="navbar-link" data-nav-link onclick="redirect1()">Categories</a>
                        </li>

                        <li class="navbar-item">
                            <a href="./findhospital/index.php" class="navbar-link" data-nav-link>Find Blood Centre</a>
                        </li>

                        <li class="navbar-item">
                            <a href="#about-us" class="navbar-link" data-nav-link onclick="redirect2()">About Us</a>
                        </li>

                        <li class="navbar-item">
                            <a href="#contact" class="navbar-link" data-nav-link onclick="redirect3()">Contact Us</a>
                        </li>

                        <?php
                        // Conditionally display buttons based on user login status
                        if ($isLoggedIn) {
                            echo '<li class="navbar-item"><a href="highscorepage.php" class="navbar-link">Highscore</a></li>';
                            echo '<li class="navbar-item"><a href="login/logout.php" class="navbar-link">Logout</a></li>';
                        }
                        ?>
                    </ul>

                </nav>


                <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
                    <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
                </button>

                <?php
                if (!$isLoggedIn) {
                    echo '<a href="http://localhost/fyp/login/index.php" class="btn btn-primary has-before has-after">Log in</a>';
                }
                ?>


                <div class="overlay" data-nav-toggler data-overlay></div>

            </div>
        </header>

        <!-- table -->
        <div id="tableSection">
            <h1 id="texttitle">Top Highscore Among Users</h1><br>
            <div class="container my-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>USERNAME</th>
                            <th>QUIZ</th>
                            <th>SLIDING PUZZLE MOVES</th>
                            <th>MEMORY CARD GAME MOVES</th>
                            <th>WORD SCRAMBLE MOVES</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "connection.php";
                        $sql = "SELECT * FROM highscore ORDER BY quiz_score DESC";
                        $result = $conn->query($sql);
                        if (!$result) {
                            die("Invalid query!");
                        }
                        $rowNumber = 1; // Initialize row number 
                        while ($row = $result->fetch_assoc()) {
                            echo "
                      <tr>
                          <td>$rowNumber</td>
                          <td>$row[username]</td>
                          <td>$row[quiz_score]</td>
                          <td>$row[puzzle_score]</td>
                          <td>$row[memory_score]</td>
                          <td>$row[wscramble_score]</td>

                      </tr>
                  ";
                            $rowNumber++; // Increment row number
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>


        <!-- Footer Section -->
        <footer>
            <p>&copy; 2024 Dermawan Darah. All rights reserved.</p>
        </footer>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!---js---->
    <script src="script.js" defer></script>

    <!--- ionicon link-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        function redirect1() {
            window.location.href = "/fyp/index.php#features";
        }

        function redirect2() {
            window.location.href = "/fyp/index.php#about-us";
        }

        function redirect3() {
            window.location.href = "/fyp/index.php#contact";
        }

    </script>


</body>

</html>