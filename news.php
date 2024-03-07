<?php
require 'config.php';
include 'connection.php';


// Fetch news data from the database for each section
$sql1 = "SELECT * FROM news WHERE id = 1001"; // Fetch data for the first news section
$sql2 = "SELECT * FROM news WHERE id = 1002"; // Fetch data for the second news section
$sql3 = "SELECT * FROM news WHERE id = 1003"; // Fetch data for the third news section

$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--favicon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="newsstyle.css">
    <title>Blood Donation News</title>

    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        header {
            padding: 20px;
            background-color: #DF1E26;
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

        main {
            display: grid;
            grid-template-rows: auto 1fr auto;
            height: 100vh;
        }

        section {

            text-align: center;
            color: black;
            box-sizing: border-box;
        }

        /* Section-specific styles */

        #bannernews {
            background-image: url('images/bgnews2.gif');
            background-size: cover;
            height: 70vh;
            padding: 150px 0 0 0;
        }

        #bannernews img {
            width: 60%;
            height: auto;
        }


        #news_1,
        #news_2,
        #news_3 {
            background-image: url('images/bgnews.gif');
            background-size: cover;
            min-height: 90vh;
            width: auto;
            padding: 7% 0 20px 0;

        }

        #news_2 {
            background-image: url('images/bgnews2.gif');
            background-size: cover;
            min-height: 50vh;
        }

        #news_3 {
            background-color: lightsalmon;
            min-height: 100vh;
        }


        footer {
            position: relative;
            bottom: 0;
            padding: 10px;
            background-color: #555;
            text-align: center;
            color: white;
        }

        section>img {
            animation: fade-in linear forwards;
            animation-timeline: view();
            animation-range-start: entry;
            animation-range-end: 200px;
        }

        #backbtn {
            animation: fade-down 0.5s;
        }

        @keyframes fade-in {
            from {
                scale: .3;
                opacity: 0;
            }

            to {
                scale: 1;
                opacity: 1;
            }
        }

        @keyframes fade-down {
            0% {
                opacity: 0;
                transform: translateY(-30px) scale(0.9);
            }

            100% {
                opacity: 1;
                transform: translateY(0px) scale(1);
            }
        }


        /*responsive*/
        @media only screen and (max-width: 768px) {
            header {
                padding: 20px;
            }

            main {
                grid-template-rows: auto repeat(5, 1fr) auto;
            }

            section {
                padding: 10px;
            }


            #bannernews {
                height: auto;
                padding: 0;
                bottom: 0;
            }


            #news_1,
            #news_2,
            #news_3 {
                height: auto;
                padding: 20px 5% 20px 5%;
                margin-top: -1%;

            }

        }
    </style>

</head>

<body>
    <header>
        <a href="/fyp/awareness.php"><i class="fa fa-arrow-left" style="font-size:36px" id="backbtn"></i></a>
    </header>

    <main>
        <section id="bannernews">
            <img src="images/news.png" alt="banner" class="banner-image">

        </section>

        <section id="news_1" class="news1">
            <?php
            // Fetch data for the first news section
            $row1 = mysqli_fetch_assoc($result1);
            $newsName1 = $row1['name'];
            $newsImageUrl1 = $row1['img'];
            $newsVideoUrl1 = $row1['url'];

            // Determine whether to display image or video based on availability
            if (!empty($newsImageUrl1)) {
                // If image is available, display image
                echo '<h2>' . $newsName1 . '</h2>';
                echo '<div class="img-container vid-container">';
                echo '<img src="' . $newsImageUrl1 . '" alt="News Image">';
                echo '</div>';
            } elseif (!empty($newsVideoUrl1)) {
                // If image is not available but video URL is, display video
                echo '<h2>' . $newsName1 . '</h2>';
                echo '<div class="img-container vid-container">';
                echo $newsVideoUrl1;
                echo '</div>';
            } else {
                // If neither image nor video is available, display 'Data not found'
                echo '<p>Data not found</p>';
            }
            ?>
        </section>

        <section id="news_2" class="news2">
        <?php
            // Fetch data for the first news section
            $row2 = mysqli_fetch_assoc($result2);
            $newsName2 = $row2['name'];
            $newsImageUrl2 = $row2['img'];
            $newsVideoUrl2 = $row2['url'];

            // Determine whether to display image or video based on availability
            if (!empty($newsImageUrl2)) {
                // If image is available, display image
                echo '<h2>' . $newsName2 . '</h2>';
                echo '<div class="img-container vid-container">';
                echo '<img src="' . $newsImageUrl2 . '" alt="News Image">';
                echo '</div>';
            } elseif (!empty($newsVideoUrl2)) {
                // If image is not available but video URL is, display video
                echo '<h2>' . $newsName2 . '</h2>';
                echo '<div class="img-container vid-container">';
                echo $newsVideoUrl2;
                echo '</div>';
            } else {
                // If neither image nor video is available, display 'Data not found'
                echo '<p>Data not found</p>';
            }
            ?>
        </section>

        <section id="news_3" class="news3">
        <?php
            // Fetch data for the first news section
            $row3 = mysqli_fetch_assoc($result3);
            $newsName3 = $row3['name'];
            $newsImageUrl3 = $row3['img'];
            $newsVideoUrl3 = $row3['url'];

            // Determine whether to display image or video based on availability
            if (!empty($newsImageUrl3)) {
                // If image is available, display image
                echo '<h2>' . $newsName3 . '</h2>';
                echo '<div class="img-container vid-container">';
                echo '<img src="' . $newsImageUrl3 . '" alt="News Image">';
                echo '</div>';
            } elseif (!empty($newsVideoUrl3)) {
                // If image is not available but video URL is, display video
                echo '<h2>' . $newsName3 . '</h2>';
                echo '<div class="img-container vid-container">';
                echo $newsVideoUrl3;
                echo '</div>';
            } else {
                // If neither image nor video is available, display 'Data not found'
                echo '<p>Data not found</p>';
            }
            ?>
        </section>

        <!-- Footer Section -->
        <footer>
            <p>&copy; 2024 Dermawan Darah Infographics. All rights reserved.</p>
        </footer>
    </main>
</body>

</html>