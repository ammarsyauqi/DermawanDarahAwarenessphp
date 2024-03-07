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
    <link rel="stylesheet" href="stylebene.css">
    <title>The Benefits of Blood Donation</title>

    <style>
        section > img {
            animation: fade linear forwards;
            animation-timeline: view();
            animation-range-start: entry;
            animation-range-end: 300px;
        }

        #backbtn {
            animation: fade-down 0.5s;
        }

        @keyframes fade {
            from {scale: .3; opacity: 0;}
            to {scale: 1; opacity: 1;}
        }

        @keyframes fade-down{
            0% {
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
            <img src="images/Banner-benefits.png" alt="banner" class="banner-image" >    
            <br/>
            <audio controls class="audio-1">
                <source src="voice/intro.mp3" type="audio/mpeg" >
                Your browser does not support the audio element.
            </audio>
        </section>

        <section id="benefits_1">
            <img src="images/benefits-1.png" alt="benefits_1" class="benefits1-image">
            <br/>
            <div>
            <audio controls class="audio-2">
                <source src="voice/benefits_1.mp3" type="audio/mpeg" >
                Your browser does not support the audio element.
            </audio>
            </div>
        </section>

        <section id="benefits_2">
            <img src="images/benefits-2.png" alt="benefits_2" class="benefits2-image">
            <br/>
            <audio controls class="audio-3">
                <source src="voice/benefits_2.mp3" type="audio/mpeg" >
                Your browser does not support the audio element.
            </audio>
        </section>

        <section id="benefits_3">
            <img src="images/benefits-3.png" alt="benefits_3" class="benefits3-image">
            <br/>
            <audio controls class="audio-4">
                <source src="voice/benefits_3.mp3" type="audio/mpeg" >
                Your browser does not support the audio element.
            </audio>
        </section>

        <section id="benefits_4">
            <img src="images/benefits-4.png" alt="benefits_4" class="benefits4-image">
            <br/>
            <audio controls class="audio-5">
                <source src="voice/benefits_4.mp3" type="audio/mpeg" >
                Your browser does not support the audio element.
            </audio>
        </section>

        <section id="benefits_5">
            <img src="images/benefits-5.png" alt="benefits_5" class="benefits5-image">
            <br/>
            <audio controls class="audio-6">
                <source src="voice/benefits_5.mp3" type="audio/mpeg" >
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
