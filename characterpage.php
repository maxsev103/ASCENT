<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASCENT | Characters</title>
    <link rel="stylesheet" href="character.css">
    <link rel="icon" type="image/x-icon" href="./img/icons/logo-tower.png">
    <script type="text/javascript" src="navbar.js"></script>
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
            <a class="navlinks nowActive" href="characterpage.php">Characters</a>
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
        <div class="background-image1">
            <p> ELEMENT AFFINITIES:</p>
            <div class="logo-container">
                <div class="logo" data-element="GAIA">
                    <img src="./img/GAIA_logo.png" alt="GAIA Logo">
                    <span>GAIA</span>
                </div>
                <div class="logo" data-element="AQUA">
                    <img src="./img/AQUA_logo.png" alt="AQUA Logo">
                    <span>AQUA</span>
                </div>
                <div class="logo" data-element="AERO">
                    <img src="./img/AERO_logo.png" alt="AERO Logo">
                    <span>AERO</span>
                </div>
                <div class="logo" data-element="IGNIS">
                    <img src="./img/IGNIS_logo.png" alt="IGNIS Logo">
                    <span>IGNIS</span>
                </div>
            </div>
            <div class="logo-container2">
                <div class="logo" data-element="LUXX">
                    <img src="./img/LUXX_logo.png" alt="LUXX Logo">
                    <span>LUXX</span>
                </div>
                <div class="logo" data-element="NOCTIS">
                    <img src="./img/NOCTIS_logo.png" alt="NOCTIS Logo">
                    <span>NOCTIS</span>
                </div>
                <div class="logo" data-element="CELESTE">
                    <img src="./img/CELESTE_logo.png" alt="CELESTE Logo">
                    <span>CELESTE</span>
                </div>
            </div>
        </div>
    </div>

     <div class="background-image2 container2">
        <section class="changebg">
            <div class="contentBx">
                <h2 id="Heading">Characters</h2>
                <p id="stats" style="font-family: 'Inter', sans-serif; font-size: 0.7rem; font-weight: bold; color: black;"></p> <br> <br>
                <p id="desc" style="font-size: 1.2rem; color: black;"></p>
            </div>
            <div class="imgbox">
                <img src="" alt="" id="slider">
            </div>
            <ul class="navigation">

                <li onclick="imgSlider('./img/Caelestis and Caeles.png'); show1()">
                    <img src="./img/Caelestis and Caeles.png" alt="">
                </li>
                <li onclick="imgSlider('./img/Estela.png'); show2()">
                    <img src="./img/Estela.png" alt="">
                </li>
                <li onclick="imgSlider('./img/Marina.png'); show3()">
                    <img src="./img/Marina.png" alt="">
               </li>
                <li onclick="imgSlider('./img/Kairos.png'); show4()">
                    <img src="./img/Kairos.png" alt="">
                </li>
                <li onclick="imgSlider('./img/Aria.png'); show5()">
                    <img src="./img/Aria.png" alt="">
                </li>
                <li onclick="imgSlider('./img/Rrhus.png');show6()">
                    <img src="./img/Rrhus.png" alt="">
                </li>
                <li onclick="imgSlider('./img/Faye.png');show7() ">
                    <img src="./img/Faye.png" alt="">
                </li>
                <li onclick="imgSlider('./img/Silvanus.png');show8()">
                    <img src="./img/Silvanus.png" alt="">
                </li>
                <li onclick="imgSlider('./img/Miku.png') ;show9()">
                    <img src="./img/Miku.png" alt=""></li>
                    </ul>
        </section>
    </div>
    
    
