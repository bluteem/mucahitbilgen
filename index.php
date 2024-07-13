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
			<div id="hizmetlerimiz" class="min-h-96 text-xl pt-32 mx-8 md:mx-12">
				<h1 class="text-4xl font-bold mb-12 text-center">Hizmetlerimiz</h1>
				<div class="flex flex-wrap justify-center">
					<div class="flex-initial max-w-md rounded overflow-hidden shadow-lg m-4 my-4">
						<img class="w-full transition duration-300 transform hover:scale-110" src="images/01-muhasebe.jpg" alt="Card Image">
						<div class="px-6 py-4">
							<div class="font-bold text-xl my-2 min-h-14">Muhasebe ve Finansal Raporlama:</div>
							<p class="text-gray-700 text-base text-justify">
								Büromuz, işletmelerin günlük finansal işlemlerini kaydeder ve bu işlemleri doğru ve şeffaf bir şekilde raporlar.
							</p>
						</div>
					</div>
					<div class="flex-initial max-w-md rounded overflow-hidden shadow-lg m-4 my-4">
						<img class="w-full  transition duration-300 transform hover:scale-110" src="images/02-vergi.jpg" alt="Card Image">
						<div class="px-6 py-4">
							<div class="font-bold text-xl my-2 min-h-14">Vergi Danışmanlığı ve Beyannameleri:</div>
							<p class="text-gray-700 text-base text-justify">
								Vergi mevzuatı karmaşıktır ve sürekli değişkenlik gösterir. Mali müşavirlik büromuz, mükelleflerine vergi planlaması ve beyannameleri konusunda danışmanlık yapar ve vergi beyannamelerinin doğru ve zamanında hazırlanmasını sağlar.
							</p>
						</div>
					</div>
					<div class="flex-initial max-w-md rounded overflow-hidden shadow-lg m-4 my-4">
						<img class="w-full transition duration-300 transform hover:scale-110" src="images/03-mali.jpg" alt="Card Image">
						<div class="px-6 py-4">
							<div class="font-bold text-xl my-2 min-h-14">Mali Analiz ve Danışmanlık:</div>
							<p class="text-gray-700 text-base text-justify">
								Büromuz ihtiyaç halinde, işletmelerin finansal performansını analiz eder ve bu analizler doğrultusunda stratejik önerilerde bulunur. Bu sayede işletmeler, daha bilinçli finansal kararlar alabilirler.
							</p>
						</div>
					</div>
					<div class="flex-initial max-w-md rounded overflow-hidden shadow-lg m-4 my-4">
						<img class="w-full transition duration-300 transform hover:scale-110" src="images/04-denetim.jpg" alt="Card Image">
						<div class="px-6 py-4">
							<div class="font-bold text-xl my-2 min-h-14">Denetim Hizmetleri:</div>
							<p class="text-gray-700 text-base text-justify">
								İşletmelerin mali kayıtlarının ve raporlarının doğruluğu tarafımızca denetlenir. Bu hizmet, işletmelerin yasal uyumluluğunu ve finansal dürüstlüğünü sağlamaya yardımcı olur.
							</p>
						</div>
					</div>
					<div class="flex-initial max-w-md rounded overflow-hidden shadow-lg m-4 my-4">
						<img class="w-full transition duration-300 transform hover:scale-110" src="images/05-bordro.jpg" alt="Card Image">
						<div class="px-6 py-4">
							<div class="font-bold text-xl my-2 min-h-14">Bordro ve İnsan Kaynakları Hizmetleri:</div>
							<p class="text-gray-700 text-base text-justify">
								İşletmelerin çalışanlarının bordro işlemlerinin yürütülmesi ve insan kaynakları süreçlerinde destek sağlıyoruz.
							</p>
						</div>
					</div>
					<div class="flex-initial max-w-md rounded overflow-hidden shadow-lg m-4 my-4">
						<img class="w-full transition duration-300 transform hover:scale-110" src="images/06-yatirim.jpg" alt="Card Image">
						<div class="px-6 py-4">
							<div class="font-bold text-xl my-2 min-h-14">Yatırım Danışmanlığı:</div>
							<p class="text-gray-700 text-base text-justify">
								Büromuz, işletmelerin ve bireylerin yatırım kararlarını yönlendirmelerine yardımcı olur. Piyasa analizleri ve finansal öngörüler sunarak, doğru yatırım stratejileri geliştirilmesine katkıda bulunurlar.
							</p>
						</div>
					</div>
				</div>
			</div>

			<div id="iletisim" class="min-h-96 text-xl pt-32 mx-8 md:mx-12">
				<!-- İletişim section -->
				<h1 class="text-4xl font-bold mb-12 text-center">İletişim</h1>
				<div class="table w-full">
					<div class="table-row-group">
						<div class="table-row">
							<div class="table-cell pt-4 font-bold">Adres:</div>
							<div class="table-cell pl-6">İhsaniye Mahallesi İstiklal Caddesi No: 78/1</br>
								10200 Bandırma / Balıkesir</div>
						</div>
						<div class="table-row">
							<div class="table-cell pt-4 font-bold">Telefon:</div>
							<div class="table-cell pl-6">
								<a href="tel:+905337737532" class="block mb-2">+90 533 773 75 32</a>
								<a href="tel:+902667141330" class="block">+90 266 714 13 30</a>
							</div>
						</div>
						<div class="table-row">
							<div class="table-cell pt-4 font-bold">Faks:</div>
							<div class="table-cell pl-6">
								<a href="fax:+902667141331" class="block">+90 266 714 13 31</a>
							</div>
						</div>
						<div class="table-row">
							<div class="table-cell pt-4 font-bold">E-posta:</div>
							<div class="table-cell pl-6 overflow-auto">
								<a href="mailto:mcbilgen@hotmail.com">mcbilgen @ hotmail.com</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<div class="w-100 mt-10 border-t-8 border-gray-800 border-opacity-90">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d190.03268340885106!2d27.974492508768858!3d40.35292779069063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b5d3a721b1e87f%3A0x4576fde67a4687b3!2zxLBoc2FuaXllLCDEsHN0aWtsYWwgQ2QgTm86NzgsIDEwMjAwIEJhbmTEsXJtYS9CYWzEsWtlc2ly!5e0!3m2!1sen!2str!4v1720896176715!5m2!1sen!2str" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="h-96 w-full"></iframe>
		</div>

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