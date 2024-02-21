<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ASCENT | Feature</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link rel="icon" type="image/x-icon" href="./img/logo-tower.png">
    <script type="text/javascript" src="navbar.js"></script>

    <!-- Stylesheet -->
    <style type="text/css">
        /*Import Font*/
        @import url('https://fonts.googleapis.com/css2?family=Bellefair&display=swap'); /* Bellefair font */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;800&display=swap');    /* Inter font */

        html {
            scroll-behavior: smooth;
            scroll-snap-type: inline;
        }

        body {
            background-color: black;
            display: flex;
            flex-direction: column;
            margin: 0;
            font-family: 'Inter', sans-serif; 
        }

        header {
            font-family: 'Bellefair', serif;
            position: fixed;
            display: flex;
            top: 0;
            left: 0;
            background-color: black;
            width: 100%;
            height: auto;
            padding-inline: 25px;
            align-items: center;
            transition: all 0.5s;
            z-index: 1000;
        }

        header.solid {
            background: transparent;
        }


        .container {
            position: relative;
            width: 100%;
        }

        .section {
            position: relative;
            z-index: 1;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }
        
        .section1 {
            background-image: url('img/featurepage_openworld.png');
            margin-top: 16.1vh;
        }

        .section2 {
            background-image: url('img/featurepage_aetherfluxmastery.png');
        }

        .section3 {
            background-image: url('img/featurepage_ascendantspireclimb.png');
        }

        .section4 {
            background-image: url('img/featurepage_gacha.png');
        }

        .section5 {
            background-image: url('img/featurepage_multiplayerraid.png');
        }

        .section6 {
            background-image: url('img/featurepage_PVP.png');
        }

        .section7 {
            background-image: url('img/featurepage_richstorydriven.png');
        }

        .section8 {
            background-image: url('img/featurepage_dynamic.png');
        }

        .section9 {
            background-image: url('img/featurepage_socialhub.png');
        }

        .section10 {
            background-image: url('img/featurepage_crossplatform.png');
        }

        .overlay-text {
            position: absolute;
            left: 30%; 
            transform: translate(-30%);
            text-align: right; 
            color: white;
            z-index: 1;
        }

        .overlay-text h1 {
            font-family: 'Inter-ExtraBold', sans-serif;
            font-size: 6vw;
            margin: 0;
        }

        .overlay-text p {
            font-family: 'Inter-Regular', sans-serif;
            font-size: 2.1vw;
            margin-top: 10px;
        }

        .first-text {
            top: 27%; 
        }

        .second-text {
            top: 25%; 
        }

        .third-text {
            top: 29%; 
        }

        .forth-text {
            top: 32%; 
            color: black;
        }

        .fifth-text {
            top: 35%; 
        }

        .sixth-text {
            top: 45%; 
        }

        .seventh-text {
            top: 35%; 
            color: black;
        }

        .eighth-text {
            top: 37%; 
        }

        .ninth-text {
            top: 31%; 
        }

        .tenth-text {
            top: 41%; 
            color: black;
        }

        /* Media queries for responsiveness */
        @media screen and (max-width: 768px) {
            .overlay-text h1 {
                font-size: 8vw; /* Adjust the font size for smaller screens */
            }

            .overlay-text p {
                font-size: 3vw; /* Adjust the font size for smaller screens */
            }
        }

        .overlay {
            width: 100%;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: rgba(255, 255, 255, 0);
            pointer-events: none;
            position: fixed;
        }

        .text-block {
            margin-right: 10%;
            opacity: 0;
            visibility: hidden;
            transform: scale(0.95);
            transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
        }

        .text-block.active {
            opacity: 1;
            visibility: visible;
            transform: scale(1);
            z-index: 2;
        }

        /* Media queries for responsiveness */
        @media screen and (max-width: 768px) {
            .overlay-text h1 {
                font-size: 8vw; /* Adjust the font size for smaller screens */
            }

            .overlay-text p {
                font-size: 3vw; /* Adjust the font size for smaller screens */
            }
        }
    </style>
    <!-- End of Stylesheet -->

</head>

