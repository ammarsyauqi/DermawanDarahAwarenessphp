<?php
require 'C:\xampp\htdocs\fyp\config.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--favicon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styleimpo.css">
    <title>The Importance of Blood Donation</title>

    <style>
        
        section > img {
            animation: fade-in linear forwards;
            animation-timeline: view();
            animation-range-start: entry;
            animation-range-end: 200px;
        }

        #backbtn {
            animation: fade-down 0.5s;
        }

        @keyframes fade-in {
            from {scale: .3; opacity: 0;}
            to {scale: 1; opacity: 1;}
        }

        @keyframes fade-down{
            0%{
                opacity: 0;
                transform: translateY(-30px) scale(0.9);
            }
            100% {
                opacity: 1;
                transform: translateY(0px) scale(1);
            }
        }

    </style>

</head>
<body>
    <header>
        <a href="/fyp/awareness.php"><i class="fa fa-arrow-left" style="font-size:36px" id="backbtn"></i></a>
    </header>

    <main>
        <section id="banner">
            <img src="images/banner-importance.png" alt="banner" class="banner-image" >
            
        </section>

        <section id="importance_1">
            <img src="images/importance-1.png" alt="importance_1" class="importance1-image">
            <br/> <br/> <br/>
            <audio controls class="audio-1">
                <source src="voice/importance_1.mp3" type="audio/mpeg" >
                Your browser does not support the audio element.
            </audio>
        </section>

        <section id="importance_2">
            <img src="images/importance-2.png" alt="importance_2" class="importance2-image">
            <br/> <br/> <br/>
            <audio controls class="audio-2">
                <source src="voice/importance_2.mp3" type="audio/mpeg" >
                Your browser does not support the audio element.
            </audio>
        </section>

        <section id="importance_3">
            <img src="images/importance-3.png" alt="importance_3" class="importance3-image">
            <br/> <br/> <br/>
            <audio controls class="audio-3">
                <source src="voice/importance_3.mp3" type="audio/mpeg" >
                Your browser does not support the audio element.
            </audio>
        </section>

        <section id="importance_4">
            <img src="images/importance-4.png" alt="importance_4" class="importance4-image">
            <br/> <br/> <br/>
            <audio controls class="audio-4">
                <source src="voice/importance_4.mp3" type="audio/mpeg" >
                Your browser does not support the audio element.
            </audio>
        </section>

        <section id="importance_5">
            <img src="images/importance-5.png" alt="importance_5" class="importance5-image">
            <br/> <br/> <br/>
            <audio controls class="audio-5">
                <source src="voice/importance_5.mp3" type="audio/mpeg" >
                Your browser does not support the audio element.
            </audio>
        </section>

        <!-- Footer Section -->
        <footer>
            <p>&copy; 2024 Dermawan Darah Infographics. All rights reserved.</p>
        </footer>
    </main>
</body>
</html>
