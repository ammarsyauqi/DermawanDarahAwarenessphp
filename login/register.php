<?php
require 'config.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $q1 = " INSERT INTO `registration`( `username`, `email`, `password` ) VALUES ( '$username', '$email', '$password' )";

    $query1 = mysqli_query($conn, $q1);

    if ($query1) { 
        // Retrieve the inserted user's id
        $userId = mysqli_insert_id($conn);

        // Insert into 'highscore' table aswell
        $q2 = "INSERT INTO `highscore` (`id`, `username`) VALUES ('$userId', '$username')";
        $query2 = mysqli_query($conn, $q2);

        if ($query2) {
            echo "<script>alert('Registration successful');</script>";
            echo "<script>window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('Error inserting into highscore table');</script>";
        }
    } else {
        echo "<script>alert('Error inserting into registration table');</script>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--favicon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
    <style>
        #backbtnheader {
            padding: 20px;
            background-color: #333;
            color: white;
            text-align: center;
        }

        #backbtn {
            border: none;
            color: white;
            padding: 12px 16px;
            font-size: 16px;
            cursor: pointer;
        }

        #backbtn:hover {
            color: RoyalBlue;
        }

    </style>
</head>

<body>
<header id="backbtnheader">
        <a href="http://localhost/fyp/login/index.php"><i class="fa fa-arrow-left" style="font-size:36px" id="backbtn"></i></a>
    </header>

    <div class="container">
        <div class="box form-box">
            <header>Sign Up</header>
            <form action="register.php" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Register" >
                </div>
                <div class="links">
                    Already a member? <a href="http://localhost/fyp/login/index.php">Sign In</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>