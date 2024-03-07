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
    <title>Awareness</title>

    <!-- -favicon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="stylehome.css">
    <style>
        header {
            background-color: #fff;
        }

        main {
            min-height: 100vh;
        }

        /* Features Section */
        .features {
            background-image: url('images/background-01.png');
            background-repeat: no-repeat;
            background-size: 100% 80%;
            background-position-y: 0;
            padding: 40px 10px;
            text-align: center;
            height: 100vh;
            display: grid;
            grid-template-rows: repeat(2, auto);
            /*auto height */
            gap: 20px;

        }

        .features h2 {
            color: #000000;
            font-size: 2em;
            margin-top: 8%;
            padding-bottom: 5%;
        }

        .container-f {
            margin: 0 auto 0 auto;
            display: grid;
            grid-template-columns: repeat(2, 700px);
            gap: 20px;
            padding-bottom: 20%;
        }

        .feature-card {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            color: #000000;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .feature-icon img {
            display: block;
            margin: 0 auto;
            max-width: 20%;
            padding: 10px 0 20px 0;
        }


        .footer {
            position: fixed;
            right: 0;
            left: 0;
            bottom: 0;
            background-color: #010066;
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
        <!-- Awareness Categories -->
        <section id="features" class="features">
            <h2>Awareness</h2>
            <div class="container-f">


                <div class="feature-card">
                    <a href="news.php">
                        <div class="feature-icon">
                            <img src="images/awarenessnews.png" alt="Feature 1" width="50%">
                        </div>
                        <h3>News</h3>
                        <p>Get the latest updates on blood donation, from groundbreaking achievements to inspiring
                            stories of generosity and hope. Discover how each donation makes a difference and how you
                            can be a part of this life-saving mission. Click here to stay connected and informed about
                            the world of blood donation.</p>
                    </a>
                </div>

                <div class="feature-card">
                    <a href="/fyp/importanceinfo/index.php">
                        <div class="feature-icon">
                            <img src="images/awarenessimportance.png" alt="Feature 2" width="50%">
                        </div>
                        <h3>Importance of Blood Donation Infographic</h3>
                        <p>See How You Can Help: Learn why giving blood is so important. Learn how your blood can save
                            people's lives and feel good about helping. Take a quick look and find out how you can be a
                            hero!</p>
                    </a>
                </div>

                <div class="feature-card">
                    <a href="/fyp/benefitsinfo/index.php">
                        <div class="feature-icon">
                            <img src="images/awarenessbenefits.png" alt="Feature 3" width="50%">
                        </div>
                        <h3>Blood Donation Benefits Infographic</h3>
                        <p>Discover the Good You Do: Learn about the positive effects on your health and the joy of
                            saving lives. See the facts in an easy-to-understand way, and find out why donating blood is
                            a win-win. Take a peek and see all the good you can do!</p>
                    </a>
                </div>

                <div class="feature-card">
                    <a href="/fyp/typeinfo/index.php">
                        <div class="feature-icon">
                            <img src="images/awarenesstype.png" alt="Feature 4" width="50%">
                        </div>
                        <h3>Types of Blood Donation Infographic</h3>
                        <p>Know Your Options: Learn about whole blood, platelets, and plasma donations in simple terms.
                            See how each type helps patients in need. Get informed and discover the right donation
                            option for you. Explore the infographic now to see how you can make a difference!</p>
                    </a>
                </div>
            </div>
        </section>


        <!--- footer-->

        <footer class="footer">
            <div class="container">

                <div class="footer-bottom">

                    <p class="copyright">
                        &copy; 2024 DermawanDarah. All Rights Reserved by Ammar Syauqi
                    </p>

                    <ul class="footer-bottom-list">

                        <li>
                            <a href="https://pdn.gov.my/v2/" class="footer-bottom-link">Pusat Darah Negara</a>
                        </li>

                        <li>
                            <a href="https://www.redcrescent.org.my" class="footer-bottom-link">Malaysian Red
                                Crescent</a>
                        </li>

                        <li>
                            <a href="http://localhost/fyp/login/index.php" class="footer-bottom-link">Login / Signup</a>
                        </li>

                    </ul>

                </div>

            </div>
        </footer>
    </main>

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