<?php
require 'config.php';
include "connection.php";

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

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $q = " INSERT INTO `registration`( `username`, `email`, `password` ) VALUES ( '$username', '$email', '$password' )";

    $query = mysqli_query($conn, $q);

    if ($query) { 
        echo "<script>window.location.href='adminindex.php';</script>";
    } else {
        echo "<script>alert('Error');</script>";
    }

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
        #formContainer {
            margin-top: 5%;
        }

        .card {
            border: none;
        }

        .card-header {
            background-color: transparent !important;
            border: none !important;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: 100%;
            height: 40px;
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

        <!----form add/register new user--->
        <div id="formContainer">
            <div class="col-lg-6 m-auto">

                <form method="post">

                    <br><br>
                    <div class="card">

                        <div class="card-header">
                            <h1 class="text-black text-center"> Create New User </h1>
                        </div><br><br>

                        <label> USERNAME: </label>
                        <input type="text" name="username" class="form-control" required> <br>

                        <label> EMAIL: </label>
                        <input type="email" name="email" class="form-control" required> <br>

                        <label> PASSWORD: </label>
                        <input type="password" name="password" class="form-control" required> <br>



                        <button class="btn btn-success" type="submit" name="submit"> Add User </button>

                    </div>
                </form>
            </div>
        </div>

        <!-- Footer Section -->
        <footer>
            <p>&copy; 2024 Dermawan Darah. All rights reserved.</p>
        </footer>
     </main>

     
</body>

</html>