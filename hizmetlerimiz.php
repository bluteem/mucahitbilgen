<!DOCTYPE html>
<html lang="tr">

<head>
	<?php include "google-scripts.php"; ?>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Hizmetlerimiz - SMMM Mücahit Bilgen</title>
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
			<div id="hizmetlerimiz" class="min-h-96 text-xl pt-32 mx-8 md:mx-12 mb-32">
				<h1 class="text-4xl font-bold mb-12 text-center">Hizmetlerimiz</h1>
				<div class="flex flex-wrap justify-center">
					<div class="flex-initial max-w-md rounded overflow-hidden shadow-lg m-4 my-4 bg-blue-100">
						<img class="w-full transition duration-300 transform hover:scale-110" src="images/01-muhasebe.jpg" alt="Card Image">
						<div class="px-6 py-4 bg-blue-100">
							<div class="font-bold text-xl my-2 min-h-14">Muhasebe ve Finansal Raporlama:</div>
							<p class="text-gray-700 text-base text-justify">
								Büromuz, işletmelerin günlük finansal işlemlerini kaydeder ve bu işlemleri doğru ve şeffaf bir şekilde raporlar.
							</p>
						</div>
					</div>
					<div class="flex-initial max-w-md rounded overflow-hidden shadow-lg m-4 my-4 bg-blue-100">
						<img class="w-full  transition duration-300 transform hover:scale-110" src="images/02-vergi.jpg" alt="Card Image">
						<div class="px-6 py-4 bg-blue-100">
							<div class="font-bold text-xl my-2 min-h-14">Vergi Danışmanlığı ve Beyannameleri:</div>
							<p class="text-gray-700 text-base text-justify">
								Vergi mevzuatı karmaşıktır ve sürekli değişkenlik gösterir. Mali müşavirlik büromuz, mükelleflerine vergi planlaması ve beyannameleri konusunda danışmanlık yapar ve vergi beyannamelerinin doğru ve zamanında hazırlanmasını sağlar.
							</p>
						</div>
					</div>
					<div class="flex-initial max-w-md rounded overflow-hidden shadow-lg m-4 my-4 bg-blue-100">
						<img class="w-full transition duration-300 transform hover:scale-110" src="images/03-mali.jpg" alt="Card Image">
						<div class="px-6 py-4 bg-blue-100">
							<div class="font-bold text-xl my-2 min-h-14">Mali Analiz ve Danışmanlık:</div>
							<p class="text-gray-700 text-base text-justify">
								Büromuz ihtiyaç halinde, işletmelerin finansal performansını analiz eder ve bu analizler doğrultusunda stratejik önerilerde bulunur. Bu sayede işletmeler, daha bilinçli finansal kararlar alabilirler.
							</p>
						</div>
					</div>
					<div class="flex-initial max-w-md rounded overflow-hidden shadow-lg m-4 my-4 bg-blue-100">
						<img class="w-full transition duration-300 transform hover:scale-110" src="images/04-denetim.jpg" alt="Card Image">
						<div class="px-6 py-4 bg-blue-100">
							<div class="font-bold text-xl my-2 min-h-14">Denetim Hizmetleri:</div>
							<p class="text-gray-700 text-base text-justify">
								İşletmelerin mali kayıtlarının ve raporlarının doğruluğu tarafımızca denetlenir. Bu hizmet, işletmelerin yasal uyumluluğunu ve finansal dürüstlüğünü sağlamaya yardımcı olur.
							</p>
						</div>
					</div>
					<div class="flex-initial max-w-md rounded overflow-hidden shadow-lg m-4 my-4 bg-blue-100">
						<img class="w-full transition duration-300 transform hover:scale-110" src="images/05-bordro.jpg" alt="Card Image">
						<div class="px-6 py-4 bg-blue-100">
							<div class="font-bold text-xl my-2 min-h-14">Bordro ve İnsan Kaynakları Hizmetleri:</div>
							<p class="text-gray-700 text-base text-justify">
								İşletmelerin çalışanlarının bordro işlemlerinin yürütülmesi ve insan kaynakları süreçlerinde destek sağlıyoruz.
							</p>
						</div>
					</div>
					<div class="flex-initial max-w-md rounded overflow-hidden shadow-lg m-4 my-4 bg-blue-100">
						<img class="w-full transition duration-300 transform hover:scale-110" src="images/06-yatirim.jpg" alt="Card Image">
						<div class="px-6 py-4 bg-blue-100">
							<div class="font-bold text-xl my-2 min-h-14">Yatırım Danışmanlığı:</div>
							<p class="text-gray-700 text-base text-justify">
								Büromuz, işletmelerin ve bireylerin yatırım kararlarını yönlendirmelerine yardımcı olur. Piyasa analizleri ve finansal öngörüler sunarak, doğru yatırım stratejileri geliştirilmesine katkıda bulunurlar.
							</p>
						</div>
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
	<?php include "footer.php"; ?>
	<?php include "custom-scripts.php"; ?>
	<script src="assets/lightbox2/js/lightbox-plus-jquery.min.js"></script>
</body>

</html>