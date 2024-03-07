<?php
require 'config.php';

// Check if the user is logged in
if (!empty($_SESSION["id"])) {
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM adminp WHERE id = $id");
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
  <title>Admin DermawanDarah</title>

  <!----bootstrap---->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!---favicon-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
  <link rel="stylesheet" href="/fyp/style.css">

  <style>
    .hero-content h1 {
      font-size: 6rem;
    }

    #home {
      background-image: unset;
    }

    #texttitle {
      margin-top: 70px;
      text-align: center;
      color: black;
      text-decoration: underline;
      font-size: 30px;

    }


    .buttonedit,
    .buttondelete {
      display: inline-block;
      width: 100px;
      height: 40px;
      line-height: 40px;
      text-align: center;
      border-radius: 5px;
      margin-right: 10px;
      text-decoration: none;
      font-weight: bold;
      cursor: pointer;
    }

    .buttonedit {
      background-color: #4CAF50;
      border: 2px solid #4CAF50;
      color: white;
    }

    .buttondelete {
      background-color: #f44336;
      border: 2px solid #f44336;
      color: white;
    }

    .buttonedit:hover,
    .buttondelete:hover {
      opacity: 0.8;
    }


    #tableSection {
      margin-top: 10%;
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
          <span class="logo-text">Admin DermawanDarah</span>
        </div>

        <nav class="navbar" data-navbar>

          <ul class="navbar-list">

            <li class="navbar-item">
              <a href="adminindex.php" class="navbar-link" data-nav-link>Home</a>
            </li>

            <li class="navbar-item">
              <a href="create.php" class="navbar-link" data-nav-link>Add User</a>
            </li>

            <li class="navbar-item">
              <a href="userdata.php" class="navbar-link" data-nav-link>Users Data</a>
            </li>

            <li class="navbar-item">
              <a href="admininfo.php" class="navbar-link" data-nav-link>News</a>
            </li>

            <li class="navbar-item">
              <a href="feedback.php" class="navbar-link" data-nav-link>Feedback</a>
            </li>

            <?php
            // Conditionally display buttons based on user login status
            if ($isLoggedIn) {
              echo '<li class="navbar-item"><a href="adminlogout.php" class="navbar-link">Logout</a></li>';
            }
            ?>
          </ul>

        </nav>


        <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
          <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
        </button>
        <div class="overlay" data-nav-toggler data-overlay></div>

      </div>
    </header>

    <!-- h1 -->

    <section class="section hero" id="home" aria-label="hero">

      <div class="container">


        <div class="hero-content">
          <h1 class="h1 hero-title">
            <?php
            // Check if the user is logged in
            if ($isLoggedIn) {
              echo 'Welcome <span class="has-before">' . htmlspecialchars($row["username"]) . '</span>.';
            } else {
              echo 'Wait! You are not <span class="has-before">Admin</span>.';
            }
            ?>
          </h1>
        </div>

      </div>
    </section>


    <!-- Footer Section -->
    <footer>
      <p>&copy; 2024 Dermawan Darah. All rights reserved.</p>
    </footer>
  </main>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>



</body>

</html>