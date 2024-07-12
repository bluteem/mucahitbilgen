<!DOCTYPE html>
<html lang="tr">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Sayfa Bulunumadı - Bandırma Deniz Oto Kurtarıcı Çekici - 7/24 Yol Yardım</title>
		<?php include "head.php"; ?>
	</head>
	<body class="bg-gray-200">

		<!-- Loading Screen -->
		<div class="loading-screen">
			<div class="loader"></div>
		</div>

		<!-- Page Content (Initially Hidden) -->
		<div class="page-content hidden">

			<!-- Content Sections -->
			<main>
				<div id="anasayfa" class="h-screen flex items-center justify-center text-xl bg-cover">
					<!-- Anasayfa section -->
					<div class="absolute bg-white bg-opacity-50 h-screen w-full z-10"></div>
					<div class="z-20 text-center bg-black bg-opacity-70 mx-4 md:mx-12 px-6 py-12 text-gray-200 rounded-md">
						<h1 class="text-4xl md:text-6xl font-bold mb-12">Böyle bir sayfa bulunamadı.</h1>
						<a href="/" class="inline-block text-2xl border rounded-md p-4 md:text-5xl text-green-600">Anasayfaya Git</a>
					</div>
				</div>
			</main>

		</div>
		
		<?php include "custom-scripts.php"; ?>
		<script src="assets/lightbox2/js/lightbox-plus-jquery.min.js"></script>
	</body>
</html>
