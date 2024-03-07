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

// Initialize variables for radio button options
$option1_id = "";
$option2_id = "";
$option3_id = "";

// Fetch data from the news table
$sql = "SELECT * FROM news";
$result = $conn->query($sql);

// Check if there are rows in the result set
if ($result->num_rows > 0) {
    // Loop through each row
    while ($row = $result->fetch_assoc()) {
        // Assign row IDs to respective options
        if ($row['id'] == 1001) {
            $option1_id = $row['id'];
        } elseif ($row['id'] == 1002) {
            $option2_id = $row['id'];
        } elseif ($row['id'] == 1003) {
            $option3_id = $row['id'];
        }
    }
}

// Initialize variables for image and video URLs
$imgurl = "";
$vidurl = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get selected news ID
    $selected_news_id = $_POST['id'];

    // Get the submitted image and video URLs
    $imgurl = $_POST['img'];
    $vidurl = $_POST['url'];

    // Build the SQL query based on the  fields
    $sql = "UPDATE news SET ";
    if (!empty($imgurl)) {
        $sql .= "img = '$imgurl'";
    }
    if (!empty($vidurl)) {
        if (!empty($imgurl)) {
            $sql .= ", ";
        }
        $sql .= "url = '$vidurl'";
    }
    $sql .= " WHERE id = $selected_news_id";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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

        .news-option input[type="radio"] {
            display: unset;
            margin: unset;
            padding: unset;
            border: unset;
            background: unset;
            width: unset;

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

        <!-- Form for updating news -->
        <div id="formContainer">
            <div class="col-lg-6 m-auto">
                <form method="post">
                    <br><br>
                    <div class="card">
                        <div class="card-header bg-warning">
                            <h1 class="text-white text-center">Update News</h1>
                        </div><br>

                        <!-- Radio buttons for selecting news options -->
                        <label class="news-option" style="display: block; text-align: center; margin-bottom: 20px;">
                            <input type="radio" name="option" value="1001" onclick="selectNews(this.value)"> News 1
                        </label>
                        <label class="news-option" style="display: block; text-align: center; margin-bottom: 20px;">
                            <input type="radio" name="option" value="1002" onclick="selectNews(this.value)"> News 2
                        </label>
                        <label class="news-option" style="display: block; text-align: center; margin-bottom: 20px;">
                            <input type="radio" name="option" value="1003" onclick="selectNews(this.value)"> News 3
                        </label>



                        <!-- Hidden input field to store the selected news ID -->
                        <input type="hidden" name="id" id="selected_option"
                            value="<?php echo isset($_POST['id']) ? $_POST['id'] : ''; ?>">

                        <!-- IMAGE PATH input field -->
                        <label>IMAGE PATH:</label>
                        <input type="text" name="img" value="<?php echo $imgurl; ?>" class="form-control"> <br>

                        <!-- VIDEO PATH input field -->
                        <label>VIDEO PATH:</label>
                        <input type="text" name="url" value="<?php echo $vidurl; ?>" class="form-control"> <br>

                        <!-- Submit button -->
                        <button class="btn btn-success" type="submit" name="submit"
                            onclick="clearForm()">Update</button><br>
                    </div>
                </form>
            </div>
        </div>

        <!-- Footer Section -->
        <footer>
            <p>&copy; 2024 Dermawan Darah. All rights reserved.</p>
        </footer>

    </main>

    <script>
        // JavaScript function to set the selected news ID
        function selectNews(newsId) {
            document.getElementById('selected_option').value = newsId;
        }

        // JavaScript function to clear the input fields
        function clearForm() {
            document.getElementById("newsForm").reset();
        }
    </script>

</body>

</html>