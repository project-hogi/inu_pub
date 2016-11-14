<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page module-content"; ?>
<?php require "part/sitemap.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<div>
	<ul class="list-cloud">
		<li>
			<img src="<?php echo $config["imageDir"]; ?>/part/content/commercialization/angel-3-1.png" alt="금융 3.0 핀테크 혁명 크라우드 펀딩!!!!">
		</li>
		<li>
			<img src="<?php echo $config["imageDir"]; ?>/part/content/commercialization/angel-3-2.png" alt="후원형 크라우드 펀딩">
		</li>
		<li>
			<img src="<?php echo $config["imageDir"]; ?>/part/content/commercialization/angel-3-3.png" alt="증권형 크라우드 펀딩">
		</li>
		<li>
			<img src="<?php echo $config["imageDir"]; ?>/part/content/commercialization/angel-3-4.png" alt="">
		</li>
	</ul>
</div>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>
