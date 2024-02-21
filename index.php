<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ASCENT</title>

	<!-- Linked stylesheet -->
	<link rel="stylesheet" type="text/css" href="homepagestyle.css">
	<link rel="icon" type="image/x-icon" href="./img/icons/logo-tower.png">
	<script type="text/javascript" src="navbar.js"></script>
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
			<a class="navlinks nowActive" href="index.php">Home</a>
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

	<!-- Content -->
	<div class="container">
		<!-- First div -->
		<div class="container1">
			<div class="text-in-container1">
				<img class="img1 fade-in" src="./img/logo-resized.png">
				<span class="button fade-in" style="margin-left: 40%; font-size: 1.5rem;">
					<a href="#PlayNow" class="button-content">
						<img src="./img/Button.png">
						<div class="centered fade-in"><h1 style="font-size: 1.9vw;">PLAY NOW</h1></div>
					</a>
				</span>
			</div>
			<div class="fade-in" style="position: relative;">
				<h4 style="font-family: 'Inter', sans-serif; text-align: center; font-size: 1vw; font-weight: bold;"><strong>AVAILABLE ON</strong></h4>
			</div>
			<div class="flexcontainer" style="justify-content: center; margin: 1% 0;">
				<a href="#"><img class="img6 fade-in" style="margin-right: 5vw; height: 12vh;" src="./img/googleplay.png"></a>
				<a href="#"><img class="img6 fade-in" style="margin-left: 5vw; height: 12vh;" src="./img/applestore.png"></a>
				<div class="white-line" style="margin-right: 1.5%; margin-top: 10%;"></div>
			</div>
		</div>
		<!-- End of first div -->

		<!-- Second div -->
		<div class="container2">

			<div class="layer1" style="z-index: 0; padding-top: 45vh;">
				<h1 class="stroke-text fade-in" style="font-size: 23vw; -webkit-text-stroke-color: #B6B3B3;">News</h1>
			</div>

			<h1 class="fade-in" style="font-size: 7vw; text-align: center; margin: 3% 0;">NEWS</h1>
			<div class="row fade-in">
				<div class="column">
					<div class="box-in-container">
						<img src="./img/news img.png" style="width: 20vw; height: auto;">
						<a href="news2.php"><h2 style="font-size: 1.5vw; margin-left: 10px;">
							[12.22] UPDATE NOTES 
						</h2></a>
						<br>
						<h4 style="text-align: right; padding: 0 1.6vw 1.6vw 0; font-family: 'Inter', sans-serif; font-size: 1vw">
							<strong>Dec. 22, 2023</strong>
						</h4>
					</div>
				</div>
				
				<div class="column">
					<div class="box-in-container">
						<img src="./img/news img2.png" style="width: 20vw; height: auto;">
						<a href="news1.php"><h2 style="font-size: 1.5vw; margin-left: 10px;">
							[12.25] "MERRY AXEMAS" EVENT 
						</h2></a>
						<br>
						<h4 style="text-align: right; padding: 0 1.6vw 1.6vw 0; font-family: 'Inter', sans-serif; font-size: 1vw">
							<strong>Dec. 25, 2023</strong>
						</h4>
					</div>
				</div>
			</div>

			<span class="button fade-in" style="margin-left: 40%; margin-bottom: 1%; font-size: 1.5rem;">
				<a href="newspage.php" class="button-content" style="z-index: 1;">
					<img src="./img/Button.png">
					<div class="centered">SEE MORE</div>
				</a>
			</span>
		</div>
		<!-- End of second div -->

		<!-- Third div -->
		<div class="container3">
			<!-- Layer 1 -->
			<div class="layer1" style="padding-top: 38vh; z-index: 0;">
				<h1 class="stroke-text fade-in" style="font-size: 23vw; -webkit-text-stroke-color: #8A91A9;">Characters</h1>
			</div>
			<!-- End of layer 1 -->

			<!-- Layer 2 -->
			<div class="layer2">
				<h2 class="fade-in" style="font-size: 4vw; margin: 0;">CHARACTERS</h2>
				<h1 class="fade-in" style="font-size: 6vw; margin: 0;">SPECIAL COLLAB CHARACTER!</h1>

				<h3 class="fade-in" style="font-size: 3vw; margin-left: 15vw; margin-bottom: 0;">MIKU HATSUNE</h3>
				<h4 class="fade-in" style="font-size: 2vw; margin-left: 15vw; margin-top: 0;">V.A. Saki Fujita</h4>

				<div class="text-rectangle fade-in" style="background-color: transparent; text-align: center; padding: auto; border: 1px solid black; margin-left: 18vw;">
					<h3 style="font-size: 1.5vw">VIRTUAL DIVA</h3>
				</div>

				<img class="fade-in" src="./img/AQUA_logo.png" style="margin-left: 25vw; height: auto; width: 5vw; margin-top: 10px;">

				<span class="button fade-in" style="margin-left: 21%; margin-top: 3%; font-size: 1.5rem;">
					<a href="characterpage.php" class="button-content" style="z-index: 4">
						<img src="./img/Button.png" style="height: 17vh;">
						<div class="centered">MEET THE CHARACTERS</div>
					</a>
				</span>
			</div>
			<!-- End of layer 2 -->

			<!-- Layer 3 -->
			<div class="layer3" style="padding-left: 42vw; padding-top: 5vh;">
				<img src="./img/pngwing.png">
			</div>
			<!-- End of layer 3 -->
		</div>
		<!-- End of third div -->

		<!-- Fourth div -->
		<div class="container4">
			<div class="container4-layer1">
				<h1 class="stroke-text fade-in" style="font-size: 25vw; -webkit-text-stroke-color: #666260; -webkit-text-stroke-width: 1px; margin-top: 85vh;">
					About
				</h1>
			</div>

			<div class="container4-layer2">
				<h1 class="fade-in" style="font-size: 4vw; color: #010402; padding: 0; margin: 5vw 0 0 5vw;">ABOUT THE GAME</h1>
				<div class="text-in-container1" style="background-color: rgba(217, 217, 217, 0.30); width: 57vw; margin-top: 0; margin-left: -10%; padding-bottom: 17vh; padding-left: 12vw; position: absolute;">
					<p class="fade-in" style="font-size: 1.7vw; text-align: left;">
						Drawn by an ancestral calling, set your sights on ascending the Ascendant Spire—a pilgrimage undertaken by Aethercasters seeking to understand the mysteries of Aetherflux. Unravel the mysteries of the Ascendant Spire, ascend its perilous heights, and confront the malevolent forces that lurk within. 
						<br> <br>
						Gather a fellowship of Aethercasters, each with their own strengths and affinities, to thwart the impending doom and save Astra from the encroaching void. The fate of Astra ressts in your hands—will you rise to the challenge and ascend beyond the stars?
					</p>
				</div>
				<div>
					<span class="button fade-in" style="margin-left: 130%; font-size: 1.2rem; margin-top: 70%;">
					<a href="aboutpage.php" class="button-content" style="z-index: 4">
						<img src="./img/Button.png" style="width: 16vw;">
						<div class="centered">READ MORE</div>
					</a>
				</span>
				</div>
			</div>
		</div>
		<!-- End of fourth div -->

		<!-- Last div -->
		<div class="container5">
			<div class="container5-layer1" style="z-index: 0;">
				<h1 class="stroke-text fade-in" style="font-size: 23vw; -webkit-text-stroke-color: #14204D; -webkit-text-stroke-width: 1px; margin-top: 110vh; ">
					Features
				</h1>
			</div>

			<div class="white-line" style="margin-top: 2%;"></div>

			<div class="container5-layer2">
				<h1 class="fade-in" style="font-size: 4vw; color: #010402; padding: 0; margin: 5vw 0 5vh 5vw; z-index: 2;">FEATURES</h1>
				<div class="row" style="margin-left: 13vw; z-index: 2;">
					<div class="column fade-in">
						<div class="card-cell">
							<img src="./img/Homepage_featurecard1.png" style="height: auto; width: 21vw;">

							<div class="card-content">
								<p style="text-align: left;">
									<b>Open World Exploration:</b>
									A vast and visually stunning open world with diverse landscapes, cities, dungeons, and hidden areas.
								</p>
							</div>
						</div>
					</div>

					<div class="column fade-in">
						<div class="card-cell">
							<img src="./img/Homepage_featurecard2.png" style="height: auto; width: 21vw;" id="middle-card">

							<div class="card-content">
								<p style="text-align: left; color: black;">
									<b>Gacha System for Aethercasters: </b>
									Gacha system for acquiring Aethercasters, each with unique abilities, affinities, and cosmetic options.
								</p>
							</div>
						</div>
					</div>

					<div class="column fade-in">
						<div class="card-cell">
							<img src="./img/Homepage_featurecard3.png" style="height: auto; width: 21vw;">

							<div class="card-content">
								<p style="text-align: left;">
									<b>Rich Story -Driven Quests:</b>
									A compelling and immersive storyline with branching narratives, mysteries, and lore.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="white-line" style="margin-top: 72%;"></div>
			<span class="button fade-in" style="margin-left: 40%; margin-bottom: 1%; margin-top: 62%; font-size: 1.5rem; z-index: 2;">
				<a href="featurepage.php" class="button-content" style="z-index: 4;">
					<img src="./img/Button.png">
					<div class="centered">SEE MORE</div>
				</a>
			</span>
		</div>
		<!-- End of last div -->
	</div>
	<!-- End of main content -->

	<!-- Footer -->
    <footer>
        <div class="flexcontainer" style="margin-left: 5.83vw; margin-top: 1.67vw;">
            <div class="footer-row">
                <div class="footer-column" style="margin-left: -17%;">
                    <div class="flexcontainer" style="align-items: center; justify-content: center;">
                        <img class="img3" src="./img/logo-resized.png">
                        <img class="img5" src="./img/slayed.png" style="margin-left: 7%;">
                    </div>
                </div>
                <div class="footer-column">
                    <div class="footer-row" style="align-items: center; justify-content: center;"> 
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
                        <nav class="footer-row" style="margin-top: 4%;">
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

<!-- Start Javascript -->

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

	<!-- JS For Fade In Effect -->
	<script type="text/javascript">
		document.addEventListener("DOMContentLoaded", function() {
		  // Get all elements with the 'fade-in' class
		  var fadeElements = document.querySelectorAll('.fade-in');

		  // Function to check if an element is in the viewport
		  function isElementInViewport(el) {
		    var rect = el.getBoundingClientRect();
		    return (
		      rect.top >= 0 &&
		      rect.left >= 0 &&
		      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
		      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
		    );
		  }

		  // Function to handle scroll events
		  function handleScroll() {
		    fadeElements.forEach(function(element) {
		      if (isElementInViewport(element)) {
		        element.classList.add('active');
		      }
		    });
		  }

		  // Attach the 'handleScroll' function to the scroll event
		  window.addEventListener('scroll', handleScroll);

		  // Trigger the 'handleScroll' function once to check elements on initial load
		  handleScroll();
		});
	</script>
</body>
</html>