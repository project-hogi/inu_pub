<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page module-content"; ?>
<?php require "part/sitemap.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>

<!-- Swiper -->
<div class="swiper-container">
	<ul class="swiper-wrapper">
		<li class="swiper-slide">Slide 1</li>
		<li class="swiper-slide">Slide 2</li>
		<li class="swiper-slide">Slide 3</li>
		<li class="swiper-slide">Slide 4</li>
		<li class="swiper-slide">Slide 5</li>
		<li class="swiper-slide">Slide 6</li>
		<li class="swiper-slide">Slide 7</li>
		<li class="swiper-slide">Slide 8</li>
		<li class="swiper-slide">Slide 9</li>
		<li class="swiper-slide">Slide 10</li>
	</ul>
	<!-- Add Pagination -->
	<div class="swiper-pagination"></div>
</div>


<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>
