<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ASCENT | Explore the World</title>

	<!-- Link stylesheet -->
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link rel="stylesheet" type="text/css" href="worldpage.css">

	<!-- Link Logo Tower -->
	<link rel="icon" type="image/x-icon" href="./img/logo-tower.png">

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
            <a class="navlinks" href="index.php">Home</a>
            <a class="navlinks" href="newspage.php">News</a>
            <a class="navlinks" href="characterpage.php">Characters</a>
            <a class="navlinks" href="guidepage.php">Guides</a>
            <div class="navlinks dropdown">
                <a class="navlinks has-dropdown" tabindex="0">Explore &#9661;</a>
                    <div class="dropdown-menu" id="dropdown">
                        <a class="drop-item" href="aboutpage.php">About</a>
                        <a class="drop-item" href="featurepage.php">Features</a>
                        <a class="drop-item nowActive" href="worldpage.php">World</a>
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
			<div class="container1">
				<h1>
					WORLDS
				</h1>
			
				<span style="font-size: 3.7rem;">
				    <div style="text-align: left; margin-left: 14vw;" class="title-header-content">
						<img src="./img/Button.png">
							<div style="left: 10vw; top: 8.5vh;" class="centered">ASTRA</div>
					</div>
				</span>

				<div class="text-in-container">
					<p>
						Astra is a realm characterized by a delicate balance of elemental energies, where the very fabric of reality is interwoven with Aetherflux. The landscapes of Astra are diverse, ranging from lush and vibrant forests under the care of Terra Wardens to the vast and endless cosmic expanses where Celeste Holders navigate the connections between celestial bodies.
						<br><br>
						The natural order is maintained by the Aethercasters, individuals who have mastered the art of Aetherflux manipulation. The elemental affinities of GAIA, AQUA, AERO, IGNIS, LUXX, NOCTIS, and CELESTE coalesce in a harmonious dance, shaping the landscapes and ecosystems of Astra.
					</p>
				</div>
				
				<span style="max-width: 80vw; font-size: 2rem;">
				    <div class="title-header-content">
						<img src="./img/Button-long.png" style="max-width: 47vw;">
							<div class="centered">ELEMENTAL DIVERSITY LANDSCAPES</div>
					</div>
				</span>
				
				<div class="row">
					<div class="column">
						<div class="card-cell card-cell-gaia"> 
							<div><p class='stroke-text-gaia'>GAIA</p></div>
							<img class="td-img" src="img/Worldspage_Gaia.png">
							<div class="card-content">
								<p><b>Verdant Sanctum </b>
									is a sprawling expanse of emerald-hued forests, 
									where towering ancient trees reach for the skies. 
									Under the watchful care of Terra Wardens, 
									the flora and fauna thrive in perfect harmony. 
									Blossoming flowers release healing aromas, and majestic 
									creatures roam freely. Hidden within the foliage 
									are ancient groves where Terra Wardens commune with 
									the very heartbeat of the earth.
								</p>
							</div>
						</div>
					</div>
					<div class="column">
						<div class="card-cell card-cell-aqua"> 
							<div><p class='stroke-text-aqua'>AQUA</p></div>
							<img class="td-img" src="img/Worldspage_Aqua.png">
							<div class="card-content">
								<p><b>Aqueous Haven </b>
									is a serene sanctuary adorned with cascading waterfalls, 
									crystal-clear lakes, and winding rivers. Azure Tides 
									channel the aquatic energies to create water pathways and 
									floating platforms. Azure Tides gather near shimmering pools, 
									harnessing the rejuvenating properties of water to mend wounds 
									and cleanse the Aetherflux. The air is filled with the soothing 
									sound of gently flowing water.
								</p>
							</div>
						</div>
					</div>
					<div class="column">
						<div class="card-cell card-cell-aero"> 
							<div><p class='stroke-text-aero'>AERO</p></div>
							<img class="td-img" src="img/Worldspage_Aero.png">
							<div class="card-content">
								<p><b>Nimbus Aeries </b>
									are ethereal floating islands that defy gravity, governed by the 
									agile Zephyr Aries. These islands drift gracefully through the 
									skies, shrouded in misty clouds. Each island houses airborne flora 
									and fauna, and intricate pathways connect them. Zephyr Aries use 
									the power of the atmosphere to control wind currents, allowing for 
									swift and breathtaking aerial maneuvers.
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="column">
						<div class="card-cell card-cell-ignis"> 
							<div><p class='stroke-text-ignis'>IGNIS</p></div>
							<img class="td-img" src="img/Worldspage_Ignis.png">
							<div class="card-content">
								<p><b>Ember Crucible </b>
									is a realm of perpetual flames and molten rivers, where Pylar Embers 
									harness the raw power of fire. Volcanic peaks spew fiery embers into 
									the air, creating an awe-inspiring spectacle. The land is adorned 
									with obsidian structures and fiery chasms. Pylar Embers forge their 
									weapons in the intense heat, and the night sky is painted with the 
									glow of eternal flames.
								</p>
							</div>
						</div>
					</div>

					<div class="column">
						<div class="card-cell card-cell-luxx"> 
							<div><p class='stroke-text-luxx'>LUXX</p></div>
							<img class="td-img" src="img/Worldspage_Luxx.png">
							<div class="card-content">
								<p><b>Luminara Grotto </b>
									is a network of crystalline caves, illuminated by the radiant glow 
									of Luminares light. The walls are adorned with phosphorescent 
									crystals that emit a soft, harmonious glow. Luminars gather in 
									meditation chambers, harnessing the pure essence of light to 
									commune with celestial energies. The air is filled with an 
									otherworldly luminescence that guides the way.
								</p>
							</div>
						</div>
					</div>
					
					<div class="column">
						<div class="card-cell card-cell-noctis"> 
							<div><p class='stroke-text-noctis'>NOCTIS</p></div>
							<img class="td-img" src="img/Worldspage_Noctis.png">
							<div class="card-content">
								<p><b>Umbral Abyss </b>
									is a mysterious and shadowy realm cloaked in eternal night. 
									Umbra Shants navigate through twisting corridors, their every 
									step muffled by the velvety darkness. Bioluminescent flora 
									emits a subtle, eerie glow, revealing hidden pathways. The 
									Umbral Abyss conceals secrets within its obsidian depths, 
									and the air is thick with the essence of shadows.
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="column">
						
					</div>
					<div class="column">
						<div class="card-cell card-cell-celeste"> 
							<div><p class='stroke-text-celeste'>CELESTE</p></div>
							<img class="td-img" src="img/Worldspage_Celeste.png">
							<div class="card-content">
								<p><b>Astral Vistas </b>
									are vast and endless cosmic expanses, 
									where Celeste Asters 
									navigate the connections between 
									celestial bodies. Nebulas 
									paint the skies with vibrant hues, and 
									astral bodies float 
									gracefully. Celestial bridges connect 
									floating platforms, 
									leading to astral observatories where 
									Aetherweavers study 
									the cosmic energies. The silence of 
									space is broken only 
									by the distant hum of interstellar 
									energies.
								</p>
							</div>
						</div>
					</div>
					<div class="column">
						
					</div>
				</div>

			</div>
		</div>

		<div class="flexcontainer">
			<div class="container2">
				<hr>
				<div class="banner-container">
					<!-- Text content beneath the banner -->
					<div class="text-content">
						<h2 style="text-align: right; color: white;">
							ASCENDANT <br> SPIRE
						</h2>
						<p style="text-align: right; color: white; font-size: 2vw;">
							The Ascendant Spire is a monumental structure 
							that defies both architectural and 
							mystical norms. It rises from the core of Astra, 
							its spiraling levels reaching 
							towards the heavens. Each level of the spire 
							presents a unique challenge, blending 
							natural landscapes with ethereal realms, ancient 
							ruins, and cosmic wonders.
							<br><br>
							The Ascendant Spire, a colossal tower that 
							pierces the skies, serves as a central hub 
							and focal point in Astra. The tower is imbued 
							with ancient magic and guarded by 
							powerful entities, drawing Aethercasters from 
							all corners of Astra who seek to ascend 
							its heights and uncover the secrets hidden 
							within.
						</p>
					</div>
				</div>

				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

				<hr>
				<div class="banner-container">
					<!-- Text content beneath the banner -->
					<div class="text-content">
						<h3>Dynamic Levels:</h3>
						<p>
							The levels of the Ascendant Spire are dynamic 
							and ever-changing. As Aethercasters 
							ascend, the environments shift, revealing new 
							challenges, puzzles, and enemies. 
							The tower responds to the Aetherflux energies of 
							those who traverse its heights.
						</p>
					</div>
				</div>

				<hr>
					
				<div class="banner-container">
					<!-- Text content beneath the banner -->
					<div class="text-content">
						<h3>Guardians and Sentinels:</h3>
						<p>
							Each level of the spire is guarded by powerful e
							ntities known as Guardians or Sentinels. These 
							beings embody the elemental affinities and serve 
							as both challenges and keepers of ancient 
							knowledge. 
						</p>
					</div>
				</div>
			<hr>
			</div>
		</div>

		<div class="flexcontainer">
			<div class="container3">

				<div class="banner-container">
					<!-- Text content beneath the banner -->
					<div class="text-content">
						<h2 style="margin: 8vw 0 0 0;">AETHERFLUX</h2>
						<p style="margin: 1vw 0 5vw 0;">
							“Aetherflux” is a mystical and versatile source of energy that permeates the world of Astra. It is an ethereal substance that flows through the environment, connecting all living beings and the elements. Aetherflux is harnessed by skilled individuals known as Aethercasters, and each character class in the game specializes in manipulating this powerful force.
						</p>
					</div>
				</div>

				<br><br><br><br><br>

				<div class="banner-container">
					<!-- Text content beneath the banner -->
					<div class="text-content">
						<h3><strong>Universal Energy:</strong></h3>
						<p>
							“Aetherflux” is a universal energy that exists 
							in various forms, including celestial, 
							atmospheric, light, shadowy, fiery, and natural. 
							Different regions and environments in the game 
							world may have unique concentrations of 
							Aetherflux, influencing the abilities and 
							characteristics of Aethercasters.
						</p>
					</div>
				</div>

				<div class="banner-container">
					<!-- Text content beneath the banner -->
					<div class="text-content">
						<h3><strong>Shaping Reality:</strong></h3>
						<p>
							Aethercasters can shape Aetherflux to manipulate 
							the fabric of reality. This includes summoning 
							constructs, altering the environment, and 
							creating protective barriers. The abilities are 
							diverse and depend on the Aetherflux 
							specialization of each character class.
						</p>
					</div>
				</div>

				<div class="banner-container">
					<!-- Text content beneath the banner -->
					<div class="text-content">
						<h3><strong>Connection to Elements:</strong></h3>
						<p>
							Each character class has a specific affinity for 
							a type of Aetherflux, aligning with elements like 
							Celeste, Aero, Aqua, Ignis, Gaia, Luxx, and 
							Noctis. This connection influences their 
							abilities, strengths, and weaknesses.
						</p>
					</div>
				</div>

				<div class="banner-container">
					<!-- Text content beneath the banner -->
					<div class="text-content">
						<h3><strong>Element Affinities:</strong></h3>
						<p>
							GAIA (Earth/Nature), AQUA (Water), AERO (Air/Atmosphere), IGNIS (Fire), LUXX (Light), NOCTIS (Dark), CELESTE (Cosmos/Space)
						</p>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- End of content -->

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

	<!-- JS for triggering the fade-in animation -->
	<script>
		document.addEventListener("DOMContentLoaded", function () {
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

		  document.querySelector('.container1').classList.add('show');

		  // Function to handle scroll events
		  function handleScroll() {
		  	// Get all banner containers
    		var bannerContainers = document.querySelectorAll('.banner-container, .banner-container-right, .text-in-container1');

		    bannerContainers.forEach(function (container) {
		      if (isElementInViewport(container) && !container.classList.contains('animated')) {
		        container.classList.add('animated');
		      }
		    });
		  }

		  // Listen for scroll events
		  window.addEventListener('scroll', handleScroll);

		  // Trigger the animation on page load for elements already in the viewport
		  handleScroll();
		});
	</script>
	<!-- End of script -->

</body>
</html>