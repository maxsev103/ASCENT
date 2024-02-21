<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="loginstyle.css">
	<link rel="icon" type="image/x-icon" href="./img/logo-tower.png">
	<script type="text/javascript" src="navbar.js"></script>
	<style>

		.login-row {
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
			width: 100%;
			padding: 10px;
		}

		.login-column {
			display: flex;
			flex-direction: column;
			flex-basis: 100%;
			flex: 1;
			width: 100%;
			margin-top: 3%;
		}

		.login-banner {
			background-image: url('./img/Loginpage_banner.png');
			background-size: cover;
			background-color: #97dcb2;
			background-repeat: no-repeat;
			background-position: center center;
			height: 56vh;
			max-width: 100%;
			margin-top: 17vh;
			padding: 1px;
		}

		.white-line {
			background-color: #D9D9D9;
			height: 5px;
			width: 96%;
			margin-top: 375px;
			margin-left: 2%;
			position: static;
		}

		.login-div {
			background-image: url('./img/scenic-background.png');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
			background-position: center center;
			background-color: #dc97bd;
			height: 150vh;
		}

		.login-card {
			padding: 3%;
			height: 70%;
			width: 35%;
			background-color: rgba(217, 217, 217, 0.40);
			margin-top: 9%;
			margin-left: 3%;
		}

		.login-card-logo {
			height: auto;
			width: 24vw;
			position: absolute;
		}

		.login-card-text {
			font-family: 'Bellefair', serif;
			text-align: center;
			font-size: 2.8rem;
			margin-top: 45%;
		}

		form {
			display: flex;
			height: 50%;
			width: 90%;
			flex-direction: column;
			align-items: center;
		}

		input {
			display: block;
			border-radius: 0;
			font-family: 'Abel', sans-serif;
			outline: none;
			font-size: 20px;
			padding: 3%;
			height: 10vh;
			width: 100%;
			margin-top: 8%;
			transition: 0.5s;
			-webkit-box-shadow: inset 1px 1px 7px 0px rgba(207, 207, 205, 1.0);
			-moz-box-shadow: inset 1px 1px 7px 0px rgba(207, 207, 205, 1.0);
			box-shadow: inset 1px 1px 7px 0px rgba(207, 207, 205, 1.0);
		}

		input:focus {
			border: 2px solid #262b78;
		}

		form > button {
			margin-top: 1%;
			border: none;
			cursor: pointer;
			appearance: none;
			background-color: inherit;
			transition: all 0.5s;
			width: 70%;
		}

		button > img {
			height: auto;
			width: 100%;
		}

		button:hover {
			transform: scale(0.95);
		}

		.login-card > a, .signup-prompt {
			font-family: 'Abel', sans-serif;
			font-size: 1.1rem;
			color: black;
		}

		.signup-prompt {
			margin-top: 10px;
		}

		.error {
			font-family: 'Abel', sans-serif;
			font-size: 1.2rem;
			color: #bb0f1c;
			margin-bottom: -5%;
			margin-top: 5%;
		}

		.toggle-box-text {
			font-family: 'Abel', sans-serif;
			font-size: 1.1rem;
			justify-content: center;
			margin-left: -20%;
		}

		.toggle-box {
			height: 5vh;
			width: 100%;
			margin-left: 10%;
		}

		@keyframes pulse {
		  0% {
		    transform: scale(1); /* Starting size */
		  }
		  50% {
		    transform: scale(1.2); /* Middle size */
		  }
		  100% {
		    transform: scale(1); /* Ending size, same as starting */
		  }
		}

		.pulsating-text {
		  animation: pulse 2s infinite; /* 2s duration, infinite loop */
		  color: #000;
		}

		@media all and (max-width: 968px) {
			.login-card {
				height: 80%;
				width:  60%;
			}

			.login-card-logo {
				height: auto;
				width: 40vw;
				margin-top: 5%;
			}

			.login-card-text {
				margin-top: 60%;
				font-size: 2.5rem;
			}

			input {
				height: 5vh;
			}

			button {
				margin-left: -22%;
			}

			button > img {
				height: auto;
				width: 40vw;
				margin-left: 12%;
			}

			.toggle-box {
				margin-left: 5%;
			}
		}	

		@media all and (max-width: 600px) {
			.login-card {
				margin-top: 30%;
				height: 70%;
				width:  70%;
			}

			.login-card-logo {
				height: auto;
				width: 50vw;
				margin-top: 5%;
			}

			.login-card-text {
				margin-top: 55%;
				font-size: 1.7rem;
			}

			input {
				height: 5vh;
			}

			button {
				margin-left: -30%;
			}

			button > img {
				height: auto;
				width: 50vw;
				margin-left: 12%;
			}

			.toggle-box-text {
				margin-top: 10%;
			}

			.toggle-box {
				margin-top: 15%;
				margin-left: -10%;
			}
		}		

	</style>
	<title>ASCENT | Login</title>
