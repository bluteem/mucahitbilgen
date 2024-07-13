<!DOCTYPE html>
<html lang="tr">

<head>
	<?php include "google-scripts.php"; ?>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>SMMM Mücahit Bilgen</title>
	<?php include "head.php"; ?>
</head>

<body class="bg-blue-200">

	<!-- Loading Screen -->
	<div class="loading-screen">
		<div class="loader"></div>
	</div>

	<!-- Page Content (Initially Hidden) -->
	<div class="page-content hidden">

		<?php include "navbar.php"; ?>

		<!-- Content Sections -->
		<main class="container mx-auto">
			<div id="anasayfa" class="h-screen flex items-center justify-center text-xl pt-32 mx-8 md:mx-12">
				<!-- Ana section -->
				<div class="absolute bg-white bg-opacity-50 h-screen w-full z-10"></div>
				<div class="z-20 text-center bg-black bg-opacity-70 mx-4 md:mx-12 px-6 py-12 text-gray-200 rounded-md">
					<h1 class="text-4xl font-bold mb-4 text-center">Büromuza <br> Hoşgeldiniz.</h1>
					<div class="text-center">
						<div class="w-32 border border-blue-800 inline-block"></div>
					</div>
				</div>
			</div>
		</main>

		<!-- Scroll Up Button -->
		<button onclick="scrollToTop()" id="scrollButton" class="hidden fixed bottom-6 right-6 bg-gray-800 text-white px-4 py-4 rounded-full shadow-md hover:bg-gray-700">
			<!-- Up Arrow SVG -->
			<svg fill="#fff" class="w-7 h-7" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.867 511.867" xml:space="preserve">
				<g>
					<g>
						<path d="M508.827,350.027L263.493,104.373c-4.267-4.053-10.88-4.053-15.147,0L3.12,350.027c-4.16,4.16-4.16,10.88,0,15.04
					l42.24,42.347c4.267,4.053,10.88,4.053,15.147,0L255.92,211.68l195.52,195.733c4.16,4.16,10.88,4.16,15.04,0l42.347-42.347
					C512.88,360.907,512.88,354.187,508.827,350.027z M459.013,384.8l-195.52-195.733c-4.16-4.16-10.88-4.16-15.04,0L52.933,384.8
					l-27.2-27.307L255.92,126.987l230.293,230.507L459.013,384.8z" />
					</g>
				</g>
			</svg>
		</button>

	</div>
	<?php include "custom-scripts.php"; ?>
</body>

</html>