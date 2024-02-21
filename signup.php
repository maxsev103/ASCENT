<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="signupstyle.css">
	<link rel="icon" type="image/x-icon" href="./img/logo-tower.png">
	<script type="text/javascript" src="navbar.js"></script>
	<style>

		.signup-row {
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
			width: 100%;
			padding: 10px;
		}

		.signup-column {
			display: flex;
			flex-direction: column;
			flex-basis: 100%;
			flex: 1;
			width: 100%;
			margin: 0;
		}

		.signup-banner {
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
			margin-top: 365px;
			margin-left: 2%;
			position: static;
		}

		.signup-div {
			background-image: url('./img/scenic-background.png');
			background-attachment: fixed;
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center center;
			background-color: #dc97bd;
			height: 150vh;
		}

		.signup-card {
			padding: 3%;
			height: 75%;
			width: 70%;
			background-color: rgba(217, 217, 217, 0.40);
			margin-top: 9%;
			margin-left: 2%;
		}

		.signup-card-logo {
			height: auto;
			width: 20vw;
			position: absolute;
		}

		.signup-card-text {
			font-family: 'Bellefair', serif;
			text-align: center;
			font-size: 2.5rem;
			margin-top: 20%;
			padding: 0 10%;
		}

		input {
			display: block;
			border-radius: 0;
			font-family: 'Abel', sans-serif;
			font-size: 18px;
			padding: 5px;
			height: 7vh;
			width: 100%;
			outline: none;
			transition: 0.5s;
			-webkit-box-shadow: inset 1px 1px 7px 0px rgba(207, 207, 205, 1.0);
			-moz-box-shadow: inset 1px 1px 7px 0px rgba(207, 207, 205, 1.0);
			box-shadow: inset 1px 1px 7px 0px rgba(207, 207, 205, 1.0);
		}

		input:focus {
			border: 2px solid #262b78;
		}

		form {
			display: flex;
			height: 50%;
			width: 90%;
			flex-direction: column;
			align-items: center;
			margin-top: 4%;
		}

		form > button {
			margin-top: 1%;
			border: none;
			cursor: pointer;
			appearance: none;
			background-color: inherit;
			transition: all 0.5s;
			width: 50%;
			position: relative;
		}

		button > img {
			height: auto;
			width: 30vw;
		}

		button:hover {
			transform: scale(0.95);
		}

		.signup-card > a, .login-prompt {
			font-family: 'Abel', sans-serif;
			font-size: 1.1rem;
			color: black;
		}

		.signup-card > a:hover {
			color: grey;
		}

		.signup-row > input:nth-of-type(1) {
			margin-right: 3%;;
		}

		.error {
			font-family: 'Abel', sans-serif;
			font-size: 1.2rem;
			color: #bb0f1c;
			margin-bottom: 1%;
			margin-top: -2%;
		}

		.toggle-box {
			margin-left: 10vw;
			width: 100%;;
			margin-top:;
			height: 5vh;
		}

		.toggle-pass-text {
			display: flex;
			justify-content: center;
			font-family: 'Abel', sans-serif;
			font-size: 1.1rem;
			color: black;
			margin-left: -15vw;
		}

		@keyframes typing {
	      from {
	        width: 0;
	      }
	      to {
	        width: 100%;
	      }
	    }

	    .typewriter-text {
	      overflow: hidden;
	      white-space: nowrap;
	      animation: typing 3s steps(40) infinite;
	      border-right: .15em solid black; 
	      animation: 
		    typing 3.5s steps(40, end),
		    blink-caret .75s step-end 2.3s forwards;
	    }

		/* The typewriter cursor effect */
		@keyframes blink-caret {
		  from, to { border-color: transparent }
		  50% { border-color: black; }
		}

		@media all and (max-width: 725px) {
			.signup-row {
				padding: 0;
			}

			.signup-column:not(.toggle-box, .toggle-pass-text) {
				flex: initial;
				margin: 10px;
			}

			.signup-card-text {
				font-size: 1.7rem;
			}

			.toggle-box {
				margin-left: -19.2vw;
			}
			
			input {
				height: 5vh;
			}
		}

		@media all and (max-width: 600px) {
			.toggle-box {
				margin-left: -17vw;
			}

			button > img {
				height: auto;
				width: 150%;
				margin-left: -6vw;
				margin-top: 2vh;
			}

			.login-prompt {
				margin-top: 2vh;
			}
		}

	</style>
	<title>ASCENT | Sign Up</title>
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

	<!-- Sign Up Banner -->
	<div class="signup-banner">
		<div class="white-line"></div>
	</div>
	<!-- End Login Banner-->

	<div class="flexcontainer column-flex-center signup-div">
		<div class="flexcontainer column-flex-center signup-card" id="sign-up">

			<img class="signup-card-logo" src="./img/ASCENT-logo.png"><br>
			<span class="signup-card-text typewriter-text">The Ascendant Spire awaits a new Aethercaster to challenge its depths...</span><br>

			<form action="signuphandle.php" method="POST">

				<?php if(isset($_GET['error'])) { ?>
					<span class="error"> <?php echo $_GET['error']; ?> </span>
				<?php } ?>
				<div class="signup-row">
					<input class="signup-column first-input-field" for="username" type="text" name="username" id="username" placeholder="USERNAME"><br>

					<input class="signup-column" for="email" type="email" name="email" id="email" placeholder="EMAIL"><br>
				</div>

				<div class="signup-row">
					<input class="signup-column first-input-field" for="password" type="password" name="password" id="password" placeholder="PASSWORD">

					<input class="signup-column" for="password confirm" type="password" name="confirmpass" id="confirmpass" placeholder="CONFIRM PASSWORD">
				</div>
				<div class="signup-row">
					<input class="signup-column toggle-box show-pass" type="checkbox" onclick="showPassword()"> <span class="signup-column toggle-pass-text">Show Password</span>
				</div>
				<button type="submit" id="signup-button">
					<img src="./img/Button-SIGNUP.png">
				</button>

			</form>

			<span class="login-prompt">Already Have An Account? <a class="login-link" href="login.php">Login</a></span><br>
			<a href="index.php">Back to Home</a>

		</div>
	</div>

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
			var y = document.getElementById("confirmpass");
				if (x.type === "password") {
					x.type = "text";
					y.type = "text";
				} else {
					x.type = "password";
					y.type = "password";
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
		var input = document.getElementById("confirmpass");

		// Execute a function when the user presses a key on the keyboard
		input.addEventListener("keypress", function(event) {
		  // If the user presses the "Enter" key on the keyboard
		  if (event.key === "Enter") {
		    // Cancel the default action, if needed
		    event.preventDefault();
		    // Trigger the button element with a click
		    document.getElementById("signup").click();
		  }
		}); 
	</script>
</body>
</html>