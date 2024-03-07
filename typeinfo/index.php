<?php
require 'C:\xampp\htdocs\fyp\config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Type of Blood Donation</title>
    <!--favicon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styletype.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
        }

        body {
            background: #bdb9b936;
            overflow-x: hidden;
            
        }

        #headerdrip {
            left:0;
            right: 0;
            position:absolute;
            margin-top: 0%;
            z-index: 0;
        }
        #headerdrip2 {

            margin-left: 63%;
            position:absolute;
            margin-top: 0%;
            z-index: 0;
        }

        #footerdrip {
            margin-left:-2.8%;
            margin-top: -10.5%;
            position:absolute;
            z-index: 0;
        }

        #footerdrip2 {
            margin-top: -10.5%;
            margin-left: 60%;
            position:absolute;
            z-index: 0;
        }

        .timeline {
            position: relative;
            max-width: 1200px;
            margin: 100px auto;
            z-index: 1;
        }

        .container {
            padding: 10px 50px;
            position: relative;
            width: 50%;
            /*background: rgba(0, 0, 0, 0.3);*/
            left: 40%;
            animation: move-down 1s linear forwards;
            opacity: 0;
        }

        @keyframes move-down {
            0% {
                opacity: 1;
                transform: translateY(-30px);
            }

            100% {
                opacity: 1;
                transform: translateY(0px);
            }
        }

        .container:nth-child(1) {
            animation-delay: 0s;
        }

        .container:nth-child(2) {
            animation-delay: 1s;
        }

        .container:nth-child(3) {
            animation-delay: 2s;
        }

        .container:nth-child(4) {
            animation-delay: 3s;
        }



        .textbox {
            padding: 20px 30px;
            background: #fff;
            position: relative;
            border-radius: 6px;
            font-size: 15px;
        }

        .container img {
            position: absolute;
            width: 60px;
            border-radius: 20%;
            right: 110%;
            top: 32px;
            z-index: 10;
        }

        /*creating line*/
        .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            height: 100%;
            background: #dd464e;
            top: 0;
            right: 67.23%;
            z-index: -1;
            animation: moveline 4s linear forwards;
        }

        @keyframes moveline {
            0% {
                height: 0;
            }

            100% {
                height: 100%;
            }
        }

        .textbox h2 {
            font-weight: 600;
        }

        .textbox small {
            display: inline-block;
            margin-bottom: 15px;
        }

        .textbox p {
            display: inline-block;
            margin-bottom: 15px;
        }

        /*arrow*/
        .right-container-arrow {
            height: 0;
            width: 0;
            position: absolute;
            top: 48px;
            z-index: 1;
            border-top: 15px solid transparent;
            border-bottom: 15px solid transparent;
            border-right: 15px solid #fff;
            left: -15px;
        }

        tbody img {
            width: 35%;
            height: auto;
        }

        @media screen and (max-width:600px){
            .timeline{
                margin: 50px auto;
            }
            .timeline::after{
                left:72px;
            }
            .container{
                width:100%;
                padding-left: 150px;
                padding-right: 25px;
            }
            .textbox{
                font-size: 13px;
            }

            .textbox small{
                margin-bottom: 10px;
            }
            .container{
                left: 0;
            }
            .container img{
                left: 50px;
                width: 50px;
            }
            .right-container-arrow{
                border-right: 15px solid #fff;
                border-left: 0;
                left: -15px;
            }
            
        }

        
    </style>


</head>
<header>
    <a href="/fyp/awareness.php"><i class="fa fa-arrow-left" style="font-size:36px" id="backbtn"></i></a>
</header>
<body>
    <section id="banner">
        <img src="images/bannertype.png" alt="banner" class="banner-image" >
        
    </section>
    <div id="headerdrip"><img src="images/headerdrip.gif"></div>
    <div id="headerdrip2"><img src="images/headerdrip.gif"></div>
    <!--info -->
    <div class="timeline">

        <div class="container">
            <a  href="#info_1"><img src="images/oblood.png"></a>
            <div class="textbox">
                <h2>Type O</h2>
                <small>We need your RED BLOOD CELLS</small>
                <p><b>Your RED BLOOD CELLS can be transfused to all blood types, which is very useful in emergency
                        situations.</b></p>
                <p>Red blood cells are often administered after an accident, during surgery or to treat anemia.</p>
                <br/> <br/> 
            <audio controls class="audio-1">
                <source src="voice/info_1.mp3" type="audio/mpeg" >
                Your browser does not support the audio element.
            </audio>
                <span class="right-container-arrow"></span>
            </div>
        </div>

        <div class="container">
            <a  href="#info_3"><img src="images/ablood.png"></a>
            <div class="textbox">
                <h2>Type A</h2>
                <small>We need your PLATELETS</small>
                <p><b>Your PLATELETS can be transfused to 88% of patients.</b></p>
                <p>Platelets are often prescribed after chemotherapy. It is used to treat certain cancers, such as
                    leukemia.</p>
                    <br/> <br/> 
            <audio controls class="audio-2">
                <source src="voice/info_2.mp3" type="audio/mpeg" >
                Your browser does not support the audio element.
            </audio>
                <span class="right-container-arrow"></span>
            </div>
        </div>

        <div class="container">
            <a  href="#info_2"><img src="images/bblood.png"></a>
            <div class="textbox">
                <h2>Type B</h2>
                <small>We need your PLASMA</small>
                <p><b>Your PLASMA can be used for close to 50% of the population, whereas your red blood cells can only
                        be transfused to 12% of patients.</b></p>
                <p>Plasma is particularly effective in treating serious burn victims and controlling bleeding.</p>
                <br/> <br/> 
            <audio controls class="audio-3">
                <source src="voice/info_3.mp3" type="audio/mpeg" >
                Your browser does not support the audio element.
            </audio>
                <span class="right-container-arrow"></span>
            </div>
        </div>

        <div class="container">
            <a  href="#info_4"><img src="images/abblood.png"></a>
            <div class="textbox">
                <h2>Type AB</h2>
                <small>We need your PLASMA</small>
                <p><b>Your PLASMA can be transfused to all blood types, which makes it very valuable.</b></p>
                <p>Plasma is particularly effective in treating serious burn victims and controlling bleeding.</p>
                <br/> <br/> 
            <audio controls class="audio-4">
                <source src="voice/info_4.mp3" type="audio/mpeg" >
                Your browser does not support the audio element.
            </audio>
                <span class="right-container-arrow"></span>
            </div>
        </div>

    </div>
    <div id="footerdrip"><img src="images/footerdrip.gif"></div>
    <div id="footerdrip2"><img src="images/footerdrip.gif"></div>
    
    <!--info 2-->
    

    <section id="info_1">
        <img src="images/wbloodinfo.png" alt="info_1" class="info_1image">
    </section>

    <section id="info_2">
        <img src="images/redcellsinfo.png" alt="info_2" class="info_2image">
    </section>

    <section id="info_3">
        <img src="images/plateletsinfo.png" alt="info_3" class="info_3image">
    </section>

    <section id="info_4">
        <img src="images/plasmainfo.png" alt="info_4" class="info_4image">
    </section>

    

    
    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Dermawan Darah Infographics. All rights reserved.</p>
    </footer>
</body>

</html>