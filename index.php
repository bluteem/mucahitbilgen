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
		<main>
			<div id="anasayfa" class="h-screen flex items-center justify-center text-xl bg-cover">
				<!-- Ana section -->
				<div class="absolute bg-white bg-opacity-50 h-screen w-full z-10"></div>
				<div class="container z-20 text-center bg-blue-100 bg-opacity-70 mx-8 md:mx-12 px-6 py-12 text-black rounded-md">
					<h1 class="text-4xl md:text-7xl mb-4 text-center ana-font"><span class="text-3xl md:text-5xl">Büromuza</span> <br> Hoşgeldiniz</h1>
					<div class="text-center">
						<div class="w-32 border border-black inline-block"></div>
					</div>
					<p class="mt-6">Muhasebe, finansal raporlama, vergi danışmanlığı, mali analiz, bordro ve insan kaynakları süreçleri ve yatırım danışmanlığı alanlarında çözüm odaklı hizmet anlayışıyla yanınızdayız.</p>
					
					<a href="/taslak/hizmetlerimiz" class="relative inline-block text-lg group mt-8">
						<span class="relative z-10 block px-8 py-4 overflow-hidden font-medium leading-tight text-gray-800 transition-colors duration-300 ease-out border-2 border-gray-900 rounded-lg group-hover:text-white">
						<span class="absolute inset-0 w-full h-full px-5 py-3 rounded-lg bg-gray-50"></span>
						<span class="absolute left-0 w-48 h-48 -ml-2 transition-all duration-300 origin-top-right -rotate-90 -translate-x-full translate-y-12 bg-gray-900 group-hover:-rotate-180 ease"></span>
						<span class="relative">Bilgi Al</span>
						</span>
						<span class="absolute bottom-0 right-0 w-full h-12 -mb-1 -mr-1 transition-all duration-200 ease-linear bg-gray-900 rounded-lg group-hover:mb-0 group-hover:mr-0" data-rounded="rounded-lg"></span>
					</a>
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