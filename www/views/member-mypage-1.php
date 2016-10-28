<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page module-content"; ?>
<?php require "part/sitemap.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<div>
	<a href="member-mypage.php">
	<img src="<?php echo $config["imageDir"]; ?>/part/content/news/notice/mypage-1.png" alt="detail">
	</a>
</div>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>
