<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ASCENT | News</title>

    <!-- Link the stylesheet -->
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link rel="icon" type="image/x-icon" href="./img/logo-tower.png">
    <script type="text/javascript" src="navbar.js"></script>

    <!-- Stylesheet -->
    <style type="text/css">
        body {
            font-family: 'Inter', serif;
            scroll-snap-type: y mandatory;
            overflow-y: scroll;
        }

        .container1 {
            background-image: url(./img/abstractbg2.jpg);
            background-attachment: fixed;
            width: 100vw;
            height: 90vh;
            margin-top: 17vh;
            
        }

        .box-in-container1 {
            width: 50vw;
            height: auto;
            margin-left: 24vw;
            display: flex;
            background-color: #D9D9D9;
            opacity: 0; 
            animation: fadeIn 1s forwards;
        }

        .img-in-container1 {
            max-height: 30vh;
            max-width: 100%;
            opacity: 0; 
            animation: fadeIn 1s forwards;
        }

        .text-in-container1 {
            margin: 2vw 2vw 0 2vw;
            font-size: 0.8vw;
            text-align: justify;
            opacity: 0; 
            animation: fadeIn 1s forwards;
        }

        .container2 {
            background-image: url(./img/abstractbg2.jpg);
            background-attachment: fixed;
            width: 100vw;
            max-height: 100%;
            padding-right: 0;
        }

        .box-in-container2 {
            width: 50vw;
            height: auto;
            margin: 10vh 0 10vh 26vw;
            display: flex;
            flex-direction: column;
            background-color: #D9D9D9;
            opacity: 0; 
            animation: fadeIn 1s forwards;
        }

        .img-in-container2 {
           max-height: 23vh;
           max-width: 100%;
           transform: rotate(180deg); /* Rotate the image by 180 deg */
        }

        .text-in-container2 {
            justify-items: center;
            text-align: justify;
            margin-left: 2vw;
            margin-right: 2vw;
            opacity: 0; 
            animation: fadeIn 1s forwards;
        }

        .text-side-by-side {
            display: flex; 
            justify-content: space-between; 
            align-items: center;
        }

        h1 {
            font-size: 100px;
            margin-top: 5vh;
            margin-bottom: 6vh;
            text-align: center;
            opacity: 0; 
            animation: fadeIn 1s forwards;
        }

        .container1,
        .container2 {
            scroll-snap-align: start;
        }

        .gradient {
            background: linear-gradient(90deg, rgba(255, 192, 203, 0.4), rgba(173, 216, 230, 0.4), rgba(255, 192, 203, 0.4));
            background-size: 900% 900%; 
            animation: gradientTransition 20s infinite linear;
        }

        @keyframes gradientTransition {
            0% {
                background-position: 0%;
            }
            100% {
                background-position: 100%;
            }
        }

        .no-scroll {
            overflow: hidden;
        }

        .hidden {
            display: none;
        }

        .centered-button {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
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
            <a class="navlinks nowActive" href="newspage.php">News</a>
            <a class="navlinks" href="characterpage.php">Characters</a>
            <a class="navlinks" href="guidepage.php">Guides</a>
            <div class="navlinks dropdown">
                <a class="navlinks has-dropdown" tabindex="0">Explore &#9661;</a>
                    <div class="dropdown-menu" id="dropdown">
                        <a class="drop-item" href="aboutpage.php">About</a>
                        <a class="drop-item" href="featurepage.php">Features</a>
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

    <!-- Content -->
    <div class="container">
        <!-- Container 1 -->
        <div class="flexcontainer">
            <div class="container1" style="padding-bottom: 0.5vh;">
                <div class="gradient" style="padding: 3vh 0 7vh 0;">
                    <!-- Content in container1 -->
                    <h1>NEWS</h1>
                    <h3 style="text-align: left; margin: 0 0 2vh 53vh; opacity: 0; animation: fadeIn 1s forwards;"><strong>LATEST</strong></h3>
                    <div class="box-in-container1">
                        <img class="img-in-container1" src="./img/news img2.png">
                        <div class="text-in-container1">
                            <h3>
                                <a href="news1.php">[12.25] "MERRY AXEMAS" EVENT</a>
                            </h3>
                            <p>
                                In the mystical realm of Astra, 
                                Aethercasters, wielders of Aetherflux manipulation, 
                                gathered in joyous celebration of the annual event, 
                                "Merry Axemas." Against the backdrop of the towering 
                                enigma, the Ascendant Spire, participants embarked on 
                                a unique quest to uncover the secrets of the ancient 
                                structure, while embracing the holiday spirit.
                            </p>
                            <h4 style="text-align: right;">Dec. 25, 2023</h4>
                        </div>
                </div>

                <!-- Button to see more -->
                <span class="button" style="margin-left: 40%; font-size: 1.5rem; opacity: 0; animation: fadeIn 1s forwards;">
                    <a class="button-content" onclick="toggleSeeMoreSection()">
                        <img src="./img/Button.png">
                        <div class="centered">SEE MORE</div>
                    </a>
                </span>
                </div>
            </div>
        </div>

        <!-- Container 2 (See More Section) -->
        <div class="flexcontainer">
            <div id="seeMoreSection" class="container2" style="display: none;">
                <div class="gradient" style="margin-top: 16vh; padding-bottom: 2vh; padding-top: 1vh; padding-right: 55vh;">
                    <!-- Content in container2 (See More Section) -->
                    <div class="box-in-container2" >
                        <div class="text-in-container2">
                            <div class="text-side-by-side">
                                <h3 style="margin-bottom: 0;">
                                    <a href="news1.php">[12.25] "MERRY AXEMAS EVENT"</a>
                                </h3>
                                <h4 style="text-align: right; margin-bottom: 0;">Dec. 25, 2023</h4>
                            </div>
                            <p>
                                In the mystical realm of Astra, 
                                Aethercasters, wielders of Aetherflux manipulation, 
                                gathered in joyous celebration of the annual event, 
                                "Merry Axemas." Against the backdrop of the towering 
                                enigma, the Ascendant Spire, participants embarked on 
                                a unique quest to uncover the secrets of the ancient 
                                structure, while embracing the holiday spirit.
                            </p>
                            <hr>
                            <div class="text-side-by-side">
                                <h3 style="margin-bottom: 0;"><a href="news2.php">[UPDATE NOTES 1.1]</a></h3>
                                <h4 style="text-align: right; margin-bottom: 0;">Dec. 22, 2023</h4>
                            </div>
                            <p>
                                Ascend boldly, Aethercasters! May the stars guide your path in Astra Ascent. 
                                Prepare yourselves for an exhilarating upgrade to your Astra experience! 
                                Version 1.1 Ascent is here, introducing a host of new features, challenges, 
                                and mysteries. Let's dive into the cosmic updates:
                            </p>
                            <hr>
                            <div class="text-side-by-side">
                                <h3 style="margin-bottom: 0;"><a href="news3.php">"WELCOME TO ASCENT!"</a></h3>
                                <h4 style="text-align: right; margin-bottom: 0;">Nov. 30, 2023</h4>
                            </div>
                            <p>
                                Greetings, esteemed Aethercasters! The radiant skies of Astra shine brighter as we 
                                extend a heartfelt welcome to both seasoned travelers and fresh faces stepping into 
                                the enchanting world of Aether Ascend. Whether you're a seasoned veteran or a newcomer 
                                seeking adventure, the Ascendant Spire welcomes you with open arms.
                            </p>
                        </div>
                    </div>

                    <span class="button centered-button" style="margin-left: 35%; font-size: 1.5rem; opacity: 0; animation: fadeIn 1s forwards;">
                        <!-- Button to go back to container1 -->
                        <a class="button-content" onclick="goBackToContainer1()">
                            <img src="./img/Button.png">
                            <div class="centered">GO BACK</div>
                        </a>
                    </span>
                    
                </div>

            </div>
        </div>
        <!-- End of content -->

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
    </div>

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

    <!-- Toggle See More Section -->
    <script type="text/javascript">
        function toggleSeeMoreSection() {
            var container1 = document.querySelector('.container1');
            var seeMoreSection = document.getElementById('seeMoreSection');
            
            // Hide container1
            container1.style.display = 'none';

            // Show the seeMoreSection
            seeMoreSection.style.display = 'flex';
            
            // Scroll to the top of the seeMoreSection
            seeMoreSection.scrollIntoView({ behavior: 'smooth' });
        }

        // Function to go back to container1
        function goBackToContainer1() {
            var container1 = document.querySelector('.container1');
            var seeMoreSection = document.getElementById('seeMoreSection');
            
            // Hide seeMoreSection
            seeMoreSection.style.display = 'none';

            // Show container1
            container1.style.display = 'inline';

            // Scroll to the top of container1
            document.documentElement.scrollTop = 0;
        }
    </script>


</body>
</html>