<div class="container3">
        <table>
                <tr class="fade-in">
                    <th>Health (HP)</th>
                    <td>Represents the character's overall well-being and endurance. Characters with higher HP can withstand more damage before being defeated.</td>
                    <th>Aetherflux Pool (AP)</th>
                    <td>Reflects the character's reservoir of Aetherflux energy. Different abilities and skills may consume Aetherflux, and characters with a larger Aetherflux pool can perform more actions before needing to recharge.</td>
                </tr>
                <tr class="fade-in">
                    <th>Attack Power (ATK)</th>
                    <td>Determines the potency of the character's offensive abilities. Higher ATK values result in more damage dealt to enemies.</td>
                    <th>Aetherflux Affinity</th>
                    <td>Represents the character's affinity for a specific type of Aetherflux (celestial, thunder, shadow, pyro, or nature). A higher affinity enhances the effectiveness of abilities aligned with that Aetherflux type.</td>
                </tr>
                <tr class="fade-in">
                    <th>Defense (DEF)</th>
                    <td>Governs the character's ability to resist incoming damage. A higher DEF reduces the amount of damage taken from enemy attacks.</td>
                    <th>Aetherflux Control (AP Control)</th>
                    <td>Influences the precision and control with which the character manipulates Aetherflux. Higher AP Control may result in more accurate and potent abilities.</td>
                </tr>
                <tr class="fade-in">
                    <th>Speed or Agility (AGI)</th>
                    <td>Influences the character's movement speed, attack speed, and responsiveness. Higher AGI values allow for quicker actions in combat.</td>
                    <th>Aetherflux Regeneration (AP Regen)</th>
                    <td>Determines the rate at which the character's Aetherflux pool naturally regenerates over time. Higher AP Regen allows for more frequent use of Aetherflux abilities.</td>
                </tr>
                <tr class="fade-in">
                    <th>Critical Hit Rate (Crit Rate)</th>
                    <td>Governs the likelihood of landing critical hits, resulting in increased damage. Characters with higher Crit Rate have a better chance of dealing devastating blows.</td>
                    <th>Critical Hit Damage (Crit DMG)</th>
                    <td>Denotes how much damage a Critical Hit will deal. Characters with higher Crit DMG have a better chance of hitting heavy blows upon landing a Critical Hit.</td>
                </tr>
                <tr>
                    <th>Elemental Resistance (Elemental RES)</th>
                    <td>Reflects the character's resistance to specific elemental attacks. A character with high elemental resistance takes less damage from attacks aligned with a particular Aetherflux type.</td>
                    <th>Status Effect Resistance</th>
                    <td>Governs the character's resistance to debuffs, such as stuns, freezes, or curses. Higher resistance reduces the duration or impact of negative status effects.</td>
                </tr>
                <tr class="fade-in">
                    <th>Cooldown Reduction (CD Reduction)</th>
                    <td>Denotes how much the cooldown of skills is reduced. This value is a percentage and caps at 90% CD Reduction.</td>
                    <td></td>
                    <td></td>
                </tr>
        </table>
        </div>
    </div>
