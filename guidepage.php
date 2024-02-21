<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ASCENT | Guide</title>

    <!-- Link stylesheet -->
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link rel="icon" type="image/x-icon" href="img/logo-tower.png">
    <link rel="stylesheet" type="text/css" href="guide.css">
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
            <a class="navlinks nowActive" href="guidepage.php">Guides</a>
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


    <!-- content -->
    <div class="container">
        <!-- CONTAINER 1 -->
        <div class="container1" id=beginnersguide>

            <!-- Guide Icon Dropdown -->
            <div id="guide-icon">
                <button class="guide-icon-button" style="background-color: transparent;">&#9432;</button>
                <div id="guide-dropdown">
                    <a href="#" class="guide-dropdown-content" data-section="beginnersguide">Beginner's Guide</a>
                    <a href="#" class="guide-dropdown-content" data-section="characterguide">Character Guide</a>
                    <a href="#" class="guide-dropdown-content" data-section="bossguide">Boss Guide</a>
                </div>
            </div>
            
            <h1 class="fade-in" style="font-size: 10vw; padding-top: 15vh; padding-left: 2vw;">Beginner's Guide</h1>
            <div class="text-in-container1" style="padding-top: 10vh; padding-bottom: 10vh;">
                <div class="flexcontainer fade-in">
                    <span class="button" style="margin-left: 7%; font-size: 2em; margin-top: -20%; margin-right: 3%;">
                        <div class="button-content">
                            <img src="./img/Button.png" style="width: 22vw;">
                            <div class="centered">Getting Started</div>
                        </div>
                    </span>
                    <div style="text-align: right; padding-left: 20vw; color: white; padding-right: 5vw;">
                        <h2 style="font-size: 2rem;">Character Selection</h2>
                        <p style="text-align: right; font-size: 1.5vw;">Choose your character between Caelestis or Caeles Seraph.</p>
                        <br>
                        <h2 style="font-size: 2rem;">Tutorial</h2>
                        <p style="font-size: 1.5vw;">Follow the in-game tutorial to learn basic controls, combat mechanics, and how to navigate the world.</p>
                        <p style="font-size: 1.5vw;">Engage with non-player characters (NPCs) to understand the lore and gather initial quests.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OF CONTAINER 1 -->


        <!-- CONTAINER 2 -->
        <div class="container2">
                <div class="flexcontainer fade-in">
                    <span class="button" style="margin-left: 7%; font-size: 2rem; margin-top: -23%;">
                        <div class="button-content">
                            <img src="./img/Button.png" style="width: 22vw;">
                            <div class="centered">Exploring Astra:</div>
                        </div>
                    </span>

                    <div style="text-align: right; padding-left: 10vw; color: black; padding-right: 10vw;">
                        <h2 style="font-size: 3vw;">Open World Exploration</h2>
                        <p style="text-align: right; font-size: 1.5vw;">Explore the vibrant open world, interact with NPCs, and discover hidden treasures.</p>
                        <p style="text-align: right; font-size: 1.5vw;">Utilize waypoints for quick travel between locations.</p>
                        <br>
                        <h2 style="font-size: 3vw;">Ascend the Spire</h2>
                        <p style="font-size: 1.5vw;">Head towards the Ascendant Spire to start your ascent. Encounter challenges, solve puzzles, and defeat enemies on each level.</p>
                    </div>
                </div>
        </div>
        <!-- END OF CONTAINER 2 -->


        <!-- CONTAINER 3 -->
        <div class="container3">
            <div class="container">
                <span class="button fade-in" style="margin-left: 70%; font-size: 2rem; position: relative;">
                    <div class="button-content">
                        <img src="./img/Button.png" style="width: 25vw;">
                        <div class="centered" style="left: 23%">Mastering Aetherflux</div>
                    </div>
                </span>

                <div style="color: white; padding-left: 15vw; padding-right: 15vw; padding-top: 10vh; font-family: 'Inter', sans-serif; ">
                    <h1 class="fade-in"><strong>Understanding Aetherflux</strong></h1>
                    <h3 class="fade-in">
                        Familiarize yourself with your Aethercaster's abilities and Aetherflux affinity (celestial, thunder, shadow, pyro, or nature).
                        Experiment with different skills to discover your preferred playstyle.
                    </h3>
                    <br>
                    <h1 class="fade-in"><strong>Aetherflux Control</strong></h1>
                    <h3 class="fade-in">
                        Manage your Aetherflux pool wisely during combat. Some abilities consume Aetherflux, so strategic resource management is key.
                    </h3>   
                    <br>
                    <h1 class="fade-in"><strong>Elemental Affinities</strong></h1>
                    <h3 class="fade-in">
                        Each Aethercaster has unique strengths. Learn about elemental affinities to exploit enemy weaknesses and enhance team synergies in multiplayer.
                    </h3>
                    <br>
                    <h1 class="fade-in"><strong>Elemental Status Effects</strong></h1>
                    <h3 class="fade-in">
                        Elemental affinities can inflict Status Effects exclusive to that element, with each Status Effect having its corresponding buffs or debuffs.
                    </h3>
                </div>
            </div>
        </div>
        <!-- END OF CONTAINER 3 -->


        <!-- CONTAINER 4 -->
        <div class="container4">
            <hr>
            <h1 class="fade-in" style="font-size: 10vh; color: white; text-align: center; padding-top: 5vh;">
                Overview of Different <br>
                Elemental Status Effects
            </h1>
            <br>
            <h5 class="fade-in" style="font-size: 2vh; color: white; text-align: center;">
                Note: Entities refer to either an Aethercaster (player) or an in-game NPC or mob with an elemental affinity.
            </h5>
            <div class="table-container">
                <table class="table">
                    <tr>
                        <th class="th fade-in">ICON</th>
                        <th class="th fade-in">TYPE</th>
                        <th class="th fade-in">STATUS EFFECT</th>
                    </tr>
                    <!-- GAIA -->
                    <tr>
                        <td class="td fade-in">
                            <img class="table-img" src="img/GAIA_logo.png">
                        </td>
                        <td class="td fade-in">
                            <strong>GAIA</strong>
                        </td>
                        <td class="td fade-in">
                            <strong>Overgrowth:</strong>
                            Overgrowth is a status effect exclusive to Gaia-affinity entities. Overgrowth prevents the affected entity from receiving healing until the effect's timer is up.
                        </td>
                    </tr>
                    <!-- End of gaia -->

                    <!-- AQUA -->
                    <tr>
                        <td class="td fade-in">
                            <img class="table-img" src="img/AQUA_logo.png">
                        </td>
                        <td class="td fade-in"> 
                            <strong>AQUA</strong>
                        </td>
                        <td class="td fade-in">
                            <strong>Frozen:</strong>
                            Frozen is a status effect exclusive to Aqua-affinity entities. Frozen targets cannot move or perform any actions until the effect's timer is up. If attacked by a heavy attack, the frozen target shatters, dealing extra damage.
                        </td>
                    </tr>
                    <!-- end of aqua -->

                    <!-- AERO -->
                    <tr>
                        <td class="td fade-in">
                            <img class="table-img" src="img/AERO_logo.png">
                        </td>
                        <td class="td fade-in">
                            <strong>AERO</strong>
                        </td>
                        <td class="td fade-in">
                            <strong>Shocked:</strong>
                            Shocked is a status effect exclusive to Aero-affinity entities. Shocked enemies take periodic Aero DMG. They have a chance to be paralyzed. 
                            <br><br>
                            <strong>Paralyzed:</strong>
                            Paralyzed is a status effect exclusive to Aero-affinity entities. Paralyzed enemies cannot move or perform any actions. 
                            Their Elemental RES to Aero-type attacks is also reduced by 45%.
                            <br><br>
                            <strong>Erosion:</strong>
                            Erosion is a status effect exclusive to Aero-affinity entities. Erosion gradually lowers the affected entity's Max HP by 5% (scales off the affected entity's Max HP). Erosion cannot kill or deal the final blow in the event that the affected entity is reduced to 1 HP.
                            <br><br>
                        </td>
                    </tr>
                    <!-- end of aero -->

                    <!-- IGNIS -->
                    <tr>
                        <td class="td fade-in">
                            <img class="table-img" src="img/IGNIS_logo.png">
                        </td>
                        <td class="td fade-in">
                            <strong>IGNIS</strong>
                        </td>
                        <td class="td fade-in">
                            <strong>Burn:</strong>
                            Burn is a status effect exclusive to Ignis-affinity entities. Burned targerts take periodic Ignis DMG equal to 10% of their Max HP.
                        </td>
                    </tr>
                    <!-- end of ignis -->

                    <!-- LUXX -->
                    <tr>
                        <td class="td fade-in">
                            <img class="table-img" src="img/LUXX_logo.png">
                        </td>
                        <td class="td fade-in">
                            <strong>LUXX</strong>
                        </td>
                        <td class="td fade-in">
                            <strong>Blinded:</strong>
                            Blinded is a status effect exclusive to Luxx-affinity entities. If an entity is affected by Blinded, they cannot see anything, only a bright light will be visible for a specified duration. During this time, the affected target's healing effectiveness is reduced to 0%.
                        </td>
                    </tr>
                    <!-- end of luxx -->

                    <!-- NOCTIS -->
                    <tr>
                        <td class="td fade-in">
                            <img class="table-img" src="img/NOCTIS_logo.png">
                        </td>
                        <td class="td fade-in">
                            <strong>NOCTIS</strong>
                        </td>
                        <td class="td fade-in"> 
                            <strong>Shrouded:</strong>
                            Shrouded is a status effect exclusive to Noctis-affinity entities. If an entity is affected by Shrouded, their Field of View (FOV) is will shorten to only seeing what is immediately near them. Shrouded entities also take more DMG for the duration of the effect.
                        </td>
                    </tr>
                    <!-- end of noctis -->

                    <!-- CELESTE -->
                    <tr>
                        <td class="td fade-in">
                            <img class="table-img" src="img/CELESTE_logo.png">
                        </td>
                        <td class="td fade-in">
                            <strong>CELESTE</strong>
                        </td>
                        <td class="td fade-in">
                            <strong>Astrum:</strong>
                            Astrum is a status effect exclusive to Celeste-affinity entities. On enemies, it drains 5% of their Max HP every 1.0s and decreases DEF to Celeste-type DMG. On allies, their healing received and DMG reduction are increased by 25%. 
                        </td>
                    </tr>
                </table>
            </div>
            <br>
            <hr>
        </div>
        <!-- END OF CONTAINER 4 -->


        <!-- CONTAINER 5 -->
        <div class="container5">
            <div class="flexcontainer fade-in">
                <span class="button" style="margin-left: 7%; font-size: 2rem; margin-top: -18%;">
                    <div class="button-content">
                        <img src="./img/Button.png" style="width: 24vw; height: 20vh;">
                        <div class="centered" style="left: 18%;">Advancing Your Character</div>
                    </div>
                </span>

                <div class="text-in-container1" style="text-align: right; padding-left: 10vw; color: white; padding-right: 10vw; margin-top: 5vw;">
                    <h2 style="font-size: 3vw;">Quests and Challenges</h2>
                    <p style="text-align: right; font-size: 1.5vw;">
                        Complete quests from NPCs to gain experience and rewards and progress the storyline.
                        Challenge powerful enemies and bosses for increased rewards.<br>
                    </p>
                    <h2 style="font-size: 3vw;">Leveling Up</h2>
                    <p style="font-size: 1.5vw; padding-bottom: 5vh;">
                        Gain experience points (XP) to level up and unlock new abilities.
                        Allocate skill points to enhance specific attributes of your Aethercaster.<br>
                    </p>
                </div>
            </div>
        </div>
        <!-- END OF CONTAINER 5 -->


        <!-- CONTAINER 6 -->
        <div class="container6">
            <span class="button fade-in" style="margin-left: 7%; font-size: 2rem; position: absolute;">
                <div class="button-content">
                    <img src="./img/Button.png" style="width: 27vw; height: 20vh;">
                    <div class="centered" style="left: 15%;">Establishing Teams and Alliances</div>
                </div>
            </span>

            <div class="text-in-container1" style="text-align: right; padding-left: 10vw; color: white; padding-right: 10vw; margin-top: 5vw;">
                <h2 class="fade-in" style="font-size: 3vw; padding-top: 5vh;">Encounter Fellow Aethercasters</h2>
                <p class="fade-in" style="text-align: right; font-size: 2vw; padding-left: 25vw;">
                    Engage with other Aethercasters exploring the Ascendant Spire, learn their stories, and uncover their elemental affinities.
                </p>
                <h2 class="fade-in" style="font-size: 3vw;">Elemental Synergies</h2>
                <p class="fade-in" style="text-align: right; font-size: 2vw; padding-left: 25vw; padding-bottom: 6vh;">
                    Build teams with complementary elemental affinities to enhance your team's overall effectiveness in battles, puzzles, and challenges.
                </p>
            </div>
        </div>
        <!-- END OF CONTAINER 6 -->

        <!-- CONTAINER 7 -->
        <div class="container7">
            <hr class="fade-in" style="margin-top: 13vh;">
            <h1 class="fade-in" style="font-size: 7vw; text-align: center; color: white;">
                Aether Crystal Summon
            </h1>
            <hr class="fade-in"><br>
            <h3 class="fade-in" style="font-size: 2vw; text-align: center; color: white; padding-left: 25vw; padding-right: 25vw;">
                Players engage in the Aether Crystal Summon to draw forth powerful beings and artifacts from the mystical crystals resonating within the Ascendant Spire.
            </h3>
        </div>
        <!-- END OF CONTAINER 7 -->


        <!-- CONTAINER 8 -->
        <div class="container8">
            <span class="button fade-in" style="margin-left: 23%; font-size: 2.7rem;position: relative;">
                <div class="button-content">
                    <img src="./img/long-button.png" style="width: 55vw; height: 20vh;">
                    <div class="centered" style="left: 23%;">Guide to Aether Crystal Summoning</div>
                </div>
            </span>
            <br>
            <div class="text-in-container1" style="background-color: rgba(255, 255, 255, 0.5); margin: 0 15vw 5vh 15vw; border-radius: 50px; padding: 7px;">
                <h4 class="fade-in" style="font-size: 2vw; color: black;">
                    Welcome, Aethercaster, to the mystical realm of Astra! <br>
                    The Aether Crystal Summon is a pivotal feature , allowing you to draw forth powerful characters, gear, and items.
                </h4>
                <h1 class="fade-in" style="text-align: center; font-size: 4vw;">
                    Here's your guide to mastering the Aether Crystal Summon:
                </h1>
            </div>

            <div class="flexcontainer" style="justify-content: center;">
                <!-- LEFT-HAND SIDE TABLE -->
                <table>
                    <tr class="tooltip-left"> <!-- first row -->
                        <td class="tooltip-content" style="margin-top: 9.2vh;">
                            <div style="width: 25vw; height: 20vh;">
                                <p class="text-in-container1 p-in-table8">
                                    Crystals are earned through completing quests, defeating bosses, participating in events, and achieving milestones within the Ascendant Spire.
                                </p>
                            </div>
                        </td>
                        <th>
                            <div class="panel-in-container8 fade-in">
                                <p class="text-in-container8">
                                    Earn Crystals
                                </p>
                            </div>
                        </th>
                    </tr> <!-- end of first row -->

                    <tr class="tooltip-left"> <!-- second row -->
                        <td class="tooltip-content" style="margin-top: 10.5vh;">
                            <div style="width: 25vw; height: 20vh;">
                                <p class="text-in-container1 p-in-table8">
                                    Locate the Crystal Summon Portal in your Elemental Sanctuary. This is where you'll perform your Aether Crystal Summons.
                                </p>
                            </div>
                        </td>
                        <th>
                            <div class="panel-in-container8 fade-in" style="height: 24vh;">
                                <p class="text-in-container8">
                                    Navigate to the Crystal Summon Portal
                                </p>
                            </div>
                        </th>
                    </tr> <!-- end of second row -->

                    <tr class="tooltip-left"> <!-- third row -->
                        <td class="tooltip-content" style="margin-top: 4.5vh;">
                            <div style="width: 25vw; height: 20vh;">
                                <p class="text-in-container1 p-in-table8">
                                    Elemental Summons: Draw characters and items specific to your chosen elemental affinity. <br><br>
                                    Celestial Summons: Unleash the potential of rare and celestial entities transcending elemental boundaries.
                                </p>
                            </div>
                        </td>
                        <th>
                            <div class="panel-in-container8 fade-in" style="height: 20vh;">
                                <p class="text-in-container8">
                                    Understanding Summoning Types
                                </p>
                            </div>
                        </th>
                    </tr> <!-- end of third row -->

                    <tr class="tooltip-left"> <!-- fourth row -->
                        <td class="tooltip-content" style="margin-top: 4.3vh;">
                            <div style="width: 25vw; height: 20vh;">
                                <p class="text-in-container1 p-in-table8">
                                    Once in the Crystal Summon Portal, choose the type of summon you wish to perform.
                                    <br><br>
                                    Watch the mesmerizing animation as the energies of Astra respond to your call.
                                </p>
                            </div>
                        </td>
                        <th>
                            <div class="panel-in-container8 fade-in">
                                <p class="text-in-container8">
                                    Summoning Ritual
                                </p>
                            </div>
                        </th>
                    </tr> <!-- end of fourth row -->

                    <tr class="tooltip-left"> <!-- 5th row -->
                        <td class="tooltip-content" style="margin-top: 3.5vh;">
                            <div style="width: 25vw; height: 20vh;">
                                <p class="text-in-container1 p-in-table8">
                                    Await the revelation of your summoned entities. Characters may range from common to legendary, each with unique abilities and affinities. 
                                    <br><br>
                                    Gear and items obtained may enhance your character's stats and capabilities. 
                                </p>
                            </div>
                        </td>
                        <th>
                            <div class="panel-in-container8 fade-in" style="height: 19vh;">
                                <p class="text-in-container8">
                                    Reveal Your Rewards
                                </p>
                            </div>
                        </th>
                    </tr> <!-- end of 5th row -->
                </table>
                <!-- end of left table -->

                <!-- RIGHT-HAND SIDE TABLE -->
                <table style="margin-left: 2%;">
                    <tr class="tooltip-right"> <!-- 1st row -->
                        <th>
                            <div class="panel-in-container8 fade-in" style="height: 19vh;">
                                <p class="text-in-container8">
                                    Explore Affinity Synergies
                                </p>
                            </div>
                        </th>
                        <td class="tooltip-content" style="margin-top: 8.6vh;">
                            <div style="width: 25vw; height: 20vh;">
                                <p class="text-in-container1 p-in-table8">
                                    Consider the elemental affinities of your summoned characters. Synergies between affinities can enhance your party's effectiveness in battles. 
                                </p>
                            </div>
                        </td>
                    </tr> <!-- end of 1st row -->

                    <tr class="tooltip-right"> <!-- 2nd row -->
                        <th>
                            <div class="panel-in-container8 fade-in">
                                <p class="text-in-container8">
                                    Crystal Rarity
                                </p>
                            </div>
                        </th>
                        <td class="tooltip-content" style="margin-top: 11vh;">
                            <div style="width: 25vw; height: 20vh;">
                                <p class="text-in-container1 p-in-table8">
                                    Crystals come in various rarities. Higher rarity crystals have a greater chance of summoning powerful entities and rare items.
                                </p>
                            </div>
                        </td>
                    </tr> <!-- end of 2nd row -->

                    <tr class="tooltip-right"> <!-- 3rd row -->
                        <th>
                            <div class="panel-in-container8 fade-in">
                                <p class="text-in-container8">
                                    Artifact Summons
                                </p>
                            </div>
                        </th>
                        <td class="tooltip-content" style="margin-top: 8.5vh;">
                            <div style="width: 25vw; height: 20vh;">
                                <p class="text-in-container1 p-in-table8">
                                    Some Crystal Summons may include artifacts or special items that can be used to upgrade your Aetherflux abilities or enhance your character's stats.
                                </p>
                            </div>
                        </td>
                    </tr> <!-- end of 3rd row -->

                    <tr class="tooltip-right"> <!-- 4th row -->
                        <th>
                            <div class="panel-in-container8 fade-in" style="height: 19vh;">
                                <p class="text-in-container8">
                                    Celestial Summon Events
                                </p>
                            </div>
                        </th>
                        <td class="tooltip-content" style="margin-top: 8.5vh;">
                            <div style="width: 25vw; height: 20vh;">
                                <p class="text-in-container1 p-in-table8">
                                    Participate in special events to increase your chances of summoning celestial beings. These events may coincide with celestial alignments in Astra.
                                </p>
                            </div>
                        </td>
                    </tr> <!-- end of 4th row -->

                    <tr class="tooltip-right"> <!-- 5th row -->
                        <th>
                            <div class="panel-in-container8 fade-in" style="height: 24vh;">
                                <p class="text-in-container8">
                                    Seasonal Summoning Themes
                                </p>
                            </div>
                        </th>
                        <td class="tooltip-content" style="margin-top: 8.5vh;">
                            <div style="width: 25vw; height: 20vh;">
                                <p class="text-in-container1 p-in-table8">
                                    During seasonal events, themed Crystal Summons may be available. Explore these limited-time opportunities for exclusive characters and items. 
                                </p>
                            </div>
                        </td>
                    </tr> <!-- end of 5th row -->
                </table>
                <!-- end of right table -->
            </div>
        </div>
        <!-- END OF CONTAINER 8 -->


