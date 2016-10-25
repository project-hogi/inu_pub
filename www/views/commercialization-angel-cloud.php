<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page module-content"; ?>
<?php require "part/sitemap.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<div>
	<img src="<?php echo $config["imageDir"]; ?>/part/content/commercialization/angel-3-1.jpg" alt="금융 3.0 핀테크 혁명, 크라우드 펀딩!!!!, 후원형 크라우드 펀딩, 증권형 크라우드 펀딩, 대출형 크라우드 펀딩 (P2P)">
</div>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>