<body>
    <!-- Audio -->
    <audio id="playAudio" loop> 
        <source src="./bgm/At_Days_End.mp3" type="audio/mpeg">
        <source src="./bgm/At_Days_End-OGG.ogg" type="audio/ogg">
    </audio>

    <!-- Navbar --> 
    <header id="myHeader">  
        <a href="index.php"><img class="img2" src="./img/logo-resized.png"></a>

        <nav id="myNav">
            <a class="navlinks" href="index.php">Home</a>
            <a class="navlinks" href="newspage.php">News</a>
            <a class="navlinks" href="characterpage.php">Characters</a>
            <a class="navlinks" href="guidepage.php">Guides</a>
            <div class="navlinks dropdown">
                <a class="navlinks has-dropdown" tabindex="0">Explore &#9661;</a>
                    <div class="dropdown-menu" id="dropdown">
                        <a class="drop-item" href="aboutpage.php">About</a>
                        <a class="drop-item nowActive" href="featurepage.php">Features</a>
                        <a class="drop-item" href="worldpage.php">World</a>
                    </div>
            </div>
            <a class="navlinks" href="merchpage.php">Shop</a>

            <!-- If a session is already active/the user is logged in, 
                display the welcome message -->
            <?php if(isset($_SESSION['username']) && isset($_SESSION['email']) && isset($_SESSION['id'])) { ?>
                <span class="user-welcome" id="user">
                        Welcome,&nbsp;
                        <span class="username"> <b><?php echo $_SESSION['username'];?></b> </span>
                        <img class="user-pfp" src="./img/icons/acc-pfp.png">
                        <a class="logout-link" href="logout.php" id="logout-link">Log out</a>
                    </span>
            <!-- Otherwise, show the Login/Sign Up Button -->
            <?php } else { ?>
                <span class="navlinks login-button">
                <a class="login" href="login.php">
                    <img src="./img/Login_Signup-button-no-inner.png">
                    <div class="centered" id="login-text"><b>LOGIN / SIGN UP</b></div>
                </a>
            </span>
            <?php } ?>
        </nav>

        <div class="toggle">
          <a href="#" id="menu-toggle">
            <img src="./img/icons/burger-menu-med.png" alt="Menu">
          </a>
        </div>

        <div id="sound-icon" style="position: absolute; margin-top: 25vh;" onclick="play_mute_Audio()">
            <img src="./img/icons/black-out-mute.png" style="width: 2vw; height: auto; cursor: pointer;">
        </div>
    </header>
    <!-- End of Navbar -->

    <div class="container"> 
        <div> <!-- Display the features -->
            <div class="section section1"> 
                <div class="overlay-text text-block first-text">
                    <h1>
                        Open World Exploration
                    </h1>
                    <p>
                        A vast and visually stunning open world with diverse landscapes, cities, dungeons, 
                        and hidden areas. Day-night cycles, dynamic weather, and interactive environments 
                        enhance the sense of immersion.
                    </p>
                </div>
            </div>
            <div class="section section2">
                <div class="overlay-text text-block second-text">
                    <h1>
                        Aetherflux Mastery System
                    </h1>
                    <p>
                        Unique Aetherflux Mastery System where players harness celestial, atmospheric, shadow, 
                        light, pyro, and nature Aetherflux based on their chosen class. Aetherflux powers provide 
                        diverse and strategic abilities, allowing players to customize their playstyles.
                    </p>
                </div>
            </div>
            <div class="section section3"> 
                <div class="overlay-text text-block third-text">
                    <h1>
                        Ascendant Spire Climbing
                    </h1>
                    <p>
                        Tower climbing mechanics, with each level offering challenges, puzzles, and enemies. 
                        Dynamic level design that evolves as players ascend, revealing the tower's secrets 
                        and unveiling the overarching narrative.
                    </p>
                </div>
            </div>
            <div class="section section4"> 
                <div class="overlay-text text-block forth-text"> 
                    <h1>
                        Gacha System for Aethercasters
                    </h1>
                    <p>
                        Gacha system for acquiring Aethercasters, each with unique abilities, affinities, and cosmetic 
                        options. A growing roster of Aethercasters allows players to build diverse teams for various challenges.
                    </p>
                </div>
            </div>
            <div class="section section5">
                <div class="overlay-text text-block fifth-text">
                    <h1>
                        Multiplayer Raids and Dungeons 
                    </h1>
                    <p>
                        Challenging multiplayer raids and dungeons that encourage cooperation and teamwork. Epic boss battles, 
                        requiring strategic coordination among players.
                    </p>
                </div>
            </div>
            <div class="section section6">
                <div class="overlay-text text-block sixth-text">
                    <h1>
                        PvP Arenas
                    </h1>
                    <p>
                        Structured PvP arenas for players to test their skills in duels and team-based battles. Rankings, rewards, 
                        and seasonal competitions to foster a competitive player community.
                    </p>
                </div>
            </div>
            <div class="section section7"> 
                <div class="overlay-text text-block seventh-text">
                    <h1>
                        Rich Story-Driven Quests
                    </h1>
                    <p>
                        A compelling and immersive storyline with branching narratives, mysteries, and lore. Player decisions impact 
                        the game world and unlock different outcomes.
                    </p>
                </div>
            </div>
            <div class="section section8">
                <div class="overlay-text text-block eighth-text">
                    <h1>
                        Dynamic Events 
                    </h1>
                    <p>
                        Dynamic in-game events that alter the world based on player actions. Seasonal events, festivals, and challenges 
                        to keep the game world lively and engaging.
                    </p>
                </div>
            </div>
            <div class="section section9">
                <div class="overlay-text text-block ninth-text">
                    <h1>
                        Social Hubs and Guilds
                    </h1>
                    <p>
                        Social hubs where players can interact, trade, form parties, and engage in various activities. Guild system with 
                        shared progression, guild quests, and cooperative activities.
                    </p>
                </div>
            </div>
            <div class="section section10">
                <div class="overlay-text text-block tenth-text">
                    <h1>
                        Cross-Platform Play
                    </h1>
                    <p>
                        Cross-platform play allowing players on different devices to interact seamlessly. Shared progression and account 
                        accessibility across platforms.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="flexcontainer" style="margin-left: 5.83vw; margin-top: 1.67vw;">
            <div class="row">
                <div class="column" style="margin-left: -17%;">
                    <div class="flexcontainer" style="align-items: center; justify-content: center;">
                        <img class="img3" src="./img/logo-resized.png">
                        <img class="img5" src="./img/slayed.png" style="margin-left: 7%;">
                    </div>
                </div>
                <div class="column">
                    <div class="row" style="align-items: center; justify-content: center;"> 
                        <table style="margin-left: -63%;">
                            <tr>
                                <td style="padding-bottom: 5%; font-size: 1.1rem;">SOCIAL MEDIA</td>
                            </tr>
                            <tr>
                                <td style="width: 20vw;">
                                    <a href="#"><img class="img4" src="./img/icons/fbicon.png"></a>
                                    <a href="#"><img class="img4" src="./img/icons/twittericon.png"></a>
                                    <a href="#"><img class="img4" src="./img/icons/igicon.png"></a>
                                    <a href="#"><img class="img4" src="./img/icons/yticon.png"></a>
                                </td>
                            </tr>
                        </table>
                        <img class="img6" src="./img/Teen.png" style="margin-left: 3%;">
                        <nav class="row" style="margin-top: 4%;">
                            <a href="about-us.php" style="margin-left: -15%;">ABOUT US</a>
                            <a href="#">TERMS OF SERVICE</a>
                            <a href="#">PRIVACY POLICY</a>
                            <a href="#">COOKIE POLICY</a>
                            <a href="#">SUPPORT</a>
                            <a href="#">CONTACT US</a>
                            <a href="#"> CAREERS</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="flexcontainer" id="footer-small-text">
            <p>
                © 2023 MYMCG Studios All rights reserved. Published and distributed by BOogsh Publishing.  MYMCG LTD. All company names, brand names, trademarks and logos are the property of their respective owners. © 2023 Aethercasters United. Ascent, it’s logo, and concept are properties of MYMCG Studio.
            </p>
        </div>
    </footer>
    <!-- End of Footer -->


    <!-- JS For bgm toggling -->
    <script type="text/javascript">
        var bgm = document.getElementById("playAudio");
        var soundIcon = document.getElementById("sound-icon");

        var muteIcon = '<img src="./img/icons/black-out-mute.png" style="width: 2vw; height: auto; cursor: pointer;">';
        var unmuteIcon = '<img src="./img/icons/black-out-sound.png" style="width: 2vw; height: auto; cursor: pointer;">';

        function play_mute_Audio() {
            bgm.volume = 0.5;

            if (!bgm.paused || bgm.currentTime) {
                bgm.muted = !bgm.muted;
                if (bgm.muted) {
                    soundIcon.innerHTML = muteIcon;
                } else {
                    soundIcon.innerHTML = unmuteIcon;
                }
            } else {
                bgm.play();
                soundIcon.innerHTML = unmuteIcon;
            }
        }   
    </script>

    <!-- Text JS script -->
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            var textBlocks = document.querySelectorAll('.text-block');
            var navLinks = document.querySelectorAll('nav a');

            function isInViewport(element) {
                var rect = element.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }

            function handleScroll() {
                textBlocks.forEach(function (block) {
                    if (isInViewport(block)) {
                        block.classList.add('active');
                    }
                });

                // Change navigation link color based on scroll position
                if (window.pageYOffset > sticky) {
                    navLinks.forEach(function (link) {
                        link.classList.add('color-change');
                    });
                } else {
                    navLinks.forEach(function (link) {
                        link.classList.remove('color-change');
                    });
                }
            }

            window.addEventListener('scroll', handleScroll);
            // Trigger once on page load
            handleScroll();
        });
    </script>   
    <!-- End of script -->
    
</body>
</html>