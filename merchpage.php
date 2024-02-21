<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ASCENT | Aelysian Artifacts</title>

	<!-- For the navigaton bar CSS-->
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link rel="icon" type="image/x-icon" href="./img/logo-tower.png">
	<script type="text/javascript" src="navbar.js"></script>
	<!-- Stylesheet -->
	<style type="text/css">
		/*Import Font*/
		@import url('https://fonts.googleapis.com/css2?family=Kaisei+Opti&display=swap');

		body {
			display: flex;
			flex-direction: column;
			min-height: 100vh;
			font-family: 'Kaisei Opti', serif;
			background-size: cover;
			background-position: center;
			background-image: url('img/scenic-background.png');
		}

		.img1 {
			height: auto;
			width: 65%;
			padding-inline: 17.2vw;
			margin: 0;
			position: relative;
      overflow: hidden;
		}

		.img1, #cart-icon, {
			opacity: 0; 
    	animation: fadeIn 2s ease forwards;
    }

		@keyframes fadeIn {
		    to {
		        opacity: 1; /* Gradually transition to full opacity */
		    }
		}

		.h1 {
			font-size: 2vw;
			text-align: center;
			padding-inline: 17.2vw;
			margin: 0;
  		transition: font-size 0.3s ease-in-out; 
		}

		a:hover {
			color: gray;
		}
		
		.table {
    		width: 63%;
    		border-collapse: collapse;
    		margin: 30px auto;
    		background: linear-gradient(90deg, rgba(255, 182, 193, 0.7), rgba(176, 196, 222, 0.6), rgba(255, 182, 193, 0.7));
			  background-size: 900% 900%; /* Increase the size for smoother transition */
			  animation: changeGradient 20s infinite linear;
    		/*background: linear-gradient(rgba(255, 182, 193, 0.8), rgba(176, 196, 222, 0.6));  Pinkish to Bluish Gray */
    	}

    	/* Add keyframes for the animation */
			@keyframes changeGradient {
			  0% {
			    background-position: 0%;
			  }
			  100% {
			    background-position: 100%;
			  }
			}

	    .th, .td {
	    	border: 4px solid #dee2e6;
	    	padding: 5px;
	    	text-align: center;
	    }

	    @keyframes pulse {
			  0%, 100% {
			    transform: scale(0.8);
			  }
			  50% {
			    transform: scale(1);
			  }
			}

			.pulsating-text {
			  animation: pulse 2s infinite; /* 2s duration, infinite loop */
			  color: #000;
			}

	    .productimage {
	    	height: 200px;
				width: auto;
				transition: transform 0.3s ease-in-out;
	    }

	    .productimage:hover {
			  transform: scale(1.1);
			}

	    .add-to-cart-btn {
	      background-color: goldenrod;
	      color: #ffffff;
	      border: none;
	      padding: 5px 9px;
	      cursor: pointer;
	      border-radius: 10px;
	    }

	    .add-to-cart-btn:hover {
	      background-color: darkgoldenrod;
	      box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
	    }

	    #cart-icon {
	      position: fixed;
	      top: 130px;
	      right: 20px;
	      background-color: goldenrod;
	      color: #ffffff;
	      padding: 8px 12px;
	      border-radius: 50px;
	      cursor: pointer;
	    }

	    #cart-icon:hover {
	    	box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
	    }

	    #cart-dropdown {
	      display: none;
	      position: fixed;
	      top: 150px;
	      right: 20px;
	      background-color: #ffffff;
	      border: 1px solid #ccc;
	      padding: 10px;
	      max-height: 200px;
	      overflow-y: auto;
	      z-index: 1000;
	    }

	    #send-to-email-btn {
	      background-color: goldenrod;
	      color: #ffffff;
	      border: none;
	      padding: 8px 12px;
	      margin-top: 10px;
	      cursor: pointer;
	    }

	    #send-to-email-btn:hover {
	      background-color: darkgoldenrod;
	    }

	    .sliding-option {
		    position: relative;
		    width: 200px; 
		    height: 200px; 
		    overflow: hidden;
		    display: flex;
  			transition: transform 0.3s ease-in-out;
		  }

		  .sliding-option img {
		    width: 100%;
		    height: auto;
		    position: absolute;
		    top: 0;
		    left: 0;
		    transition: transform 0.3s ease; 
		  }

		  .sliding-option img:nth-child(2) {
		    transform: translateX(100%); /* Initially position the second image outside the container */
		  }

			.color-circle {
			  width: 20px;
			  height: 20px;
			  border-radius: 50%;
			  margin: 0 5px;
			  cursor: pointer;
			  display: inline-block;
			}

			.color-circle.white:hover {
			  border: 2px solid #000; /* Add a border to indicate hover state */
			}

			.color-circle.black:hover {
			  border: 2px solid #fff; /* Add a border to indicate hover state */
			}

			.color-circle.white {
			  background-color: #fff;
			}

			.color-circle.black {
			  background-color: #000;
			}


	</style>
	<!-- End of Stylesheet -->

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
			<a class="navlinks nowActive" href="merchpage.php">Shop</a>

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

	<div class="overlay"> <!-- Controls the opacity of the container on top of the bg image-->
		<div class="container"> <!-- Container for the whole body of the merch store -->
			<div style="margin-top: 20vh;"> <!-- Display the logo -->
				<img class="img1" src="img/logo-resized.png">	
			</div>

			<div> <!-- Display some advertising -->
				<h1 style="opacity: 0; animation: fadeIn 2s ease forwards;" class="h1">
					FILL UP YOUR ARMORY WITH THESE ASTRAL ADORNMENTS FROM THE TOWER.</h1>
				<h1 style="font-size: 1.5vw; overflow: hidden;" class="h1 pulsating-text">
					AVAILABLE NOW FOR PRE-ORDER!
				</h1>
			</div>

			<div> <!-- Display the products -->
				<div class="flexcontainer">
					<table class="table">
						<!-- Inside the table body -->
						<tr>
						  <td class="td">Ascension Basic Tee</td>
						  <td class="td">
						    <div id="shirt-details"></div>
						    <img id="shirt-image" class="productimage" src="./img/Shoppage_tshirt2_white.png">
						    <!-- Add circles for color selection -->
						    <div class="color-circle white" data-color="white" onclick="selectShirtColor('white')"></div>
								<div class="color-circle black" data-color="black" onclick="selectShirtColor('black')"></div>

						  </td>
						  <td class="td">$20.00</td>
						  <td class="td">
						    <button class="add-to-cart-btn" onclick="addToCartWithColorSelection('Ascension Basic Tee', 20.00, getSelectedColor())">
						      Add to Scroll
						    </button>
						  </td>
						</tr>

						<tr>
							<td class="td">Ethereal Ascent Hoodie</td>
							<td class="td"><img class="productimage" src="img/Shoppage_hoodie.png"></td>
							<td class="td">$20.00</td>
        					<td class="td"><button class="add-to-cart-btn" onclick="addToCart('Zenith Threads: Crestfall Canvas Tee', 20.00)">Add to Scroll</button></td>
						</tr>

						<tr>
							<td class="td">Zenith Threads Crystal Tee</td>
							<td class="td"><img class="productimage" src="img/Shoppage_tshirt1.png"></td>
							<td class="td">$20.00</td>
        					<td class="td"><button class="add-to-cart-btn" onclick="addToCart('Ethereal Ascent Hoodie', 20.00)">Add to Scroll</button></td>
						</tr>
					</table>
					<div id="cart-icon" onclick="toggleCart()">My Scroll <span id="cart-count">0</span></div>

					<div id="cart-dropdown">
						<div id="send-to-email-btn" onclick="sendToEmail()">Send summary to my Email</div>
					    <ul id="cart-items-list"></ul>
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

	<!-- Script for the Cart -->
	<script type="text/javascript">
    let cartCount = 0;
    let cartItems = [];
    let previousCartState = '';

    function addToCart(product, price) {
      cartCount++;
      updateCartCount();
      
      // Add item to cart
      cartItems.push({ product, price });
      
      // Update the cart dropdown
      updateCartDropdown();
      
      alert(`Added ${product} to the cart. Price: $${price}`);
    }

    function updateCartCount() {
      document.getElementById('cart-count').textContent = cartCount;
    }

    function updateCartDropdown() {
      const cartItemsList = document.getElementById('cart-items-list');
      cartItemsList.innerHTML = '';

      if (cartItems.length === 0) {
        cartItemsList.innerHTML = '<li>Cart is empty.</li>';
      } else {
        cartItems.forEach((item, index) => {
            const li = document.createElement('li');
            li.textContent = `${item.product} - $${item.price.toFixed(2)}`;

            // Add a "Remove" button
            const removeButton = document.createElement('button');
            removeButton.textContent = 'Remove';
            removeButton.addEventListener('click', () => removeItemFromCart(index)); // Call removeItemFromCart with the index

            li.appendChild(removeButton);
            cartItemsList.appendChild(li);
        });
      }
      // Add a "Clear Cart" button
		  const clearCartButton = document.createElement('button');
		  clearCartButton.textContent = 'Clear Cart';
		  clearCartButton.onclick = () => clearCart();
		  cartItemsList.appendChild(clearCartButton);
    }

    // Function to set up event handlers after modifying the cart dropdown
		function setupCartDropdownHandlers() {
		  updateCartDropdown();
		}

    function removeItemFromCart(index) {
		  // Remove the item from the cartItems array based on the index
      const removedItem = cartItems.splice(index, 1)[0];

      // Update the cart count and dropdown
      cartCount--;
      updateCartCount();
      updateCartDropdown();

      alert(`Removed ${removedItem.product} from the cart.`);
		}

    function toggleCart() {
      const cartDropdown = document.getElementById('cart-dropdown');
      cartDropdown.style.display = cartDropdown.style.display === 'block' ? 'none' : 'block';
    }

    function sendToEmail() {
      const cartDropdown = document.getElementById('cart-dropdown');

		  // Save the current content of the cart dropdown
		  const previousContent = cartDropdown.innerHTML;

		  // Check if the cart is not empty
		  if (cartItems.length > 0) {
		    // Generate a summary message with item details
		    const emailSummary = cartItems.map(item => `${item.product} - $${item.price.toFixed(2)}`).join('<br>');
		    cartDropdown.innerHTML = `<p>Order summary:</p>${emailSummary}`;

		    // Add a "Back" button to return to the previous state
		    const backButton = document.createElement('button');
		    backButton.textContent = 'Back';
		    backButton.onclick = () => {
		      cartDropdown.innerHTML = previousContent; // Restore previous content
		      setupCartDropdownHandlers(); // Reapply event handlers
		    };
		    cartDropdown.appendChild(backButton);
		  } else {
		    // Display a message if the cart is empty
		    cartDropdown.innerHTML = '<p>Your cart is empty. Add items before sending a summary.</p>';
		  }
    }

    function clearCart() {
		  // Clear all items from the cart
		  cartCount = 0;
		  cartItems = [];
		  updateCartCount();
		  updateCartDropdown();
		}

    function backToCart() {
      const cartDropdown = document.getElementById('cart-dropdown');
      
      // Restore the previous state
      cartDropdown.innerHTML = previousCartState;
    }

  </script>
	<!-- End of script -->

	<!-- JS for Color Selection -->
	<script type="text/javascript">
		// Function to add to cart with color selection
		function addToCartWithColorSelection(product, price) {
		  // Get the selected color
		  const selectedColor = getSelectedColor();

		  // Add the item to the cart
		  addToCart(`${product} - ${selectedColor}`, price);
		}

		// Function to handle shirt color selection
		function selectShirtColor(color) {
		    // Remove 'active' class from all color circles
		    document.querySelectorAll('.color-circle').forEach(circle => circle.classList.remove('active'));

		    // Add 'active' class to the selected color circle
		    const selectedColorElement = document.querySelector(`.color-circle.${color}`);
		    if (selectedColorElement) {
		        selectedColorElement.classList.add('active');
		    }

		    // Update shirt details and image
		    showShirtDetails(color);
		    updateShirtImage(color);
		}

		// Function to update the shirt image based on color selection
		function updateShirtImage(color) {
		  const shirtImage = document.getElementById('shirt-image');
		  // Update the image source based on the selected color
		  shirtImage.src = `./img/Shoppage_tshirt2_${color}.png`;
		}

		// Function to show shirt details based on color selection
		function showShirtDetails(color) {
		  const detailsElement = document.getElementById('shirt-details');

		  // Set details and image based on the color
		  if (color === 'white') {
		    detailsElement.textContent = '';
		  } else if (color === 'black') {
		    detailsElement.textContent = '';
		  }
		}

	  // Function to get the selected color
		function getSelectedColor() {
		    const selectedColorElement = document.querySelector('.color-circle.active');
		    return selectedColorElement ? selectedColorElement.dataset.color : 'white'; // Default color is white
		}
	</script>
	
</body>
</html>