<!-- CHARACTER GUIDE -->
        <!-- Container 12 Banner -->
        <div class="container12" id="characterguide">
            <div style="text-align: right;">
                <h1 class="fade-in" style="font-size: 7vw; margin-left: 50vw; margin-top: 15vh; margin-right: 1vw;">
                    Character Guide
                </h1>
            </div>
        </div>

        <!-- Container 13 Caeles Seraph-->
        <div class="container13 gradient-cae" style="height: 145vh;">
            <div class="container">

                    <!-- Text on top of the image -->
                    <div class="layer2-container13" style="margin-top: 15vh;">
                        <div class="flexcontainer fancy-frame-cae" style="justify-content: center; padding-top: 5.4vh;">
                            <img class="fade-in" src="img/Chara icons/Caelestis _ Caeles icon.png" style="width: auto; height: 20vh;">
                            <div class="container fade-in" style="margin-left: 1vw;">
                                <h1 style="font-size: 2.3vw; font-family: 'Bellefair', sans-serif; color: black; margin-bottom: 0; margin-top: 0;">CAELESTIS/CAELES SERAPH</h1>
                                <h4 style="font-size: 1.8vw; font-family: 'Bellefair', sans-serif; color: black; margin-top: 0;">"AETHER WEAVER"</h4>
                                <h3 style="font-size: 1.6vw; font-family: 'Bellefair', sans-serif; ">V.A. YESHA ZAIRE</h3>
                            </div>
                            <div>
                                <button class="text-rectangle fade-in" style="margin-left: 34vw; margin-top: 1vw; padding-left: 2vw; padding-right: 2vw; border: 2px solid black; background-color: white;">
                                    <h2 style="font-size: 2vw;">All-Rounder</h2>
                                </button>
                            </div>
                        </div>

                        <div class="flexcontainer" style="justify-content: center; margin-top: 5vh;">
                            <div class="accordion-container fade-in">
                                <!-- Accordion Item 1 -->
                                <div class="accordion-border">
                                    <div class="accordion-item">
                                        <div class="accordion-heading">
                                            <button class="text-rectangle" style="font-family: 'Inter', sans-serif; width: 20vw; border: 2px solid black; background-color: white;">
                                                <h2 style="font-size: 1.5vw;"><strong>PLAYSTYLE:</strong></h2>
                                            </button>
                                            <h4 style="font-family: 'Inter', sans-serif; margin-left: 2vh; color: black; font-size: 1.3vw;"> 
                                                <strong style="color: black;">Damage/All-Rounder</strong>
                                            </h4>
                                        </div>
                                        <div class="accordion-content">
                                            <p>
                                                Caelestis/Caeles Seraph excels in harnessing any affinity's dominant attributes, using the access of different Aetherfluxes to create a versatile fighting style. They are effective in both solo and group play.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            <!-- Accordion Item 2 -->
                                <div class="accordion-item">
                                    <div class="accordion-heading">
                                        <button class="text-rectangle" style="font-family: 'Inter', sans-serif; width: 30vw; border: 2px solid black; background-color: white;">
                                            <h2 style="font-size: 1.5vw;"><strong>SKILLS:</strong></h2>
                                        </button>
                                    </div>
                                    <div class="accordion-content">
                                        <ul>
                                            <li>
                                                <p>
                                                <strong>Luce in Altis:</strong> Channeling Celeste and Gaia, Caelestis/Caeles gains a 15% DMG reduction and 3 random buffs.
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <strong>Dance of Fire and Water:</strong> Channels Aqua and Ignis affinities to create an elemental field that switches between magma (slows and applies Burn) and icy water (decreases DEF and has a chance to Freeze)
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <strong>Windstorm Eclipse:</strong> Channels Aero, Luxx, and Noctis affinities to deal 15 rapid slashes, depending on which affinity was last applied on the target enemy, it will either Blind (Luxx), drain a percentage of HP (Noctis), or deal additional damage equal to the number of slashes of that affinity (Aero).
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <strong>Ultimate: Astral Convergence: </strong> Channels the power of Astra Aetherflux to create a celestial vortex, drawing surrounding energy from various affinities. Gives all buffs to allies and purges status effects from themself, instead giving the status effects to enemies caught in the celestial vortex.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            <!-- Accordion Item 3 -->
                            <div class="accordion-item">
                                <div class="accordion-heading">
                                    <button class="text-rectangle" style="font-family: 'Inter', sans-serif; width: 30vw; border: 2px solid black; background-color: white;">
                                            <h2 style="font-size: 1.5vw;"><strong>SYNERGY:</strong></h2>
                                        </button>
                                </div>
                                <div class="accordion-content">
                                    <p>
                                        Caelestis/Caeles can act as both a support and a DMG dealer in the team, and as such, they may synergize differently based on the role you want them to play.
                                    </p>
                                    <p>
                                        <strong>As a DMG Dealer:</strong>
                                    </p>
                                    <ul>
                                        <li>
                                            <p>
                                                Best matches: Faye, Estela/Marina
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                Faye's single target supporting capabilities make her a must-have support on most teams. The last slot in the team could be filled up with anyone, however to maximize Caelestis/Caeles' skill Windstorm Eclipse, Estela's Gravitas can help make the skill hit multiple targets. Marina's Shape of Water + Tidal Surge can also help in landing Windstorm Eclipse easier.
                                            </p>
                                        </li>
                                    </ul>

                                    <p>
                                        <strong>As a Support:</strong>
                                    </p>
                                    <ul>
                                        <li>
                                            <p>
                                                Best matches: Faye, any DPS
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                Faye also has strong healing capabilities so Caelestis/Caeles can tank a fair amount of DMG due to their high base HP stat; plus Faye's Verdant Embrace has a good synergy with their ultimate: Astral Convergence. Caelestis/Caeles are of an all-around type of support so they can synergize with any DPS character reasonably well.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                <!-- end of text on top of image in container 13 -->
            </div>
        </div>
        <!-- end of container 13 -->

        <!-- Container 14 Estela Skyheart-->
        <div class="container13 gradient-estela" style="height: 145vh;">
            <div class="container">
