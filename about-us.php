<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="about-us-style.css">
	<script type="text/javascript" src="navbar.js"></script>
	<link rel="icon" type="image/x-icon" href="./img/logo-tower.png">
	<title>ASCENT | About Us</title>
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

	<div class="container">
		<div class="container1">
			<div class="gradient particles-container" style="padding: 5vh 0;">
				<div class="">
					<h1 style="font-size: 4vw; color: #010402; padding: 0; margin: 5vw 0 0 10vw;">ABOUT US</h1>
					<div class="content-container">
						<div class="black-square">
							<img src="./img/slayed.png" class="centered" style="width: 12vw; height: auto;">
						</div>
						<p class="text-in-container">This website was created in compliance with the course CS108 - Application Development and Emerging Technologies. However, the concept came about due to the developers' shared interests in games and they were confident that they would be able to passionately design an official website for a game. This website was also a chance for the developer's to explore new avenues in web design, as well as expand their HTML, CSS, and Javascript knowledge through trial by fire. The concept for the game, content about the game, and hand-drawn assets are all original creations born from the developers' active imaginations.</p>
					</div>
				</div>
			</div>

			
		</div>

		<div class="divider">
			<div class="gradient">
				<div class="gold-line"></div>
			</div>
		</div>

		<div class="container2">
			<div class="gradient" style="padding: 3vh 0 6.5vh 0;">
				<span class="button" style="margin-top: 3%; margin-left: 30%; margin-bottom: 1%;  font-size: 2rem;">
					<div class="button-content" style="z-index: 1;">
						<img src="./img/long-button.png" style="width: 40vw;">
						<div class="centered">MEET THE CREATORS</div>
					</div>
				</span>

				<div class="profile-photos">
					<div class="profile-container1 carl" id="first-container-in-row">
						<div class="text-border">
							<div class="profile-text-container">
								<p>
									<i>Quote: "Nap lang ako" *natulog nang 6 hrs wala pang toothbrush*</i> <br> <br>

									Name: Carl Edward L. San Jose <br>
									Age: 20 <br>
									Description: Nawa'y makapasa sa lahat ng subject
									<br> <br>
									Contribution: sa dito sa doon basta may ambag
								</p>
							</div>
						</div>
					</div>

					<div class="profile-container1 yesh">
						<div class="text-border">
							<div class="profile-text-container">
								<p>
									<i>“I achieved it but i can’t see it *insert crying emoji*”</i> <br> <br>

									Name: Yesha Zaire M. Razo <br>
									Age: 20 <br>
									Short Desc.: Down bad for our creations sheesh
									<br> <br>
									Contribution: contents and pa-epeks ✨✨ 
								</p>
							</div>
						</div>
					</div>

					<div class="profile-container1 meja">
						<div class="text-border">
							<div class="profile-text-container" style="color: black;">
								<p>
									<i>"Rest lang ako mga 30 mins. *nagising kinabukasan"</i> <br> <br>

									Name：Meja Lian Lyka M. Maceda <br>
									Age：20 <br>
								</p>
								<p style="color: white;">
									<span style="color: black;">Short</span> desc.：Kulang sa<span style="color: black;"> tulog</span>, kulang sa lambing, <span style="color: black;">ku</span>lang sa lahat. 
									<br> <br>
									Contribution：Design design 🖍️🖌️ ganun
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="profile-photos">
					<div class="profile-container2 max" id="first-container-in-row">
						<div class="text-border">
							<div class="profile-text-container">
								<p>
									<i>“Nagdadrama lang pala ako ayos na siya HAHAHA”</i> <br> <br>

									Name: Maxine Elizabeth O. Severo <br>
									Age: 20 <br>
									Short Desc.: Maraming pakulo emi
									<br> <br>
									Contribution: Backend kemerut, Navbar sissywap, may natulong naman godbless
								</p>
							</div>
						</div>
					</div>
				<div class="profile-container2 gess">
					<div class="text-border">
							<div class="profile-text-container">
								<p>
									<i>”Gala nang gala, may project pa pala.”</i>
									<br> <br>
									Name: Gessa Melnon Sanoria <br>
									Age: 20 <br>
									Description: Tao pa naman.
									<br> <br>
									Contribution: Ewan, may utang pa nga ako sa gawain. Hikhok.
								</p>
							</div>
						</div>	
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
                            <a href="about-us.php" class="nowActive" style="margin-left: -15%;">ABOUT US</a>
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