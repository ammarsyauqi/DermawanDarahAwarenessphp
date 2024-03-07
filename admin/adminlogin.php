<?php
require 'config.php';
if (isset($_POST["submit"])){
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM adminp WHERE username = '$usernameemail' OR email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: http://localhost/fyp/admin/adminindex.php");
        }
        else{
            echo
            "<script> alert('Wrong Password'); </script>";
        }
    }
    else{
        echo
        "<script> alert('User not Registered'); </script>";
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
    <link rel="stylesheet" href="stylesdsd.css">
    <title>Login</title>
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

        /**************************************************************/

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: ' Helvetica', 'Poppins', sans-serif;
        }

        .logo-admin {
            margin-bottom: 50px;
            width: 100%;
            max-width: 10%;
            height: auto;
            padding: 0;
        }

        h1#h1-title{
            margin-bottom: 60px;
            border-bottom: 2px solid black;
            color: #000000;
            text-align: center;
            padding: 0;
            
        }

        main{
            background-image: url('images/background.png');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container {
            
            display: flex;
            flex-direction: column; /* Display in a column */
            align-items: center;
            justify-content: center;
            height: 100%;
            min-height: 100vh;
            
        }

        .form-wrapper {
            
            margin-bottom: 180px;
        }

        .box {
            background: #fdfdfd;
            display: flex;
            flex-direction: column;
            padding: 25px 25px;
            border-radius: 20px;
            box-shadow: 0 0 128px 0 rgba(0, 0, 0, 0.1),
                0 32px 64px -48px rgba(0, 0, 0, 0.5);
        }

        .form-box {
            width: 450px;
            margin: 0px 10px;
        }

        .form-box header {
            font-size: 25px;
            font-weight: 600;
            padding-bottom: 10px;
            border-bottom: 1px solid #e6e6e6;
            margin-bottom: 10px;
        }

        .form-box form .field {
            display: flex;
            margin-bottom: 10px;
            flex-direction: column;

        }

        .form-box form .input input {
            height: 40px;
            width: 100%;
            font-size: 16px;
            padding: 0 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline: none;
        }

        .btn {
            height: 35px;
            background: hsl(241, 77%, 63%);
            border: 0;
            border-radius: 5px;
            color: #fff;
            font-size: 15px;
            cursor: pointer;
            transition: all .3s;
            margin-top: 10px;
            padding: 0px 10px;
        }

        .btn:hover {
            background: #ffc107;
            
        }

        .submit {
            width: 100%;


        }


        .links {
            margin-bottom: 15px;
        }
    </style>

</head>

<body>
    <header id="backbtnheader">
        <a href="/fyp/index.php"><i class="fa fa-arrow-left" style="font-size:36px" id="backbtn"></i></a>
    </header>
       <main>
    <div class="container">
        <img src="images/asset5.png" class="logo-admin">
        <h1 id="h1-title">Welcome to Admin Page</h1>
        <div class="form-wrapper">
            <div class="box form-box">
                <header>Login</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="usernameemail">Username</label>
                        <input type="text" name="usernameemail" id="usernameemail" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" autocomplete="off" required>
                    </div>

                    <div class="field">
                        <input type="submit" class="btn" name="submit" value="Login" required>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
       </main>
</body>

</html>
