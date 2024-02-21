/* Responsive Navbar JS */
document.addEventListener("DOMContentLoaded", function () {
	// Get the needed elements in the navbar
	const toggle = document.querySelector(".toggle");
	const menu = document.getElementById("myNav");
	const menuIcon = toggle.querySelector("img"); // Gets the burger menu icon

	// Toggle the mobile menu
	function toggleMenu() {
	    if (menu.classList.contains("active")) {
	        menu.classList.remove("active");
	        menuIcon.src = './img/icons/burger-menu-med.png';
	        document.querySelectorAll(".navlinks").forEach(link => link.classList.remove("active"));
	        document.querySelectorAll(".drop-item").forEach(link => link.classList.remove("active"));
	    } else {
	        menu.classList.add("active");
	        menuIcon.src = './img/icons/close-button-small.png';
	        document.querySelectorAll(".navlinks").forEach(link => link.classList.add("active"));
	        document.querySelectorAll(".drop-item").forEach(link => link.classList.add("active"));
	    }
	}

	// Add the event listener
	toggle.addEventListener("click", toggleMenu, false);
});


/* Scroll Behavior JS */
document.addEventListener("DOMContentLoaded", function () {
	// When the user scrolls the page, execute myFunction
	window.onscroll = function() {myFunction()};

	// Get the header
	var header = document.getElementById("myHeader");
	let nav = document.getElementsByClassName("navlinks");
	var dropdown = document.getElementById("dropdown");
	let subnav = document.getElementsByClassName("drop-item");

	// Get the session username
	var user = sessionStorage.getItem('username');

	// Get the values for userDash, login_button, and logout_link
	var userDash = document.getElementById("user");
	var logout_link = document.getElementById("logout-link");
	var login_button = document.getElementById("login-text");

	// Get the offset position of the navbar
	var sticky = header.offsetTop;

	// Add the solid class to the header when you reach its scroll position. Remove "solid" when you leave the scroll position
	function myFunction() {

		if (window.pageYOffset > sticky) {
	    	header.classList.add("solid");
	    	dropdown.classList.add("solid");

	    	if (userDash !== null) {
			    userDash.classList.add("color");
			    logout_link.classList.add("color");
			} else if (login_button !== null) {
			    login_button.classList.add("color");
			}

	    	for (x = 0; x < nav.length; x++) {
	    		nav[x].classList.add("color-change");
	    	}

	    	for (y = 0; y < subnav.length; y++) {
	    		subnav[y].classList.add("color-change");
	    	}

		} else {
	    	header.classList.remove("solid");
	    	dropdown.classList.remove("solid");

	    	if (userDash !== null) {
			    userDash.classList.remove("color");
			    logout_link.classList.remove("color");
			} else if (login_button !== null) {
			    login_button.classList.remove("color");
			}

	    	for (x = 0; x < nav.length; x++) {
	    		nav[x].classList.remove("color-change");
	    	}

	    	for (y = 0; y < subnav.length; y++) {
	    		subnav[y].classList.remove("color-change");
	    	}
		}
	}
});