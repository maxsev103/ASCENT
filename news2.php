<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ASCENT | Update Notes 1.1</title>

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
                                <h2>[12.22] [UPDATE NOTES 1.1]</h2>
                                <h4 style="text-align: left;">Dec. 22, 2023</h4>
                            </div>
                            <h3>Ascend boldly, Aethercasters! May the stars guide your path in Astra Ascent</h3>
                            <p style="font-size: 1vw;">
                                Prepare yourselves for an exhilarating upgrade to your Astra experience! 
                                Version 1.1 Ascent is here, introducing a host of new features, challenges, 
                                and mysteries. Let's dive into the cosmic updates:
                                <br><br>
                                <strong>1. Ascend Beyond Limits:</strong>
                                Embark on a journey of unparalleled heights as we unveil additional levels in the Ascendant Spire. Each level presents unique challenges, treasures, and adversaries. Conquer the expanded Spire and cement your legacy as a true Aethercaster.
                                <br><br>
                                <strong>2. Aetherflux Mastery Unleashed:</strong>
                                Master the ancient art of Aetherflux manipulation with enhanced skills and techniques. Dive into an enriched Aetherflux system, offering a more immersive and strategic experience. Unleash newfound powers and watch as your Aethercaster reaches unprecedented heights.
                                <br><br>
                                <strong>3. Unique Sets and Abilities:</strong>
                                Discover and collect unique sets of gear and abilities for your Aethercaster. Customize your character's playstyle, creating a truly unique and powerful cosmic force. Your choices will shape the destiny of Astra.
                                <br><br>
                                <strong>4. Pilgrimage Rewards:</strong>
                                Undertake the sacred pilgrimage to ascend the Ascendant Spire and be rewarded with exclusive in-game items. The higher you climb, the more prestigious the rewards. Will you be the first to claim the pinnacle treasures?
                                <br><br>
                                <strong>5. Celestial Challenges Await:</strong>
                                Prepare for new challenges and adversaries lurking in the shadows of the Ascendant Spire. Face off against formidable foes and test your Aethercasting skills to the limit. Only the bravest will emerge victorious.
                                <br><br>
                                <strong>6. Seamless UI Enhancements:</strong>
                                Experience the game with an improved user interface for smoother navigation and enhanced controls. Your journey through Astra has never been more intuitive.
                                <br><br>
                                <strong>7. Aethercaster Lore Library:</strong>
                                Immerse yourself in the rich lore of Aethercasters with an expanded in-game library. Uncover the secrets of Astra and gain insights into the history of the Ascendant Spire.
                                <br><br>
                                <strong>8. Astra Reimagined:</strong>
                                Witness the visual overhaul of Astra with enhanced graphics, animations, and celestial landscapes. Ascent is now more visually stunning than ever before.
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