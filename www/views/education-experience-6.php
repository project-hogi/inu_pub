<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page module-content"; ?>
<?php require "part/sitemap.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<div class="bizcool boomup">
	<div class="pre-box">
		<a href="education-experience-6-1.php">
			<h3 class="biz-tit"><img src="<?php echo $config["imageDir"]; ?>/part/content/education/global-1-h3.png"><span class="sr-only">글로벌<strong>셀러</strong></span></h3>
			<p>인천대학교 창업지원단에서<br>
				글로벌창업 프로젝트의 하나로 글로벌셀러<br>
				프로그램을 실시합니다.</p>
			<span class="btn btn-detail"><span class="icon-detail"></span>자세히보기</span>
		</a>
	</div>
	<div class="img-box"><img src="<?php echo $config["imageDir"]; ?>/part/content/education/global-1.jpg" alt="">
		<span class="text">
			<img src="<?php echo $config["imageDir"]; ?>/part/content/education/bizcool-1-1.png" alt="">
			<span class="sr-only">01</span>
		</span>
	</div>
	<div class="img-box"><img src="<?php echo $config["imageDir"]; ?>/part/content/education/global-2.jpg" alt="">
		<span class="text">
			<img src="<?php echo $config["imageDir"]; ?>/part/content/education/bizcool-2-1.png" alt="">
			<span class="sr-only">02</span>
		</span>
	</div>
	<div class="pre-box">
		<a href="education-experience-6-2.php">
			<h3 class="biz-tit"><img src="<?php echo $config["imageDir"]; ?>/part/content/education/global-2-h3.png"><span class="sr-only">프론<strong>티어</strong></span></h3>
			<p>인천대학교 및 인천 지역 대학생을<br>
				대상으로 INU Startup Frontier 선발대회를<br>
				실시합니다.</p>
			<span class="btn btn-detail"><span class="icon-detail"></span>자세히보기</span>
		</a>
	</div>
</div>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>
