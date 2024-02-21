<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Linked stylesheets -->
    <link rel="stylesheet" href="stylesheet.css">

    <!-- Linked stylesheet font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bellefair&display=swap">

    <!-- Link Logo Tower -->
	<link rel="icon" type="image/x-icon" href="./img/logo-tower.png">

	<script type="text/javascript" src="navbar.js"></script>

    <title>ASCENT | About</title>

    <style>
    	body, html {
		    margin: 0;
		    padding: 0;
		}

		body {
		    font-family: 'Bellefair', sans-serif; 
		    background-image: url('./img/aboutpage_croppedbg.png');
		    background-size: cover;
		    background-position: center;
		    background-repeat: no-repeat;
		    background-attachment: fixed;
		    height: 100%;
		}

		.about-container {
		    text-align: center;
		    height: 100vh;
		}

		h1 {
		    font-size: 48px;
		    color: black;
		    font-weight: 300;
		    margin-top: 30%;
		    padding-left: 50px;
		}

		.line {
		    width: 85%;
		    height: 2px;
		    background-color: #fff;
		    margin: 0 auto 20px;
		    margin-left: 68px;
		    padding: 1.5px;
		}

		.synopsis {
		    background-color: rgba(255, 255, 255, 0.5);
		    padding: 20px;
		    position: relative;
		    margin-left: 10%;
		    margin-bottom: 50%;
		    font-size: 2vw;
		    color: black;

		}

		.container2 {
			margin-top: 5%;
			float: left;
			width: 45%;
			opacity: 0;
			animation: fadeIn 1.5s ease-in-out forwards;
		}

		@keyframes fadeIn {
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
			<a class="navlinks" href="newspage.php">News</a>
			<a class="navlinks" href="characterpage.php">Characters</a>
			<a class="navlinks" href="guidepage.php">Guides</a>
			<div class="navlinks dropdown">
				<a class="navlinks has-dropdown" tabindex="0">Explore &#9661;</a>
					<div class="dropdown-menu" id="dropdown">
						<a class="drop-item nowActive" href="aboutpage.php">About</a>
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
		<div class="about-container">
			<div class="container2">
				<h1>GAME SYNOPSIS</h1>
				
				<div class="synopsis">
					<p>
						In the mythical world of Astra, an ancient tower known as the Ascendant Spire 
						pierces the heavens, its upper reaches veiled in mystery. As civilizations thrive 
						below, the Spire beckons adventurers to explore its ever-changing levels filled with 
						challenges, treasures, and untold secrets. Players embark on a quest to ascend the 
						tower, unravel its enigmatic history, and confront the formidable adversaries guarding 
						its heights. A looming darkness threatens Astra, and only those who conquer the 
						Ascendant Spire can hope to save the realm.
					</p>
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

</body>
</html>
