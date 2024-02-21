<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ASCENT | Merry Axemas Event</title>

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
                                <h2>[12.25] "MERRY AXEMAS" EVENT</h2>
                                <h4>Dec. 25, 2023</h4>
                            </div>
                            <h3>Celebrate Merry Axemas in Astra: Unveiling Festive Mysteries Amidst the Ascendant Spire</h3>
                            <p style="font-size: 1vw;">
                                In the mystical realm of Astra, Aethercasters, wielders of Aetherflux manipulation, gathered in joyous celebration of the annual event, "Merry Axemas." Against the backdrop of the towering enigma, the Ascendant Spire, participants embarked on a unique quest to uncover the secrets of the ancient structure while embracing the holiday spirit.
                                <br><br>
                                <strong>Revelry Amidst Aetherflux Mastery</strong>
                                <br>
                                Aethercasters from far and wide converged upon the Ascendant Spire, their Aetherflux powers illuminated with a festive glow. The air resonated with laughter and camaraderie as Aethercasters donned special Axemas-themed attire, creating a vibrant and magical atmosphere within the mystical realm.
                                <br><br>
                                <strong>Challenges and Rewards Await</strong>
                                <br>
                                During the Merry Axemas event, Aethercasters faced a series of challenges, each designed to test their Aetherflux mastery and unravel the mysteries of the Ascendant Spire. From enchanted snowstorms to holiday-themed adversaries, participants navigated through the ever-changing levels of the Spire, collecting exclusive Axemas rewards and treasures.
                                <br><br>
                                <strong>Beyond the Stars</strong>
                                <br>
                                As Aethercasters progressed through the event, the Ascendant Spire unveiled special Axemas-themed levels, each more dazzling and perilous than the last. Those who successfully reached the pinnacle were rewarded not only with rare artifacts but also with the satisfaction of having risen to the challenge and ascended beyond the stars.
                                <br><br>
                                <strong>Astra's Fate Hangs in the Balance</strong>
                                <br>
                                Amidst the festivities, a looming darkness threatened Astra, adding an element of urgency to the Merry Axemas celebration. Aethercasters united in the face of adversity, pledging to protect their realm and ensure a prosperous and joyous future.
                                <br><br>
                                As the Merry Axemas event continues to unfold, Aethercasters remain vigilant, ready to explore the mysteries of the Ascendant Spire and safeguard the fate of Astra.
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