</head>
<body>

	<!-- Audio -->
    <audio id="playAudio" loop>
        <source src="./bgm/InspiringFantasyBackgroundMusicForVideos.mp3" type="audio/mpeg">
        <source src="./bgm/InspiringFantasyBackgroundMusicForVideos-OGG.ogg" type="audio/ogg">
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

	<!-- Login Banner -->
	<div class="login-banner">
		<div class="white-line"></div>
	</div>
	<!-- End Login Banner-->

	<!-- Login Form -->
	<div class="flexcontainer column-flex-center login-div">
		<div class="flexcontainer column-flex-center login-card" id="login">

			<img class="login-card-logo" src="./img/ASCENT-logo.png"><br>
			<span class="login-card-text pulsating-text">Astra awaits your return!</span><br>

			<form action="loginhandle.php" method="POST" id="login-form">

				<!-- Displays error messages during login-->
				<?php if(isset($_GET['error'])) { ?>
					<span class="error"> <?php echo $_GET['error']; ?> </span><br>
				<?php } ?>

				<!-- Form Input Fields -->
				<input for="username" type="text" name="username" id="uname" placeholder="USERNAME"><br>
				<input for="password" type="password" name="password" id="password" placeholder="PASSWORD"><br>

				<div class="login-row">
					<input class="login-column toggle-box" type="checkbox" onclick="showPassword()"> <span class="login-column toggle-box-text">Show Password</span>
				</div>

				<button type="submit" class="login-card-button" id="login-button">
					<img src="./img/Button-LOGIN.png">
				</button>
			</form>

			<span class="signup-prompt">Don't Have An Account? <a href="signup.php">Sign Up</a></span><br>
			<a href="#ForgotPassword">Forgot Password</a>

		</div>
	</div>
	<!-- End Login Form -->

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
    
<!-- End HTML -->


<!-- Javascript Code -->

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

	<!-- JS to show password -->
	<script type="text/javascript">
		function showPassword(){
			var x = document.getElementById("password");
				if (x.type === "password") {
					x.type = "text";
				} else {
					x.type = "password";
				}
		}
	</script>

	<!-- JS to smooth scroll to the login UI -->
	<script type="text/javascript">
		window.smoothScroll = function(target) {
		    var scrollContainer = target;

		    do { //Find scroll container
		        scrollContainer = scrollContainer.parentNode;
		        if (!scrollContainer) return;
		        scrollContainer.scrollTop += 1;
		    } while (scrollContainer.scrollTop == 0);

		    var targetY = 0;
		    do { //Find the top of target relatively to the container
		        if (target == scrollContainer) break;
		        targetY += target.offsetTop;
		    } while (target = target.offsetParent);

		    scroll = function(c, a, b, i) {
		        i++; if (i > 30) return;
		        c.scrollTop = a + (b - a) / 30 * i;
		        setTimeout(function(){ scroll(c, a, b, i); }, 5);
		    }
		    // Start scrolling
		    scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
		}
	</script>

	<!-- JS to let user press enter upon entering password in the password field -->
	<script type="text/javascript">
		// Get the input field
		var input = document.getElementById("password");

		// Execute a function when the user presses a key on the keyboard
		input.addEventListener("keypress", function(event) {
		  // If the user presses the "Enter" key on the keyboard
		  if (event.key === "Enter") {
		    // Cancel the default action, if needed
		    event.preventDefault();
		    // Trigger the button element with a click
		    document.getElementById("login-button").click();
		  }
		}); 
	</script>

</body>
</html>