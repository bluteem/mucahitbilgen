        <script>
			// JavaScript to hide the loading screen and display the main content once all resources are loaded
			window.addEventListener('load', function () {
				// Select the loading screen and main content elements
				var loadingScreen = document.querySelector('.loading-screen');
				var mainContent = document.querySelector('.page-content');

				// Hide the loading screen
				loadingScreen.style.display = 'none';
				// Show the main content
				mainContent.classList.remove('hidden');
			});

			function toggleMenu() {
				var menu = document.getElementById("offCanvasMenu");
				var menuBtn = document.getElementById("menuBtn");
				menu.classList.toggle("open");
				menuBtn.classList.toggle("open");
			}

			// JavaScript for Scroll Up Button
			window.onscroll = function () {
				scrollFunction();
			};

			function scrollFunction() {
				var scrollButton = document.getElementById("scrollButton");
				if (document.documentElement.scrollTop > 20) {
					scrollButton.classList.remove("hidden");
				} else {
					scrollButton.classList.add("hidden");
				}
			}

			function scrollToTop() {
				window.scrollTo({
					top: 0,
					behavior: "smooth",
				});
			}

			// Hide off-canvas menu when navbar item is clicked on small screens
			var navLinks = document.querySelectorAll("#menuLinks a");
			navLinks.forEach(function (navLink) {
				navLink.addEventListener("click", function () {
					var menu = document.getElementById("offCanvasMenu");
					var menuBtn = document.getElementById("menuBtn");
					if (window.innerWidth < 768) {
						menu.classList.remove("open");
						menuBtn.classList.remove("open");
					}
				});
			});
		</script>