-->
                <!-- Text on top of the image -->
                <div class="layer2-container13" style="margin-top: 15vh;">
                    <div class="flexcontainer fancy-frame-estela" style="justify-content: center; padding-top: 5.4vh;">
                        <img class="fade-in" src="img/Chara icons/Estela icon.png" style="width: auto; height: 20vh;">
                        <img class="fade-in" src="img/CELESTE_logo.png" style="width: auto; height: 10vh; margin-left: 1vw;">
                        <div class="container fade-in" style="margin-left: 1vw; margin-right: 15vw;">
                            <h1 style="font-size: 2.3vw; font-family: 'Bellefair', sans-serif; color: black; margin-bottom: 0; margin-top: 0;">ESTELA SKYHEART</h1>
                            <h4 style="font-size: 1.8vw; font-family: 'Bellefair', sans-serif; color: black; margin-top: 0;">"CELESTIAL ENCHANTRESS"</h4>
                            <h3 style="font-size: 1.6vw; font-family: 'Bellefair', sans-serif; color: black;">V.A. MAXINE SEVERO</h3>
                        </div>
                        <div>
                            <button class="text-rectangle fade-in" style="margin-left: 17vw; margin-top: 1vw; padding-left: 2vw; padding-right: 2vw; border: 2px solid black; background-color: white;">
                                <h2 style="font-size: 2vw;">Healer/Support</h2>
                            </button>
                        </div>
                    </div>

                    <div class="flexcontainer" style="justify-content: center; margin-top: 5vh;">
                        <div class="accordion-container fade-in">
                            <!-- Accordion Item 1 -->
                            <div class="accordion-item">
                                <div class="accordion-heading">
                                    <button class="text-rectangle" style="font-family: 'Inter', sans-serif; width: 20vw; border: 2px solid black; background-color: white;">
                                        <h2 style="font-size: 1.5vw;"><strong>PLAYSTYLE:</strong></h2>
                                    </button>
                                    <h4 style="font-family: 'Inter', sans-serif; margin-left: 2vh; color: black; font-size: 1.3vw;"> 
                                        <strong>Healer/Support</strong>
                                    </h4>
                                </div>
                                <div class="accordion-content">
                                    <p>
                                        Estela excels in debuffing and crowd control, using celestial Aetherflux to inflict big debuffs and protect allies. She is effective in both solo and group play.
                                    </p>
                                </div>
                            </div>

                        <!-- Accordion Item 2 -->
                            <div class="accordion-item">
                                <div class="accordion-heading">
                                    <button class="text-rectangle" style="font-family: 'Inter', sans-serif; width: 30vw; border: 2px solid black; background-color: white;">
                                        <h2 style="font-size: 1.5vw;"><strong>SKILLS:</strong></h2>
                                    </button>
                                </div>
                                <div class="accordion-content">
                                    <ul>
                                        <li>
                                            <p>
                                            <strong>Celestial Discord:</strong> Estela targets an enemy and inflicts them with the Curse of the Cosmos, decreasing Elemental RES to all elements by 65% and dealing DMG equal to 150 + 25% of Estela's Max AP. 
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Stellar Ward:</strong> Grants all allies a shield that can absorb up to 300 + 45% of Estela's Max AP.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Gravitas:</strong> Estela creates a mini black hole in the target area, pulling nearby enemies into it and slowing them. After the duration ends, any enemy caught in the black hole will be stunned for 0.75s and have their DEF reduced by 15%.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Ultimate: Shimmering Starfall: </strong> Estela channels the might of the cosmos and summons a meteor shower in the target area, dealing damage to enemis caught in the meteor shower. This meteor shower also applies the Astrum effect to both enemies and allies within the meteor shower radius .
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        <!-- Accordion Item 3 -->
                        <div class="accordion-item">
                            <div class="accordion-heading">
                                <button class="text-rectangle" style="font-family: 'Inter', sans-serif; width: 30vw; border: 2px solid black; background-color: white;">
                                        <h2 style="font-size: 1.5vw;"><strong>SYNERGY:</strong></h2>
                                    </button>
                            </div>
                            <div class="accordion-content">
                                <p>
                                    Estela is a support that specializes in debuffing the enemy and applying the Celeste Status Effect Astrum, which further debuffs enemies. Despite being a rather squishy support, she can provide a shield to her allies, which can help characters that need to either be in the front at all times or characters that need to kee still to deal damage (Aria).
                                </p>
                                <ul>
                                    <li>
                                        <p>
                                            Best matches: Aria/Kairos, Rrhus
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Estela's debuffs reduce both Elemental RES and DEF, so this is especially helpful to characters like Aria that rely more on basic attack damage to deal damage. She also synergizes well with Kairos due to Kairos needing specific channel time before he can unleash Kachow Strike. During channel time, a character is vulnerable, so Estela can cast Stellar Ward to protect her allies in the meantime. Gravitas can also help both Aria and Kairos land their attacks better due to how it can gather enemies in one place.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Rrhus can help protect Estela due to the DMG reduction he gives, as Estela is very vulnerable on her own.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <!-- end of text on top of image in container 14 -->
            </div>
        </div>
        <!-- end of container 14 -->

        <!-- Container 15 Marina Tide -->
        <div class="container13 gradient-marina" style="height: 145vh;">
            <div class="container">

                <!-- Text on top of the image -->
                <div class="layer2-container13" style="margin-top: 15vh;">
                    <div class="flexcontainer fancy-frame-marina" style="justify-content: center; padding-top: 5.4vh;">
                        <img class="fade-in" src="img/Chara icons/Marina icon.png" style="width: auto; height: 20vh;">
                        <img class="fade-in" src="img/AQUA_logo.png" style="width: auto; height: 10vh; margin-left: 1vw;">
                        <div class="container fade-in" style="margin-left: 1vw; margin-right: 15vw;">
                            <h1 style="font-size: 2.3vw; font-family: 'Bellefair', sans-serif; color: black; margin-bottom: 0; margin-top: 0;">MARINA TIDE</h1>
                            <h4 style="font-size: 1.8vw; font-family: 'Bellefair', sans-serif; color: black; margin-top: 0;">"AQUATIC TEMPEST"</h4>
                            <h3 style="font-size: 1.6vw; font-family: 'Bellefair', sans-serif; color: black;">V.A. GESSA SANORIA</h3>
                        </div>
                        <div>
                            <button class="text-rectangle fade-in" style="margin-left: 29vw; margin-top: 1vw; padding-left: 2vw; padding-right: 2vw; border: 2px solid black; background-color: white;">
                                <h2 style="font-size: 2vw;">Initiator</h2>
                            </button>
                        </div>
                    </div>

                    <div class="flexcontainer" style="justify-content: center; margin-top: 10vh;">
                        <div class="accordion-container fade-in">
                        <!-- Accordion Item 1 -->
                            <div class="accordion-item">
                                <div class="accordion-heading">
                                    <button class="text-rectangle" style="font-family: 'Inter', sans-serif; width: 20vw; border: 2px solid black; background-color: white;">
                                        <h2 style="font-size: 1.5vw;"><strong>PLAYSTYLE:</strong></h2>
                                    </button>
                                    <h4 style="font-family: 'Inter', sans-serif; margin-left: 2vh; color: black; font-size: 1.3vw;"> 
                                        <strong>Initiator</strong>
                                    </h4>
                                </div>
                                <div class="accordion-content">
                                    <p>
                                        Marina excels at controlling the flow of water, combining offensive and defensive abilities to adapt to various situations. Her Aqua Affinity mastery allows her to manipulate water for both initiation and support. 
                                    </p>
                                </div>
                            </div>

                        <!-- Accordion Item 2 -->
                            <div class="accordion-item">
                                <div class="accordion-heading">
                                    <button class="text-rectangle" style="font-family: 'Inter', sans-serif; width: 30vw; border: 2px solid black; background-color: white;">
                                        <h2 style="font-size: 1.5vw;"><strong>SKILLS:</strong></h2>
                                    </button>
                                </div>
                                <div class="accordion-content">
                                    <ul>
                                        <li>
                                            <p>
                                            <strong>Tidal Surge:</strong> Marina summons forth a wave of Aqua Aetherflux, riding the wave to the target area and knocking up the first enemy hit airborne, dealing Aqua DMG equal to 100 + 150% of Marina's ATK. Any enemy within the radius of Marina's skill as it hits will also be knocked ariborne. If Marina doesn't hit anything with this wave, she gets off the wave at the target area.  
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Aqua Veil:</strong> Marina cloaks herself in Aqua, negating the next attack that lowers her HP below 35%. During the duration of Aqua Veil, she gains a 75% movement speed buff that decays over time.
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Shape of Water:</strong> Marina creates 2 constructs of pure Aqua that inherit 100% of her Max HP, lasting for 15.0s. The constructs automatically taunt nearby enemies, taking all of their aggro (does not work on enemies that are immune to crowd control effects unless stated otherwise).
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Ultimate: Mist Embrace: </strong> Marina summons a dense mist to shroud a target area, slowing enemies within. After a short delay, the mist immediately collapses, and any enemy caught is Frozen for 1.5 seconds, dealing Aqua DMG equal to 450 + 300% of Marina's ATK. 
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        <!-- Accordion Item 3 -->
                        <div class="accordion-item">
                            <div class="accordion-heading">
                                <button class="text-rectangle" style="font-family: 'Inter', sans-serif; width: 30vw; border: 2px solid black; background-color: white;">
                                        <h2 style="font-size: 1.5vw;"><strong>SYNERGY:</strong></h2>
                                    </button>
                            </div>
                            <div class="accordion-content">
                                <p>
                                    Marina is an excellent crown control character but may be overlooked in favor of other characters such as Faye, Rrhus, and Estela. However, if utilized correctly, Marina can become a team's trump card due to the crowd control she can dish out.
                                </p>
                                <ul>
                                    <li>
                                        <p>
                                            Best matches: Aria, Faye/Estela
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            While Marina doesn't deal much damage on her own, her crowd control can enable other damage dealers who would usually have trouble fighting in team settings such as Aria. Specifically Shape of Water, the constructs created from Shape of Water can help keep aggro away from Aria so that she can comfortably deal damage. 
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Faye can provide buffs for CD Reduction and AP cost reduction which can greatly buff Marina's supporting capablities. Estela can help Marina land her crowd control better such as Tidal Surge and Mist Embrace.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <!-- end of text on top of image in container 15 -->
            </div>
        </div>
        <!-- end of container 15 -->

        <!-- Container 16 Kairos Stormblade -->
        <div class="container13 gradient-kairos" style="height: 145vh;">
            <div class="container">

                <!-- Text on top of the image -->
                <div class="layer2-container13" style="margin-top: 15vh;">
                    <div class="flexcontainer fancy-frame-kairos" style="justify-content: center; padding-top: 5.4vh;">
                        <img class="fade-in" src="img/Chara icons/Kairos icon.png" style="width: auto; height: 20vh;">
                        <img class="fade-in" src="img/AERO_logo.png" style="width: auto; height: 10vh; margin-left: 1vw;">
                        <div class="container fade-in" style="margin-left: 1vw; margin-right: 15vw;">
                            <h1 style="font-size: 2.3vw; font-family: 'Bellefair', sans-serif; color: black; margin-bottom: 0; margin-top: 0;">KAIROS STORMBLADE</h1>
                            <h4 style="font-size: 1.8vw; font-family: 'Bellefair', sans-serif; color: black; margin-top: 0;">"GALE SKYSTRIDER"</h4>
                            <h3 style="font-size: 1.6vw; font-family: 'Bellefair', sans-serif; color: black;">V.A. JOHNNY CAGE</h3>
                        </div>
                        <div>
                            <button class="text-rectangle fade-in" style="margin-left: 17vw; margin-top: 1vw; padding-left: 2vw; padding-right: 2vw; border: 2px solid black; background-color: white;">
                                <h2 style="font-size: 2vw;">Fighter/Striker</h2>
                            </button>
                        </div>
                    </div>

                    <div class="flexcontainer" style="justify-content: center; margin-top: 10vh;">
                        <div class="accordion-container fade-in">
                        <!-- Accordion Item 1 -->
                            <div class="accordion-item">
                                <div class="accordion-heading">
                                    <button class="text-rectangle" style="font-family: 'Inter', sans-serif; width: 20vw; border: 2px solid black; background-color: white;">
                                        <h2 style="font-size: 1.5vw;"><strong>PLAYSTYLE:</strong></h2>
                                    </button>
                                    <h4 style="font-family: 'Inter', sans-serif; margin-left: 2vh; color: black; font-size: 1.3vw;"> 
                                        <strong>Bruiser/Damage</strong>
                                    </h4>
                                </div>
                                <div class="accordion-content">
                                    <p>
                                        Kairos is a front-line bruiser, dealing lightning-infused damage and disrupting enemies. His agility allows for quick maneuvers, making him a versatile and engaging character. 
                                    </p>
                                </div>
                            </div>

                        <!-- Accordion Item 2 -->
                            <div class="accordion-item">
                                <div class="accordion-heading">
                                    <button class="text-rectangle" style="font-family: 'Inter', sans-serif; width: 30vw; border: 2px solid black; background-color: white;">
                                        <h2 style="font-size: 1.5vw;"><strong>SKILLS:</strong></h2>
                                    </button>
                                </div>
                                <div class="accordion-content">
                                    <ul>
                                        <li>
                                            <p>
                                            <strong>Lightning Flash:</strong> Kairos throws a bolt of lightning at an enemy target and teleports to the lightning bolt, slashing them with the lightning upon arrival.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Kachow Strike:</strong> After 2.0s of channeling, Kairos unleashes a chain of lightning strikes in the target direction. Any enemy hit with this will be Shocked, and any enemy already Shocked will be Paralyzed on hit. 
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Shelter:</strong> Increases Kairos' physical and Aether DEF, gaining Iron Body for 2.0s.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Ultimate: BOOGSH! Fury: </strong> Kairos unleashes the full force of Thunder Aetherflux and summons a hail of fiery thunderbolts centered on his location. The lightning storm hits up to 7 times, each time dealing 150 + 120% of Kairos' ATK. Enemies caught within the storm are immediately Paralyzed for 1.0s. For the duration of his ultimate, Kairos cannot move or perform any action.  
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Iron Body (Special Status Effect):</strong> Iron Body is a status effect that makes the target immune to Crowd Control Effects for a specified duration.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        <!-- Accordion Item 3 -->
                        <div class="accordion-item">
                            <div class="accordion-heading">
                                <button class="text-rectangle" style="font-family: 'Inter', sans-serif; width: 30vw; border: 2px solid black; background-color: white;">
                                        <h2 style="font-size: 1.5vw;"><strong>SYNERGY:</strong></h2>
                                    </button>
                            </div>
                            <div class="accordion-content">
                                <p>
                                    Kairos is a melee character that can synergize with a lot of team compositions due to how versatile his skillset is and how easy he is to grasp even for new players. His stats also make him rather bulky, meaning he can take a few heavy hits without dying right away.
                                </p>
                                <ul>
                                    <li>
                                        <p>
                                            Best matches: Faye/Estela, Marina
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Both Faye and Estela can keep Kairos safe while at the front line all the while buffing his DMG capabilities. 
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Marina's crowd control can help set up enemies for Kairos to take care of with his AoE abilities, all the while providing openings for him to unleash his heavier attacks such as BOOGSH! Fury.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <!-- end of text on top of image in container 16 -->
            </div>
        </div>
        <!-- end of container 16 -->

        <!-- Container 17 Aria Nightshade -->
        <div class="container13 gradient-aria" style="height: 145vh;">
            <div class="container">

                <!-- Text on top of the image -->
                <div class="layer2-container13" style="margin-top: 15vh;">
                    <div class="flexcontainer fancy-frame-aria" style="justify-content: center; padding-top: 5.4vh;">
                        <img class="fade-in" src="img/Chara icons/Aria icon.png" style="width: auto; height: 20vh;">
                        <img class="fade-in" src="img/NOCTIS_logo.png" style="width: auto; height: 10vh; margin-left: 1vw;">
                        <div class="container fade-in" style="margin-left: 1vw; margin-right: 15vw;">
                            <h1 style="font-size: 2.3vw; font-family: 'Bellefair', sans-serif; color: black; margin-bottom: 0; margin-top: 0;">ARIA NIGHTSHADE</h1>
                            <h4 style="font-size: 1.8vw; font-family: 'Bellefair', sans-serif; color: black; margin-top: 0;">"SHADOW REVENANT"</h4>
                            <h3 style="font-size: 1.6vw; font-family: 'Bellefair', sans-serif; color: black;">V.A. MEJA MACEDA</h3>
                        </div>
                        <div>
                            <button class="text-rectangle fade-in" style="margin-left: 19vw; margin-top: 1vw; padding-left: 2vw; padding-right: 2vw; border: 2px solid black; background-color: white;">
                                <h2 style="font-size: 2vw;">Assassin/Rogue</h2>
                            </button>
                        </div>
                    </div>

                    <div class="flexcontainer" style="justify-content: center; margin-top: 10vh;">
                        <div class="accordion-container fade-in">
                        <!-- Accordion Item 1 -->
                            <div class="accordion-item">
                                <div class="accordion-heading">
                                    <button class="text-rectangle" style="font-family: 'Inter', sans-serif; width: 20vw; border: 2px solid black; background-color: white;">
                                        <h2 style="font-size: 1.5vw;"><strong>PLAYSTYLE:</strong></h2>
                                    </button>
                                    <h4 style="font-family: 'Inter', sans-serif; margin-left: 2vh; color: black; font-size: 1.3vw;"> 
                                        <strong>Assassin</strong>
                                    </h4>
                                </div>
                                <div class="accordion-content">
                                    <p>
                                        Aria is a stealthy ranged character with a focus on precision and shadowy Aetherflux. She excels at ambushes, sustained damage, and Noctis RES Reduction.
                                    </p>
                                </div>
                            </div>

                        <!-- Accordion Item 2 -->
                            <div class="accordion-item">
                                <div class="accordion-heading">
                                    <button class="text-rectangle" style="font-family: 'Inter', sans-serif; width: 30vw; border: 2px solid black; background-color: white;">
                                        <h2 style="font-size: 1.5vw;"><strong>SKILLS:</strong></h2>
                                    </button>
                                </div>
                                <div class="accordion-content">
                                    <ul>
                                        <li>
                                            <p>
                                            <strong>Shadow Cloak:</strong> Aria blends into the shadows, entering Stealth Mode. While in Stealth Mode, she turns invisible to both allies and enemies and gains 30% movement speed increase. If she uses a basic attack on an enemy with Shadow Cloak still active, she exits Stealth Mode and deals additional damage and CRIT DMG.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Dark Arrow Barrage:</strong> Aria unleashes a barrage of 10 Noctis-type arrows. Each arrow deals 35 + 25% of Aria's ATK, decreasing their Elemental RES to Noctis. Each arrow in Dark Arrow Barrage can stac DEF Reduction effect during Illusory Escape.
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Dim:</strong> Aria manipulates the shadows around her to enter Stealth Mode for 1.0s, leaving behind a shadow clone. If the enemy attacks the shadow clone left behind, they will be Shrouded for 1.5s, and Aria gains Illusory Escape buff for 5.0s.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Illusory Escape (Dim: Passive Effect):</strong> Illusory Escape boosts Aria's DMG by 25% of the enemy's Max HP + 150% of her current ATK, and boosts her attack speed by 60%. Her attacks while under Illusory Escape reduces a target's DEF by 1% per attack for 3.0s, which can stack (Max: 50 stacks). Every new hit refreshes the duration of her DEF reduction until Illusory Escape is still active.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Ultimate: Lights Out!: </strong> Aria fully plunges herself into the depths of the Abyss, entering a heightened state of Shadow Aetherflux empowerment. Her attacks during Lights Out! are imbued with Noctis, making her basic attacks deal Noctis-type damage instead of physical damage. During Lights Out!, Illusory Escape will not expire until the duration of Lights Out! does. 
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        <!-- Accordion Item 3 -->
                        <div class="accordion-item">
                            <div class="accordion-heading">
                                <button class="text-rectangle" style="font-family: 'Inter', sans-serif; width: 30vw; border: 2px solid black; background-color: white;">
                                        <h2 style="font-size: 1.5vw;"><strong>SYNERGY:</strong></h2>
                                    </button>
                            </div>
                            <div class="accordion-content">
                                <p>
                                    Aria is a ranged damage dealer that relies on her basic attacks to deal damage. She also applies DEF reduction debuffs to the enemy, helping her basic attacks hit more damage. However, as a ranged damage dealer, she is still limited in her capabilities to move around the battlefield despite having mobility skills such as Shadow Cloak and Dim. At most she can use these skills to reposition; however, she may still be vulnerable to bruisers such as Kairos and Rrhus, who can tank a lot of her damage.
                                </p>
                                <ul>
                                    <li>
                                        <p>
                                            Best matches: Estela/Faye, Rrhus/Marina
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Both Estela and Faye can keep Aria safe, however, Estela's interrupt ignore with her shield could benefit Aria more to let her keep attacking even when being attacked.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Between Rrhus and Marina, it's all up to personal preference with the team composition. Rrhus can help in a more defensive playstyle, keeping enemy aggro on himself while providing Aria with a human shield to stand behind while attacking. Marina supports a more offensive playstyle, allowing Aria time to damage enemies by continuously applying crowd control effects to them.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <!-- end of text on top of image in container 17 -->
            </div>
        </div>
        <!-- end of container 17 -->

        <!-- Container 18 Rrhus Ironheart -->
        <div class="container13 gradient-rrhus" style="height: 145vh;">
            <div class="container">

                <!-- Text on top of the image -->
                <div class="layer2-container13" style="margin-top: 15vh;">
                    <div class="flexcontainer fancy-frame-rrhus" style="justify-content: center; padding-top: 5.4vh;">
                        <img class="fade-in" src="img/Chara icons/Rrhus icon.png" style="width: auto; height: 20vh;">
                        <img class="fade-in" src="img/IGNIS_logo.png" style="width: auto; height: 10vh; margin-left: 1vw;">
                        <div class="container fade-in" style="margin-left: 1vw; margin-right: 15vw;">
                            <h1 style="font-size: 2.3vw; font-family: 'Bellefair', sans-serif; color: black; margin-bottom: 0; margin-top: 0;">RRHUS IRONHEART</h1>
                            <h4 style="font-size: 1.8vw; font-family: 'Bellefair', sans-serif; color: black; margin-top: 0;">"PYRO TEMPLAR"</h4>
                            <h3 style="font-size: 1.6vw; font-family: 'Bellefair', sans-serif; color: black;">V.A. CARL SAN JOSE</h3>
                        </div>
                        <div>
                            <button class="text-rectangle fade-in" style="margin-left: 20vw; margin-top: 1vw; padding-left: 2vw; padding-right: 2vw; border: 2px solid black; background-color: white;">
                                <h2 style="font-size: 2vw;">Guardian/Tank</h2>
                            </button>
                        </div>
                    </div>

                    <div class="flexcontainer" style="justify-content: center; margin-top: 10vh;">
                        <div class="accordion-container fade-in">
                        <!-- Accordion Item 1 -->
                            <div class="accordion-item">
                                <div class="accordion-heading">
                                    <button class="text-rectangle" style="font-family: 'Inter', sans-serif; width: 20vw; border: 2px solid black; background-color: white;">
                                        <h2 style="font-size: 1.5vw;"><strong>PLAYSTYLE:</strong></h2>
                                    </button>
                                    <h4 style="font-family: 'Inter', sans-serif; margin-left: 2vh; color: black; font-size: 1.3vw;"> 
                                        <strong>Initiator/Tank</strong>
                                    </h4>
                                </div>
                                <div class="accordion-content">
                                    <p>
                                        Rrhus is a melee powerhouse specializing in tanking damage. He can redirect sustained damage from his allies to himself and control the battlefield with fiery Aetherflux energy.
                                    </p>
                                </div>
                            </div>

                        <!-- Accordion Item 2 -->
                            <div class="accordion-item">
                                <div class="accordion-heading">
                                    <button class="text-rectangle" style="font-family: 'Inter', sans-serif; width: 30vw; border: 2px solid black; background-color: white;">
                                        <h2 style="font-size: 1.5vw;"><strong>SKILLS:</strong></h2>
                                    </button>
                                </div>
                                <div class="accordion-content">
                                    <ul>
                                        <li>
                                            <p>
                                            <strong>Inferno Slash:</strong> Rrhus charges in the target direction and slashes the area around him once, dealing minor Ignis damage and applying Burn to enemies hit. 
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Molten Essence :</strong> Rrhus sacrifices 25% if his HP to give himself Iron Body and 80% DMG Reduction for 10.0s. 
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Sear :</strong> Rrhus channels Ignis for 0.5s before slamming down in the target area, stunning any enemies in the blast zone and inflicting Burn on them.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Ultimate: Forged in the Flames: </strong> Rrhus gathers the full force of the Ignis within him, applying the effect of Molten Essence on himself and his allies. While Forged in the Flames is active, Rrhus has 90% DMG Reduction, with 75% of the DMG his allies take being redirected to him.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        <!-- Accordion Item 3 -->
                        <div class="accordion-item">
                            <div class="accordion-heading">
                                <button class="text-rectangle" style="font-family: 'Inter', sans-serif; width: 30vw; border: 2px solid black; background-color: white;">
                                        <h2 style="font-size: 1.5vw;"><strong>SYNERGY:</strong></h2>
                                    </button>
                            </div>
                            <div class="accordion-content">
                                <p>
                                    Rrhus is a tank that can redirect a lot of DMG taken by allies to himself. This helps him protect his allies, even if he can't see them. The DMG Reduction he gives is invaluable in protecting squishy (term to describe low HP entities) characters like supports or assassins.
                                </p>
                                <ul>
                                    <li>
                                        <p>
                                            Best matches: Aria/Silvanus, Estela/Faye
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            These are the best matches for Rrhus as Caelestis/Caeles and Kairos have higher base HP, meaning that although they could benefit, these four Aethercasters have better synergy with Rrhus.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <!-- end of text on top of image in container 18 -->
            </div>
        </div>
        <!-- end of container 18 -->

        <!-- Container 19 FAYE WHISPERWIND -->
        <div class="container13 gradient-faye" style="height: 145vh;">
            <div class="container">

                <!-- Text on top of the image -->
                <div class="layer2-container13" style="margin-top: 15vh;">
                    <div class="flexcontainer fancy-frame-faye" style="justify-content: center; padding-top: 5.4vh;">
                        <img class="fade-in" src="img/Chara icons/Faye icon.png" style="width: auto; height: 20vh;">
                        <img class="fade-in" src="img/GAIA_logo.png" style="width: auto; height: 10vh; margin-left: 1vw;">
                        <div class="container fade-in" style="margin-left: 1vw; margin-right: 15vw;">
                            <h1 style="font-size: 2.3vw; font-family: 'Bellefair', sans-serif; color: black; margin-bottom: 0; margin-top: 0;">FAYE WHISPERWIND</h1>
                            <h4 style="font-size: 1.8vw; font-family: 'Bellefair', sans-serif; color: black; margin-top: 0;">"NATURE ADEPT"</h4>
                            <h3 style="font-size: 1.6vw; font-family: 'Bellefair', sans-serif; color: black;">V.A. MARGOT ROBBIE</h3>
                        </div>
                        <div>
                            <button class="text-rectangle fade-in" style="margin-left: 18vw; margin-top: 1vw; padding-left: 2vw; padding-right: 2vw; border: 2px solid black; background-color: white;">
                                <h2 style="font-size: 2vw;">Healer/Support</h2>
                            </button>
                        </div>
                    </div>

                    <div class="flexcontainer" style="justify-content: center; margin-top: 10vh;">
                        <div class="accordion-container fade-in">
                        <!-- Accordion Item 1 -->
                            <div class="accordion-item">
                                <div class="accordion-heading">
                                    <button class="text-rectangle" style="font-family: 'Inter', sans-serif; width: 20vw; border: 2px solid black; background-color: white;">
                                        <h2 style="font-size: 1.5vw;"><strong>PLAYSTYLE:</strong></h2>
                                    </button>
                                    <h4 style="font-family: 'Inter', sans-serif; margin-left: 2vh; color: black; font-size: 1.3vw;"> 
                                        <strong>Healer/Support</strong>
                                    </h4>
                                </div>
                                <div class="accordion-content">
                                    <p>
                                        Faye is a versatile support character with healing and nature-themed abilities. She excels at giving buffs and crowd control effects. 
                                    </p>
                                </div>
                            </div>

                        <!-- Accordion Item 2 -->
                            <div class="accordion-item">
                                <div class="accordion-heading">
                                    <button class="text-rectangle" style="font-family: 'Inter', sans-serif; width: 30vw; border: 2px solid black; background-color: white;">
                                        <h2 style="font-size: 1.5vw;"><strong>SKILLS:</strong></h2>
                                    </button>
                                </div>
                                <div class="accordion-content">
                                    <ul>
                                        <li>
                                            <p>
                                            <strong>Nature's Rejuvenation :</strong> Faye heals a target ally for 400 + 50% of her Max AP. If the ally is below 15% of health when healed, Nature's Rejuvenation heals for an additional 150 + 20% of Faye's Max AP. This skill can also purify a single debuff on the target ally.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Verdant Embrace :</strong> Faye bestows upon an ally the Blessing of the Natural Order. Blessings of the Natural Order come with the following buffs: boosts DMG by 35%, increases Status Effects RES by 25%, decreases cooldowns by 15%, and reduces the AP cost of skills by 15%. 
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Dryad's Wrath :</strong> Faye calls upon the spirits deep within the earth, rooting the target enemy in place for 2.0s and dealing periodic Gaia DMG to them. 
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Ultimate: Rebirth: </strong> Harnessing the power of Gaia, Faye can bestow the Blessing of Rebirth on an ally (excluding Faye herself). Upon taking fatal DMG, an ally with the Blessing of Rebirth will immediately recover all of their HP and AP, and clear them of all status control effects. Faye can only use Rebirth once during a battle.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Special Passive: Child of the Forest:</strong> If Faye takes fatal DMG, the effects of Blessing of Rebirth will trigger on herself, but only 35% of her HP will be restored. This does not count as a usage of Rebirth.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        <!-- Accordion Item 3 -->
                        <div class="accordion-item">
                            <div class="accordion-heading">
                                <button class="text-rectangle" style="font-family: 'Inter', sans-serif; width: 30vw; border: 2px solid black; background-color: white;">
                                        <h2 style="font-size: 1.5vw;"><strong>SYNERGY:</strong></h2>
                                    </button>
                            </div>
                            <div class="accordion-content">
                                <p>
                                    Due to Faye's nature as a potent healer with a revive mechanic, she can be placed into any team with relative ease. It also helps that she can provide useful buffs, especially for skill casters like Silvanus and Kairos who rely on their skills to deal damage. Despite being a healer with relatively low HP, she still has her own revive in the form of her Special Passive to team members don't need to worry too much about her wellbeing.
                                </p>
                                <ul>
                                    <li>
                                        <p>
                                            Best matches: Silvanus/Kairos, Rrhus
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            As mentioned before, Faye can bestow useful buffs for skill casters in the form of Verdant Embrace, making her a useful ally for Silvanus and Kairos. Rrhus can help keep Faye protected, helping her save the Child of the Forest for dire situations only.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <!-- end of text on top of image in container 19 -->
            </div>
        </div>
        <!-- end of container 19-->

        <!-- Container 20 SILVANUS LIGHTWALKER-->
        <div class="container13 gradient-silvanus" style="height: 145vh;">
            <div class="container">

                <!-- Text on top of the image -->
                <div class="layer2-container13" style="margin-top: 15vh;">
                    <div class="flexcontainer fancy-frame-silvanus" style="justify-content: center; padding-top: 5.4vh;">
                        <img class="fade-in" src="img/Chara icons/Silvanus icon.png" style="width: auto; height: 20vh;">
                        <img class="fade-in" src="img/LUXX_logo.png" style="width: auto; height: 10vh; margin-left: 1vw;">
                        <div class="container fade-in" style="margin-left: 1vw; margin-right: 15vw;">
                            <h1 style="font-size: 2.3vw; font-family: 'Bellefair', sans-serif; color: black; margin-bottom: 0; margin-top: 0;">SILVANUS LIGHTWALKER</h1>
                            <h4 style="font-size: 1.8vw; font-family: 'Bellefair', sans-serif; color: black; margin-top: 0;">"ILLUSIONIST LUMINARY"</h4>
                            <h3 style="font-size: 1.6vw; font-family: 'Bellefair', sans-serif; color: black;">V.A. KEANU REEVES</h3>
                        </div>
                        <div>
                            <button class="text-rectangle fade-in" style="margin-left: 13vw; margin-top: 1vw; padding-left: 2vw; padding-right: 2vw; border: 2px solid black; background-color: white;">
                                <h2 style="font-size: 2vw;">Assassin/Rogue</h2>
                            </button>
                        </div>
                    </div>

                    <div class="flexcontainer" style="justify-content: center; margin-top: 10vh;">
                        <div class="accordion-container fade-in">
                        <!-- Accordion Item 1 -->
                            <div class="accordion-item">
                                <div class="accordion-heading">
                                    <button class="text-rectangle" style="font-family: 'Inter', sans-serif; width: 20vw; border: 2px solid black; background-color: white;">
                                        <h2 style="font-size: 1.5vw;"><strong>PLAYSTYLE:</strong></h2>
                                    </button>
                                    <h4 style="font-family: 'Inter', sans-serif; margin-left: 2vh; color: black; font-size: 1.3vw;"> 
                                        <strong>Assassin</strong>
                                    </h4>
                                </div>
                                <div class="accordion-content">
                                    <p>
                                         Silvanus is an agile and tricky character specializing in illusions. He excels at confusing enemies, creating decoys, and dealing single target burst damage.
                                    </p>
                                </div>
                            </div>

                        <!-- Accordion Item 2 -->
                            <div class="accordion-item">
                                <div class="accordion-heading">
                                    <button class="text-rectangle" style="font-family: 'Inter', sans-serif; width: 30vw; border: 2px solid black; background-color: white;">
                                        <h2 style="font-size: 1.5vw;"><strong>SKILLS:</strong></h2>
                                    </button>
                                </div>
                                <div class="accordion-content">
                                    <ul>
                                        <li>
                                            <p>
                                            <strong>Gleam Step:</strong> Silvanus refracts light off of his own body, blinking to the target destination and blinding enemies in the area.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Mirage:</strong> Silvanus takes advantage of Luxx and reflection, creating autonomous illusions that inherit 15% of his Max HP, lasting 7.0s. The illusions act and move of their own accord, but cannot deal damage to an enemy. If an enemy destroys one of his illusions, the enemy is Blinded for 1.0s. 
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Dawnbreaker:</strong> Silvanus imbues his dual swords with Luxx, slashing in 2 wide arcs at the target direction. If both slashes hit an enemy, Silvanus will perform a third strike, slamming his dual swords into the ground and dealing Luxx DMG equal to 150 + 300% of his ATK.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Ultimate: Assault of the Morning Star: </strong> Silvanus gathers the Luxx Aetherflux from within himself and manifests it physically as solid illusions. The illusions then barrage the target enemy with Luxx DMG equal to 20% of Silvanus' ATK, before Silvanus strikes with the final blow, dealing Luxx DMG equal to 1200 + 700% of his ATK. During this ultimate, Silvanus cannot be attacked nor receive damage.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        <!-- Accordion Item 3 -->
                        <div class="accordion-item">
                            <div class="accordion-heading">
                                <button class="text-rectangle" style="font-family: 'Inter', sans-serif; width: 30vw; border: 2px solid black; background-color: white;">
                                        <h2 style="font-size: 1.5vw;"><strong>SYNERGY:</strong></h2>
                                    </button>
                            </div>
                            <div class="accordion-content">
                                <p>
                                    
                                </p>
                                <ul>
                                    <li>
                                        <p>
                                            Best matches: Rrhus/Faye, Estela
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            The choice between Rrhus and Faye comes down to personal preference, as Silvanus' fighting style does require him to be within enemy ranks most of the time. Faye, however, has the added edge of providing useful buffs for Silvanus such as CD Reduction and skill cost reduction.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            However, because there are time where Silvanus is vulnerable while casting skills, Estela's shield is invaluable as it helps characters ignore Interrupt (Interrupt is a term used when a character's action is interrupted/overridden by another action, usually when being hit). Estela also has the added bonus of having an Elemental RES decrease for all Elemental Affinities.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <!-- end of text on top of image in container 20 -->
            </div>
        </div>
        <!-- end of container 20 -->

        <!-- Container 21 MIKU HATSUNE -->
        <div class="container13 gradient-miku" style="height: 145vh;">
            <div class="container">

                <!-- Text on top of the image -->
                <div class="layer2-container13" style="margin-top: 15vh;">
                    <div class="flexcontainer fancy-frame-miku" style="justify-content: center; padding-top: 5.4vh;">
                            <img class="fade-in" src="img/Chara icons/Miku icon.png" style="width: auto; height: 20vh;">
                            <img class="fade-in" src="img/AQUA_logo.png" style="width: auto; height: 10vh; margin-left: 1vw;">
                            <div class="container fade-in" style="margin-left: 1vw; margin-right: 15vw;">
                                <h1 style="font-size: 2.3vw; font-family: 'Bellefair', sans-serif; color: black; margin-bottom: 0; margin-top: 0;">MIKU HATSUNE</h1>
                                <h4 style="font-size: 1.8vw; font-family: 'Bellefair', sans-serif; color: black; margin-top: 0;">"VIRTUAL DIVA"</h4>
                                <h3 style="font-size: 1.6vw; font-family: 'Bellefair', sans-serif; color: black;">V.A. SAKI FUJITA</h3>
                            </div>
                        <div>
                            <button class="text-rectangle fade-in" style="margin-left: 28vw; margin-top: 1vw; padding-left: 2vw; padding-right: 2vw; border: 2px solid black; background-color: white;">
                                <h2 style="font-size: 2vw;">SPECIAL</h2>
                            </button>
                        </div>
                    </div>

                    <div class="flexcontainer" style="justify-content: center; margin-top: 5vh;">
                        <div class="accordion-container fade-in">
                        <!-- Accordion Item 1 -->
                            <div class="accordion-item">
                                <div class="accordion-heading">
                                    <button class="text-rectangle" style="font-family: 'Inter', sans-serif; width: 20vw; border: 2px solid black; background-color: white;">
                                        <h2 style="font-size: 1.5vw;"><strong>PLAYSTYLE:</strong></h2>
                                    </button>
                                    <h4 style="font-family: 'Inter', sans-serif; margin-left: 2vh; color: black; font-size: 1.3vw;"> 
                                        <strong>Ranged Nuker/Damage Dealer</strong>
                                    </h4>
                                </div>
                                <div class="accordion-content">
                                    <p>
                                        Miku excels at casting ranged skills to deal heavy damage to enemies (Nuker). She specializes in both AoE and single target damage, making her a must-have for any team composition. And, honestly, who wouldn't want Virtual Diva Hatsune Miku on their team?
                                    </p>
                                </div>
                            </div>

                        <!-- Accordion Item 2 -->
                            <div class="accordion-item">
                                <div class="accordion-heading">
                                    <button class="text-rectangle" style="font-family: 'Inter', sans-serif; width: 40vw; border: 2px solid black; background-color: white;">
                                        <h2 style="font-size: 1.5vw;"><strong>SKILLS:</strong></h2>
                                    </button>
                                </div>
                                <div class="accordion-content">
                                    <ul>
                                        <li>
                                            <p>
                                            <strong>Rolling Girl:</strong> Miku summons 3 Aqua clones of herself, encasing them in a barrier of Aqua before sending them rolling in a target direction. On hitting an enemy, the clones explode into shards of ice, dealing 200 + 225% of Miku's ATK per clone.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Cantarella:</strong> Miku poisons the enemy with Cantarella, dealing 15 + 50% of Miku's ATK, per poison hit (hits up to 39 times). If an enemy dies from the Cantarella poison, the cooldown of this skill is refreshed. However, if the enemy does not die after the 39 hits, Miku will be inflicted with Cantarella instead (can be purified by other Aethercaster skills or items; Cantarella DMG can be redirected).  
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Deep-Sea Girl:</strong> Miku creates a 10m-radius dome of Aqua Aetherflux at her current location. Enemies who enter the dome are immediately slowed by 75% and their cooldown timers increase in duration. Miku and her allies can move freely within this dome, with their cooldown timers greatly reduced. 
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Ultimate: The Disappearance of Hatsune Miku: </strong> Miku disappears for a brief moment, fading out into code glitches and Aqua Aetherflux before reappearing at the target area, disintegrating any entity (either enemy or ally) caught. All entities die upon impact (except bosses, who instead take DMG equal to 80% of their HP; ignores Resistances, DEF, and DMG Reduction), including Miku herself.Every time this skill is used, the cooldown timer gets longer and longer (+1min every usage, cooldown capped at 72 hours).
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        <!-- Accordion Item 3 -->
                        <div class="accordion-item">
                            <div class="accordion-heading">
                                <button class="text-rectangle" style="font-family: 'Inter', sans-serif; width: 40vw; border: 2px solid black; background-color: white;">
                                        <h2 style="font-size: 1.5vw;"><strong>SYNERGY:</strong></h2>
                                    </button>
                            </div>
                            <div class="accordion-content">
                                <p>
                                    Miku is a damage dealer that can deal heavy amounts of damage, even able to deal heavy damage to boss characters regardless of their defensive stats. However, these skills come at a cost, so Miku players will need to play her strategically.
                                </p>
                                <ul>
                                    <li>
                                        <p>
                                            Best matches: Caelestis/Caeles /Rrhus, Faye
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Ranged damage dealers will almost always need a character that can tank damage for them as they are almost always vulnerable while dealing damage. Rrhus has especially good synergy due to his ultimate being able to bestow DMG Reduction to his allies, and the DMG redirect can help Miku mitigate the effects of Cantarella.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Both Caelestis/Caeles and Faye can purify status effects which is especially helpful for Miku during Cantarella.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <!-- end of text on top of image in container 21 -->
            </div>
        </div>
        <!-- end of container 21 (LAST CHARACTER) -->
<!-- END OF CHARACTER GUIDE -->


        <!-- CONTAINER 9 -->
        <div class="container9" id="bossguide">
            <h1 style="font-size: 9vw; color: white; margin-left: 5vw;">
                Boss Guide
            </h1>
        </div>
        <!-- END OF CONTAINER 9 -->

        <!-- CONTAINER 10 -->
        <div class="container10">   
            <table style="width: 50%; margin-left: 25vw; margin-bottom: 15vh;">
                <!-- 1st row -->
                <tr>
                    <td>
                        <div class="card-cell fade-in">
                            <img class="img-in-table10" src="img/Guidepage_BossGuide_Ancient Guardian.png">
                            <div class="card-content">
                                <b>Ancient Guardian</b>
                                <p style="text-align: left;">
                                    <strong>Background: </strong> An animated ambodiment of the Verdant Sanctum's ancient essence, the Ancient Guardian is a colossal creature born of Gaia Aetherflux. Its body is a fusion of vines, stone, and flora, pulsating with the heartbeat of the earth. 
                                </p>
                            </div>
                        </div>
                    </td>
                    <td style="padding: 1vw;">
                        <span class="button btn-in-container10 fade-in" style="margin-top: -2%; font-size: 2rem; position: absolute;">
                            <div class="button-content">
                                <img src="./img/Button.png" style="width: 20vw;">
                                <div class="centered" style="left: 25%;">Gaia's Embrace</div>
                            </div>
                        </span>
                        <p class="fade-in" style="font-size: 1vw; margin-top: 15vh;">
                            <strong>Battle Strategy:</strong>
                            Attack the Guardian's limbs to weaken its connection to the earth. Watch for environmental cues as the Guardian summons roots and vines to entangle players. Terra Wardens excel in this battle, using their affinity to commune with the earth for strategic advantages.
                        </p>
                    </td>
                </tr>
                <!-- END OF 1ST ROW -->

                <!-- 2nd row -->
                <tr>
                    <td style="padding: 1vw;">
                        <span class="button btn-in-container10 fade-in" style="margin-top: -2%; font-size: 2rem; position: absolute;">
                            <div class="button-content">
                                <img src="./img/Button.png" style="width: 20vw;">
                                <div class="centered">Aqua's Wrath</div>
                            </div>
                        </span>
                        <p class="fade-in" style="font-size: 1vw; margin-top: 15vh;">
                            <strong>Battle Strategy:</strong>
                            The Hydro Leviathan floods the tier, creating underwater zones and tidal waves. Azure Tides shine in this battle, utilizing water manipulation to redirect currents and exploit the Leviathan's vulnerabilities. 
                        </p>
                    </td>
                    <td>
                        <div class="card-cell fade-in">
                            <img class="img-in-table10" src="img/Guidepage_BossGuide_HydroLeviathan.png">
                            <div class="card-content">
                                <b>Hydro Leviathan</b>
                                <p style="text-align: left;">
                                    <strong>Background: </strong> Emerging from the depths of Aqui Trench within the Spire, the Hydro Leviathan is a massive aquatic serpent empowered by Aqua Aetherflux. Its scales shimmer with liquid energy and it commands the waters to engulf and drown adversaries. 
                                </p>
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- END OF 2ND ROW -->

                <!-- 3rd row -->
                <tr>
                    <td>
                        <div class="card-cell fade-in">
                            <img class="img-in-table10" src="img/Guidepage_BossGuide_Inferno Colossus.png">
                            <div class="card-content">
                                <b>Inferno Colossus</b>
                                <p style="text-align: left;">
                                    <strong>Background: </strong> The Inferno Colossus rises from one of the tiers of the Ascendant Spire, a titanic golem fueled by perpetual flames of Ignis Aetherflux. Its molten form radiates intense heat, and it wields fiery weapons with devastating force.
                                </p>
                            </div>
                        </div>
                    </td>
                    <td style="padding: 1vw;">
                        <span class="button btn-in-container10 fade-in" style="margin-top: -2%; font-size: 2rem; position: absolute;">
                            <div class="button-content">
                                <img src="./img/Button.png" style="width: 20vw;">
                                <div class="centered" style="left: 32%;">Ignis' Blaze</div>
                            </div>
                        </span>
                        <p class="fade-in" style="font-size: 1vw; margin-top: 15vh;">
                            <strong>Battle Strategy:</strong>
                            Pylar Emblems shine in this heated confrontation. Maneuver around the Inferno Colossus, exploiting moments when it exposes its molten core. Be wary of area-of-effect fire attacks that can engulf the arena.
                        </p>
                    </td>
                </tr>
                <!-- END OF 3RD ROW -->

                <!-- 4th row -->
                <tr>
                    <td style="padding: 1vw;">
                        <span class="button btn-in-container10 fade-in" style="margin-top: -2%; font-size: 2rem;position: absolute;">
                            <div class="button-content">
                                <img src="./img/Button.png" style="width: 20vw;">
                                <div class="centered" style="left: 31%;">Aero's Fury</div>
                            </div>
                        </span>
                        <p class="fade-in" style="font-size: 1vw; margin-top: 15vh;">
                            <strong>Battle Strategy:</strong>
                            Zephyr Aries excel in navigating the aerial battlefield. Dodge lightning strikes and whirlwinds, and exploit openings when the Storm Cherub charges up for powerful attacks. 
                        </p>
                    </td>
                    <td>
                        <div class="card-cell fade-in">
                            <img class="img-in-table10" src="img/Guidepage_BossGuide_Storm Cherub.png">
                            <div class="card-content">
                                <b>Storm Cherub</b>
                                <p style="text-align: left;">
                                    <strong>Background: </strong> A celestial being hailing from within the Ascendant Spire, the Storm Cherub harnesses the power of Aero Aetherflux. It manifests as an ethereal being wreathed in storm clouds, summoning thunder and lightning with every movement.
                                </p>
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- END OF 4TH ROW -->
        
                <!-- 5th row -->
                <tr>
                    <td>
                        <div class="card-cell fade-in">
                            <img class="img-in-table10" src="img/Guidepage_BossGuide_Luminescent Enigma.png">
                            <div class="card-content">
                                <b>Luminescent Enigma</b>
                                <p style="text-align: left;">
                                    <strong>Background: </strong> The Luminescent Enigma emerges from the depths of the tier of Ascendant Spire, a mysterious entity shaped by Luxx Aetherflux. Its form shifts between dazzling illusions, leaving adventurers questioning reality.
                                </p>
                            </div>
                        </div>
                    </td>
                    <td style="padding: 1vw;">
                        <span class="button btn-in-container10 fade-in" style="margin-top: -2%; font-size: 2rem;position: absolute;">
                            <div class="button-content">
                                <img src="./img/Button.png" style="width: 20vw;">
                                <div class="centered" style="left: 29%;">Luxx's Riddle</div>
                            </div>
                        </span>
                        <p class="fade-in" style="font-size: 1vw; margin-top: 15vh;">
                            <strong>Battle Strategy:</strong>
                            An Illusionist Luminary is crucial in deciphering the Luminescent Enigma's illusions. Collaborate with party members to unveil the true entity, as the boss uses illusions to disorient and deceive. 
                        </p>
                    </td>
                </tr>
                <!-- END OF 5TH ROW -->

                <!-- 6th row -->
                <tr>
                    <td style="padding: 1vw;">
                        <span class="button btn-in-container10 fade-in" style="margin-top: -2%; font-size: 2rem;position: absolute;">
                            <div class="button-content">
                                <img src="./img/Button.png" style="width: 20vw;">
                                <div class="centered" style="left: 30%;">Noctis' Veil</div>
                            </div>
                        </span>
                        <p class="fade-in" style="font-size: 1vw; margin-top: 15vh;">
                            <strong>Battle Strategy:</strong>
                            A Shadow Revenant is instrumental in deciphering the Shadow Reaver's movements. Illuminate the arena strategically and anticipate attacks as the boss transitions between corporeal and shadowy states. 
                        </p>
                    </td>
                    <td>
                        <div class="card-cell fade-in">
                            <img src="img/Guidepage_BossGuide_Shadow Reaver.png" style="height: auto; width: 25vw;">
                            <div class="card-content">
                                <b>Shadow Reaver</b>
                                <p style="text-align: left;">
                                    <strong>Background:</strong> A master of shadows, the Shadow Reaver lurks in darkness, empowered by NOCTIS Aetherflux. Its form is obscured, and it strikes swiftly from the shadows with deadly precision.
                                </p>
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- END OF 6TH ROW -->

                <!-- 7th row -->
                <tr>
                    <td>
                        <div class="card-cell fade-in">
                            <img src="img/Guidepage_BossGuide_Cosmic Arbiter.png" style="height: auto; width: 25vw;">
                            <div class="card-content">
                                <b>Cosmis Arbiter</b>
                                <p style="text-align: left;">
                                    <strong>Background:</strong> The Cosmis Arbiter, a being attuned to the vastness of Astral Vistas, draws power from CELESTE Aetherflux. Its presence transcends dimensions, and it manipulates cosmis energies to enforce celestial judgment.
                                </p>
                            </div>
                        </div>
                    </td>
                    <td style="padding: 1vw;">
                        <span class="button btn-in-container10 fade-in" style="margin-top: -2%; font-size: 2rem;position: absolute;">
                            <div class="button-content">
                                <img src="./img/Button.png" style="width: 22vw;">
                                <div class="centered" style="left: 22%;">Celeste's Judgment</div>
                            </div>
                        </span>
                        <p class="fade-in" style="font-size: 1vw; margin-top: 15vh;">
                            <strong>Battle Strategy:</strong>
                            Celeste Asters and Aetherweavers are essential in this multidimensional battle. Navigate through interdimensional portals, dodge celestial projectiles, and synchronize attacks during windows of cosmis vulnerability.
                        </p>
                    </td>
                </tr>
                <!-- END OF 7TH ROW -->

                <!-- 8th row -->
                <tr>
                    <td style="padding: 1vw;">
                        <span class="button btn-in-container10 fade-in" style="margin-top: -1%; font-size: 2rem;position: absolute;">
                            <div class="button-content">
                                <img src="./img/Button.png" style="width: 20vw;">
                                <div class="centered" style="left: 24%;">Astra Ascendant</div>
                            </div>
                        </span>
                        <p class="fade-in" style="font-size: 1vw; margin-top: 16vh;">
                            <strong>Battle Strategy:</strong>
                            All Aethercasters must unite their strengths, combining elemental affinities to weaken Astra Ascendant's defenses. Adapt strategies dynamically as the boss shifts through phases, representing each elemental realm. Coordination and mastery of Aetherflux abilities are crucial for victory.
                        </p>
                    </td>
                    <td>
                        <div class="card-cell fade-in">
                            <img src="img/Guidepage_BossGuide_Astra Ascendant.png" style="height: auto; width: 25vw;">
                            <div class="card-content">
                                <b>Final Boss</b>
                                <p style="text-align: left;">
                                    <strong>Background:</strong> At the pinnacle of the Ascendant Spire, Astra Ascendant is a convergence of all elemental affinities. It embodies the celestial balance that Aethercasters seek to maintain and challenges them to prove their mastery.
                                </p>
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- END OF 8TH ROW -->
            </table>
            <div style="background-color: white; margin: 0; padding: 0;">
                <hr style="background-color: goldenrod;">
            </div>
        </div>
        <!-- END OF CONTAINER 10 -->
        


        <!-- Container 11 -->
        <div class="container11">
            <div class="flexcontainer">
                <span class="button fade-in" style="font-size: 2.5rem; position: relative; margin-left: -8%;">
                    <div class="button-content">
                        <img src="./img/square-button.png" style="width: 19vw;">
                        <div class="centered" style="left: 32%;">Rewards:</div>
                    </div>
                </span>

                <div class="fade-in">
                    <ul>
                        <li>
                            <p style="font-size: 1vw; font-weight: 300; font-family: 'Inter', sans-serif;">
                                <strong>
                                    Successful defeat of bosses grants rare elemental artifacts, enhancing Aetherflux mastery. 
                                </strong>
                            </p>
                        </li>
                        <li>
                            <p style="font-size: 1vw; font-weight: 300; font-family: 'Inter', sans-serif;">
                                <strong>
                                    Unlocking higher levels of the Ascendant Spire reveals secret chambers with ancient lore and powerful relics.
                                </strong>
                            </p>
                        </li>
                        <li>
                            <p style="font-size: 1vw; font-weight: 300; font-family: 'Inter', sans-serif;">
                                <strong>
                                    Aethercasters who ascend the highest levels unlock legendary gear and the ability to influence the destiny of Astra.
                                </strong>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end of container 11 -->
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

    <!-- JS for Pop-Up -->
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            var tooltips = document.querySelectorAll('.tooltip');

            tooltips.forEach(function(tooltip) {
                tooltip.addEventListener('mouseenter', function() {
                    tooltip.querySelector('.tooltip-content').style.display = 'block';
                });

                tooltip.addEventListener('mouseleave', function() {
                    tooltip.querySelector('.tooltip-content').style.display = 'none';
                });
            });
        });
    </script>

    <!-- Accordion Script -->
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
          var accordionItems = document.querySelectorAll('.accordion-item');

          accordionItems.forEach(function (item) {
            var heading = item.querySelector('.accordion-heading');
            var content = item.querySelector('.accordion-content');

            heading.addEventListener('click', function () {
              item.classList.toggle('active');
              content.classList.toggle('show');

              // Close other accordion items
              accordionItems.forEach(function (otherItem) {
                if (otherItem !== item && otherItem.classList.contains('active')) {
                  otherItem.classList.remove('active');
                  otherItem.querySelector('.accordion-content').classList.remove('show');
                }
              });
            });
          });
        });
        </script>

    <!-- JS for Guide Dropdown -->
    <script type="text/javascript">
        let guideDropdownVisible = false;

        // Function to toggle the guide dropdown
        function toggleGuideDropdown() {
            const guideDropdown = document.getElementById('guide-dropdown');
            guideDropdownVisible = !guideDropdownVisible;
            guideDropdown.style.display = guideDropdownVisible ? 'block' : 'none';
        }

        // Function to handle guide link clicks
        function navigateToGuide(sectionId) {
            // Close the guide dropdown
            toggleGuideDropdown();

            // Prevent the default behavior of the anchor tag
            event.preventDefault();

            // Calculate the target position of the section
            const section = document.getElementById(sectionId);
            if (section) {
                const offsetTop = section.getBoundingClientRect().top + window.scrollY;

                // Use scrollIntoView for an immediate scroll to the section
                section.scrollIntoView({ behavior: 'smooth' });

                // Adjust the scroll position to eliminate the initial jump
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        }

        // Function to set up event handlers for the guide dropdown
        function setupGuideDropdownHandlers() {
            // Add click event to guide icon
            const guideIcon = document.getElementById('guide-icon');
            guideIcon.addEventListener('click', toggleGuideDropdown);

            // Add click events to guide links
            const guideLinks = document.querySelectorAll('.guide-dropdown-content');
            guideLinks.forEach(link => {
                link.addEventListener('click', (event) => navigateToGuide(link.dataset.section));
            });
        }

        // Call setup function when the DOM is loaded
        document.addEventListener('DOMContentLoaded', function () {
            setupGuideDropdownHandlers();
        });
    </script>
    <!-- End of Script -->
</body>
</html>