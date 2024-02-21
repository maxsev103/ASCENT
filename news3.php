<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ASCENT | Welcome to Ascent!</title>

    <!-- Link the stylesheet -->
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link rel="icon" type="image/x-icon" href="./img/logo-tower.png">
    <script type="text/javascript" src="navbar.js"></script>

    <!-- Stylesheet -->
    <style type="text/css">
        body {
            font-family: 'Abel', sans-serif;
        }
        
        .container2 {
            background-image: url(./img/abstractbg2.jpg);
            background-size: cover;
            width: 100vw;
            max-height: 100%;
            margin: 17vh 0 0 0;
        }

        .box-in-container2 {
            width: 50vw;
            height: auto;
            margin: 12vh 0 2vh 21vw;
            padding: 10vh;
            display: flex;
            background-color: #D9D9D9;
            opacity: 0; 
            animation: fadeIn 1s forwards;
        }

        .text-in-container2 {
            justify-items: center;
            text-align: justify;
            margin: 0 2vw;
        }

        .text-side-by-side {
            display: flex; 
            justify-content: space-between; 
            align-items: center;
        }

        h2 {
            font-family: 'Bellefair', sans-serif;
            color: black;
            background-color: transparent;
        }

        h3 {
            text-align: center;
        }

        h4 {
            font-family: 'Inter', sans-serif; 
            text-align: right;
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
    <!-- End of stylesheet -->
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
        <div class="flexcontainer">
            <div class="container2">
                <div class="gradient" style="padding-top: 1vh;">
                    <div class="box-in-container2">
                        <div class="text-in-container2">
                            <div class="text-side-by-side">
                                <h2>[11.30] "WELCOME TO ASCENT!"</h2>
                                <h4 style="text-align: left;">Dec. 22, 2023</h4>
                            </div>
                            <h3>Greetings, esteemed Aethercasters!</h3>
                            <p style="font-size: 1vw;">
                                The radiant skies of Astra shine brighter as we extend a heartfelt welcome to 
                                both seasoned travelers and fresh faces stepping into the enchanting world of Aether Ascend. 
                                Whether you're a seasoned veteran or a newcomer seeking adventure, the Ascendant Spire welcomes you with open arms.
                                <br>
                                <p style="text-align: right;">By the MYMCG Team</p>
                                <br>
                            </p>

                            <p style="font-size: 1vw;">
                                In a grand unveiling, the mystical realm of Astra is thrilled to welcome a new wave of adventurers – 
                                the Aethercasters! As guardians of Aetherflux manipulation, these skilled individuals are set to unravel 
                                the profound secrets concealed within the towering enigma known as the Ascendant Spire.
                                <br><br>
                                <strong>Mastering Aetherflux Manipulation:</strong>
                                <br>
                                Aethercasters, prepare to immerse yourselves in the ancient art of Aetherflux manipulation. Unleash the 
                                potential of this enigmatic force as you navigate the intricacies of Astra's celestial realm. The Ascendant 
                                Spire awaits, its ever-changing levels promising challenges, treasures, and untold secrets for those daring 
                                enough to explore.
                                <br><br>
                                <strong>The Enigma of the Ascendant Spire:</strong>
                                <br>
                                At the heart of Astra lies the Ascendant Spire, a majestic structure piercing the skies with unparalleled grandeur. 
                                It harbors untold power and peril, shrouded in mysteries that only the Aethercasters can hope to unveil. 
                                The fate of Astra rests upon your shoulders – will you rise to the challenge and ascend beyond the stars?
                                <br><br>
                                <strong>Astra's Destiny in Your Hands:</strong>
                                <br>
                                The destiny of Astra hangs in the balance, and it is the Aethercasters who hold the key to its salvation. 
                                Navigate the Ascendant Spire, confront formidable adversaries, and piece together the enigmatic history that has 
                                shaped the realm. Every choice you make will reverberate through the celestial landscape, shaping the destiny of 
                                Astra itself.
                                <br><br>
                                <strong>Join the Ascent:</strong>
                                <br>
                                The realm of Astra eagerly awaits the arrival of Aethercasters. This is your moment to shine, to ascend beyond the 
                                ordinary and embrace the extraordinary. The mysteries of Astra beckon, and the Ascendant Spire stands as both a 
                                challenge and an invitation – will you answer the call?
                                <br><br>
                                As Astra opens its celestial gates to a new generation of adventurers, the legacy of Aethercasters begins. 
                                May your journey be filled with wonder, discovery, and the triumphant ascent beyond the stars!
                            </p>
                        </div>
                    </div>

                    <!-- Back button -->
                    <span class="button centered-button" style="padding: 5vh; font-size: 1.5rem; opacity: 0; animation: fadeIn 1s forwards;">
                        <!-- Button to go back to container1 -->
                        <a href="newspage.php" class="button-content">
                            <img src="./img/Button.png">
                            <div class="centered">BACK</div>
                        </a>
                    </span>
                    <!-- End of button -->

                </div>
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
</body>
</html>