</div>

    <!-- Footer -->
    <footer>
        <div class="flexcontainer" style="margin-left: 5.83vw; margin-top: 1.67vw;">
            <div class="footer-row">
                <div class="footer-column" style="margin-left: -2%;">
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

    <script type="text/javascript">
        function imgSlider(anything) {
            document.getElementById("slider").src = anything;


        }
        function changeBgColor(color) {
            const changebg = document.querySelector('.changebg'); {
                changebg.style.background = color;


            }
        }
        /*function imgSlider() {
            var opacity = document.getElementsByTagName('li');
            opacity.style.opacity = '1';
            if (opacity) {
                opacity.style.opacity = '0';
            }
        }*/


        function show1() {
            var heading = "Caelestis/Caeles Seraph";
            var lines = [
                "V.A. YESHA ZAIRE",
                "ALL-ROUNDER",
                " ",
                "AETHERFLUX AFFINITY: AETHER WEAVER",
                "BASE HP (HEALTH): 250", 
                "AGILITY (AGI): 15", 
                "AETHERFLUX POOL (AP): 900",
                "AETHERFLUX CONTROL (AP CONTROL): 90% (MAX: 150%)",
                "AETHERFLUX REGENERATION (AP REGEN): 50%",
                "CRITICAL HIT RATE (CRIT RATE): 60% (MAX: 200%)",
                "STATUS EFFECT RESISTANCE: 100% (MAX: 200%)",
                " ",];
            var lines2 = [
                "Age: 21",
                "B-day: December 21",
                "Emerging from the outskirts of Astra, their origins are shrouded in mystery. Born beneath a sky ablaze with celestial anomalies and raised in the humble abode of an unknown village, the young Aetherweaver embarks on a quest not only to harmonize the elemental energies but also to uncover the truth about their mysterious origins.\nThe Ascendant Spire becomes a symbolic journey of self-discovery for them, who seeks to define their identity and prove that greatness can arise from even the most obscure and unknown corners of Astra."
            ];

            document.getElementById("Heading").innerHTML = heading;
            document.getElementById("stats").innerHTML = lines.join("<br>");
            document.getElementById("desc").innerHTML = lines2.join("<br>");
        }

        function show2() {
            var heading = "ESTELA SKYHEART";
            var lines = [
                 "V.A. MAXINE SEVERO",
                "SABOTEUR",
                " ",
                "AETHERFLUX AFFINITY: COSMOS/SPACE",
                "BASE HP (HEALTH): 1200", 
                "AGILITY (AGI): 10", 
                "AETHERFLUX POOL (AP): 1500",
                "AETHERFLUX CONTROL (AP CONTROL): 60% (MAX: 150%)",
                "AETHERFLUX REGENERATION (AP REGEN): 60%",
                "CRITICAL HIT RATE (CRIT RATE): 50% (MAX: 200%)",
                "STATUS EFFECT RESISTANCE: 110% (MAX: 200%)",
                " ",];
                var lines2 = [ 
                "Age: 25",
                "B-day: January 1",
                "Born under a rare cosmic alignment, marked by the convergence of celestial energies.  As a Celeste Aster, Estela possesses a natural affinity for Celeste Aetherflux. Raised in the Astral Vistas, Estela learned to navigate the astral planes and communicate with celestial beings. Uncovering ancient manuscripts detailing the mysteries of the Ascendant Spire, Estela sets out on a quest to unlock the secrets hidden within the floating islands and discover her true destiny as the Celestial Enchantress."

            ];

            document.getElementById("Heading").innerHTML = heading;
            document.getElementById("stats").innerHTML = lines.join("<br>");
            document.getElementById("desc").innerHTML = lines2.join("<br>");
        }

        function show3() {
            var heading = "MARINA TIDE";
            var lines = [
                 "V.A. GESSA SANORIA",
                "INITIATOR",
                " ",
                "AETHERFLUX AFFINITY: WATER",
                "BASE HP (HEALTH): 2000", 
                "AGILITY (AGI): 20", 
                "AETHERFLUX POOL (AP): 1300",
                "AETHERFLUX CONTROL (AP CONTROL): 80% (MAX: 150%)",
                "AETHERFLUX REGENERATION (AP REGEN): 50%",
                "CRITICAL HIT RATE (CRIT RATE): 50% (MAX: 200%)",
                "STATUS EFFECT RESISTANCE: 150% (MAX: 200%)",
                " ",];
            var lines2 = [
                "Age: 23 (Appearance-wise), 27 (Real)",
                "B-day: April 1",
                "Marina Tide was raised on a secluded island, surrounded by the AQUA (Water) Aetherflux. Trained by a revered order of Aethercasters, Marina developed a unique mastery over water Aetherflux, earning the title of the Aquatic Tempest. Haunted by visions of turbulent seas and ominous tides, Marina sets out to the Ascendant Spire, driven by a sense of duty to restore balance to the aquatic energies and uncover the mysteries lurking beneath the waves."
            ];

            document.getElementById("Heading").innerHTML = heading;
            document.getElementById("stats").innerHTML = lines.join("<br>");
            document.getElementById("desc").innerHTML = lines2.join("<br>");
        }
        
        function show4() {
            var heading = "KAIROS STORMBLADE";
            var lines = [
                 "V.A. JOHNNY CAGE",
                "FIGHTER/STRIKER",
                " ",
                "AETHERFLUX AFFINITY: AIR/ATMOSPHERE",
                "BASE HP (HEALTH): 2500", 
                "AGILITY (AGI): 15", 
                "AETHERFLUX POOL (AP): 900",
                "AETHERFLUX CONTROL (AP CONTROL): 70% (MAX: 150%)",
                "AETHERFLUX REGENERATION (AP REGEN): 50%",
                "CRITICAL HIT RATE (CRIT RATE): 50% (MAX: 200%)",
                "STATUS EFFECT RESISTANCE: 130% (MAX: 200%)",
                " ",];
            var lines2 = [
                "Age: 25",
                "B-day: August 17",
                "Kairos Stormblade, known as the Gale Skystrider, hails from a lineage blessed by the storm gods, channeling the power of AERO (Air/Atmosphere) Aetherflux. Trained as a guardian of celestial lightning, Kairos carries the responsibility of maintaining the balance between the heavens and the mortal realm. Drawn to the Ascendant Spire by visions of thunderous prophecies, Kairos seeks to unlock the true potential of thunder Aetherflux and confront the looming forces threatening Astra."
            ];

            document.getElementById("Heading").innerHTML = heading;
            document.getElementById("stats").innerHTML = lines.join("<br>");
            document.getElementById("desc").innerHTML = lines2.join("<br>");
        }
        
        function show5() {
            var heading = "ARIA NIGHTSHADE";
            var lines = [
                 "V.A. MEJA MACEDA",
                "ASSASIN/ROGUE",
                " ",
                "AETHERFLUX AFFINITY: DARK ",
                "BASE HP (HEALTH): 1000", 
                "AGILITY (AGI): 45", 
                "AETHERFLUX POOL (AP): 700",
                "AETHERFLUX CONTROL (AP CONTROL): 70% (MAX: 150%)",
                "AETHERFLUX REGENERATION (AP REGEN): 50%",
                "CRITICAL HIT RATE (CRIT RATE): 75% (MAX: 200%)",
                "STATUS EFFECT RESISTANCE: 100% (MAX: 200%)",
                " ",];
            var lines2 = [
                "Age: 19",
                "B-day: November 1",
                "Aria Nightshade, the Shadow Revenant, emerged from the Umbral Abyss, a realm cloaked in perpetual darkness. Gifted with the ability to harness the power of NOCTIS (Dark) Aetherflux, Aria navigates the shadowy depths with finesse. Driven by a mysterious past and a connection to the enigmatic Void Sovereign, Aria's journey to the Ascendant Spire is shrouded in secrecy, and the Umbral Abyss echoes with the whispers of her dark destiny."

            ];

            document.getElementById("Heading").innerHTML = heading;
            document.getElementById("stats").innerHTML = lines.join("<br>");
            document.getElementById("desc").innerHTML = lines2.join("<br>");
        }
        
        function show6() {
            var heading = "RRHUS IRONHEART";
            var lines = [
               "V.A. CARL SAN JOSE",
                "GUARDIAN/TANK",
                " ",
                "AETHERFLUX AFFINITY: FIRE",
                "BASE HP (HEALTH): 3000", 
                "AGILITY (AGI): 15", 
                "AETHERFLUX POOL (AP): 600",
                "AETHERFLUX CONTROL (AP CONTROL): 60% (MAX: 150%)",
                "AETHERFLUX REGENERATION (AP REGEN): 65%",
                "CRITICAL HIT RATE (CRIT RATE): 50% (MAX: 200%)",
                "STATUS EFFECT RESISTANCE: 170% (MAX: 200%)",
                " ",];
            var lines2 = [
                "Age: 23",
                "B-day: July 9",
                "Rrhus Ironheart, born amid the molten rivers of the Ember Crucible, is a Pyro Templar wielding the power of IGNIS (fire) Aetherflux. Trained as a blacksmith in the heart of volcanic forges, Rrhus forges weapons ablaze with the eternal fires. Guided by visions of a world consumed by flames, Rrhus embarks on a pilgrimage to the Ascendant Spire, seeking to harness the fiery energies within and prevent the cataclysm foretold in the flames."
            ];

            document.getElementById("Heading").innerHTML = heading;
            document.getElementById("stats").innerHTML = lines.join("<br>");
            document.getElementById("desc").innerHTML = lines2.join("<br>");
        }
        
        function show7() {
            var heading = "FAYE WHISPERWIND";
            var lines = [
                "V.A. MARGOT ROBBIE",
                "HEALER/SUPPORT",
                " ",
                "AETHERFLUX AFFINITY: EARTH/NATURE",
                "BASE HP (HEALTH): 1200", 
                "AGILITY (AGI): 20", 
                "AETHERFLUX POOL (AP): 1300",
                "AETHERFLUX CONTROL (AP CONTROL): 75% (MAX: 150%)",
                "AETHERFLUX REGENERATION (AP REGEN): 60%",
                "CRITICAL HIT RATE (CRIT RATE): 50% (MAX: 200%)",
                "STATUS EFFECT RESISTANCE: 140% (MAX: 200%)",
                " ",];
            var lines2 = [
                "Age: 27",
                "B-day: May 13",
                "Faye Whisperwind, the Nature Adept, was raised in the embrace of the Verdant Sanctum, surrounded by the energies of GAIA (Earth/Nature). As a guardian of the natural order, Faye possesses the ability to commune with flora and fauna. Drawn by a spiritual connection to the Ascendant Spire, Faye embarks on a quest to protect the sanctity of nature and uncover the ancient wisdom hidden within the roots of the tower."
            ];

            document.getElementById("Heading").innerHTML = heading;
            document.getElementById("stats").innerHTML = lines.join("<br>");
            document.getElementById("desc").innerHTML = lines2.join("<br>");
        }
        
        function show8() {
            var heading = "SILVANUS LIGHTWALKER";
            var lines = [
                "V.A. KEANU REEVES",
                "ASSASSIN/ROGUE",
                " ",
                "AETHERFLUX AFFINITY: LIGHT",
                "BASE HP (HEALTH): 1000", 
                "AGILITY (AGI): 35", 
                "AETHERFLUX POOL (AP): 900",
                "AETHERFLUX CONTROL (AP CONTROL): 70% (MAX: 150%)",
                "AETHERFLUX REGENERATION (AP REGEN): 50%",
                "CRITICAL HIT RATE (CRIT RATE): 65% (MAX: 200%)",
                "STATUS EFFECT RESISTANCE: 120% (MAX: 200%)",
                " ",];
            var lines2 = [
                "Age: 21",
                "B-day: May 24",
                "Silvanus Lightwalker, the Illusionist Luminary, was born amidst the ethereal glow of Luminara Grotto. Raised in crystalline caves resonating with Luminares light, Silvanus discovered an affinity for manipulating light and shadows at an early age. Unlike other Luminars who focused on healing, Silvanus felt drawn to the art of illusion, fascinated by the power to deceive and create alternate realities."
            ];

            document.getElementById("Heading").innerHTML = heading;
            document.getElementById("stats").innerHTML = lines.join("<br>");
            document.getElementById("desc").innerHTML = lines2.join("<br>");
        }

        function show9() {
            var heading = "MIKU HATSUNE";
            var lines = [
                 "V.A. SAKI FUJITA",
                "SPECIAL",
                " ",
                "AETHERFLUX AFFINITY: AETHER WEAVER",
                "BASE HP (HEALTH): 250", 
                "AGILITY (AGI): 15", 
                "AETHERFLUX POOL (AP): 900",
                "AETHERFLUX CONTROL (AP CONTROL): 90% (MAX: 150%)",
                "AETHERFLUX REGENERATION (AP REGEN): 50%",
                "CRITICAL HIT RATE (CRIT RATE): 60% (MAX: 200%)",
                "STATUS EFFECT RESISTANCE: 100% (MAX: 200%)",
                " ",];
            var lines2 = [
                "Age: 16 (Eternally)",
                "B-day: August 31",
                "Embark on a harmonious journey with the digital enchantress, Hatsune Miku, as she joins forces with our game in an extraordinary collaboration! Born from the digital realm, Miku is not your average songstress; she's the embodiment of musical innovation!"
                
            ];

            document.getElementById("Heading").innerHTML = heading;
            document.getElementById("stats").innerHTML = lines.join("<br>");
            document.getElementById("desc").innerHTML = lines2.join("<br>");
        }
    </script>

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
