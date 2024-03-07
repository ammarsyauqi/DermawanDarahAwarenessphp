<?php
require 'login/config.php';

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

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Validate form input
  $name = $_POST["name"];
  $email = $_POST["email"];
  $feedbackmsg = $_POST["feedbackmsg"];

  // Insert data into feedback table
  $sql = "INSERT INTO feedback (name, email, feedbackmsg) VALUES ('$name', '$email', '$feedbackmsg')";

  if (mysqli_query($conn, $sql)) {
    // Display popup message using JavaScript
    echo '<script>alert("Thank you for your feedback!");</script>';
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  // Close the database connection
  mysqli_close($conn);
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DermawanDarah</title>

  <!-- -favicon-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
  <link rel="stylesheet" href="stylehome.css">
  <style>

    .herobannerimg2 {
      width: 200%;
      height: auto;
      margin: 20% 40% 30% -30%;
      
    }

    main {
      display: grid;
      grid-template-rows: auto auto auto auto 1fr auto auto;
      /* Seven rows: header, hero, features, video, contact, about us, footer */
      min-height: 100vh;
    }

    section {
      text-align: center;
      color: black;
      width: 100%;
      height: auto;
      box-sizing: border-box;

    }

    section#vid-section {
      margin-top: 400px;
    }

    section#home {
      text-align: left;
    }

    #imgabovecontactus img{
      margin-top: 5%;
      margin-left: 5%;
      position: absolute;
      height: auto;
      width: 38%;
      z-index: 0;
    }

    #imgaboveaboutus img{
      margin-top: -20%;
      margin-left: 72%;
      position: absolute;
      height: auto;
      width: 20%;
      z-index: 0;
    }

    .about-us {
      padding: 80px 60px 200px 60px;

    }

    .about-text {
      padding: 0 20px;

    }


    .about-us {
      background-color: #f9f9f9;
 
    }

    .about-text {
      font-size: 18px;
      line-height: 1.6;
      color: #333;
      
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
              <a href="#features" class="navbar-link" data-nav-link onclick="redirect()">Categories</a>
            </li>

            <li class="navbar-item">
              <a href="./findhospital/index.php" class="navbar-link" data-nav-link>Find Blood Centre</a>
            </li>

            <li class="navbar-item">
              <a href="#about-us" class="navbar-link" data-nav-link>About Us</a>
            </li>

            <li class="navbar-item">
              <a href="#contact" class="navbar-link" data-nav-link>Contact Us</a>
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


    <!-- hero-->

    <section class="section hero" id="home" aria-label="hero">

      <div class="container">


        <div class="hero-content">

          <h1 class="h1 hero-title">
            <?php
            // Check if the user is logged in
            if ($isLoggedIn) {
              echo 'Welcome <span class="has-before">' . htmlspecialchars($row["username"]) . '</span>.';
            } else {
              echo 'Welcome <span class="has-before">Guest</span>.';
            }
            ?>
          </h1>

          <p class="hero-text">
            Dermawan Darah is a website developed to spread awareness among the young society and community in
            order to normalize Blood Donation activity. Click 'Get Started' to Sign up with us!
          </p>

          <div class="wrapper">
            <a href="http://localhost/fyp/login/register.php" class="btn btn-primary has-before has-after">Get
              Started</a>
              
          </div>

        </div>
        <img src="images/banner.gif" class="herobannerimg2">
      </div>
    </section>


    <!-- Features Section -->
    <section id="features" class="features">
      <h2>Features Categories</h2>
      <div class="container-f">


        <div class="feature-card">
          <a href="awareness.php">
            <div class="feature-icon">
              <img src="images/home-card-1.png" alt="Feature 1" width="50%">
            </div>
            <h3>Awareness</h3>
            <p>Blood Donation Awareness, featuring a News Page for updates and an Infographic Page breaking down Types,
              Importance, and Benefits. Be informed, be inspired, and save lives! 🩸</p>
          </a>
        </div>

        <div class="feature-card">
          <a href="findhospital/index.php">
            <div class="feature-icon">
              <img src="images/home-card-3.png" alt="Feature 2" width="50%">
            </div>
            <h3>Find Blood Centre</h3>
            <p>Locate and discover hospitals or blood centres within your area. Be the hero. 🏥</p>
          </a>
        </div>

        <div class="feature-card">
          <a href="interactive.php">
            <div class="feature-icon">
              <img src="images/home-card-2.png" alt="Feature 3" width="50%">
            </div>
            <h3>Interactive Page</h3>
            <p>Learn & Play. Unleash the fun in blood donation education! Take on quizzes, conquer mini-games, and level
              up your knowledge while saving lives. 🧠🕹️</p>
          </a>
        </div>

        <div class="feature-card">
          <a href="#about-us">
            <div class="feature-icon">
              <img src="images/home-card-4.png" alt="Feature 4" width="50%">
            </div>
            <h3>About Us</h3>
            <p>Join us in making a real impact! 🌐</p>
          </a>
        </div>
      </div>
    </section>

    <!-- Video Section -->
    <section id="vid-section" class="vid-section">
      <!-- Video Section... -->
      <h1>Blood donation: an act of solidarity - World Blood Donor Day</h1>
      <br /><br /><br />
      <iframe width="800" height="440" src="https://www.youtube.com/embed/kOISEM6L4xk?si=0acD7IOV7HzuSjWw"
        title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen></iframe>
    </section>
    <div id="imgabovecontactus"><img src="images/home.png"></div>
    <!-- Contact Section -->
    <section id="contact" class="contact">
      <div class="container-cus">
        <h2>Contact Us</h2>
        <p>Do you have a question? Reach out to us!</p>
        <form id="contactForm" method="POST">
          <label for="name">Your Name:</label>
          <input type="text" id="name" name="name" required>

          <label for="email">Your Email:</label>
          <input type="email" id="email" name="email" required>

          <label for="feedbackmsg">Your Message:</label>
          <textarea id="feedbackmsg" name="feedbackmsg" required></textarea>

          <button type="submit" class="btn">Send Message</button>
        </form>
      </div>
    </section>
    <div id="imgaboveaboutus"><img src="images/feedback.png"></div>
    <!-- About Us Section -->
    <section id="about-us" class="about-us">
      <!-- About Us content... -->
      <h1>About Us</h1>
      <img src="images/asset5.png" style="width: 15%; height: auto; padding: 20px; margin: 0 auto;">
      <p class="about-text">Dermawan Darah is a special website made to help young people learn about giving blood. We
        want to make giving
        blood something normal and important in our community. Our goal is to teach everyone that giving blood is not
        just something you do once in a while to help others. It's a way to be a good citizen and help keep everyone
        healthy. Through our website, we share easy-to-understand information and fun activities to show how giving
        blood can make a big difference. We hope to inspire everyone to see giving blood as a regular part of taking
        care of each other. Come join us in this exciting journey to make our community healthier and stronger.
        Together, let's spread the word about the importance of giving blood and make a positive impact in our world.
      </p>
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
              <a href="https://www.redcrescent.org.my" class="footer-bottom-link">Malaysian Red Crescent</a>
            </li>

            <li>
              <a href="http://localhost/fyp/login/index.php" class="footer-bottom-link">Login / Signup</a>
            </li>

          </ul>

        </div>

      </div>
    </footer>
  </main>
  <!---button back to top-->

  <a href="#top" class="back-top-btn has-after active" aria-label="back to top" data-back-top-btn>
    <ion-icon name="arrow-up" aria-hidden="true"></ion-icon>
  </a>


  <!---js---->
  <script src="script.js" defer></script>

  <!--- ionicon link-->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>