<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page module-content"; ?>
<?php require "part/sitemap.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
	<div class="bizcool boomup">
		<div class="pre-box">
			<a href="education-experience-5-1.php">
				<h3 class="biz-tit"><img src="<?php echo $config["imageDir"]; ?>/part/content/education/boomup-1-h3.png"><span class="sr-only">비즈쿨<strong>IP리더</strong></span></h3>
				<p>예비창업자 학생들이 관심 있는 분야의<br>
					CEO와 함께 소통할 수 있는 기회의 장을<br>
					마련하는 프로그램</p>
				<span class="btn btn-detail"><span class="icon-detail"></span>자세히보기</span>
			</a>
		</div>
		<div class="img-box"><img src="<?php echo $config["imageDir"]; ?>/part/content/education/boomup-1.jpg" alt="">
			<span class="text">
			<img src="<?php echo $config["imageDir"]; ?>/part/content/education/bizcool-1-1.png" alt="">
			<span class="sr-only">01</span>
		</span>
		</div>
		<div class="img-box"><img src="<?php echo $config["imageDir"]; ?>/part/content/education/boomup-2.jpg" alt="">
			<span class="text">
			<img src="<?php echo $config["imageDir"]; ?>/part/content/education/bizcool-2-1.png" alt="">
			<span class="sr-only">02</span>
		</span>
		</div>
		<div class="pre-box">
			<a href="education-experience-5-2.php">
				<h3 class="biz-tit"><img src="<?php echo $config["imageDir"]; ?>/part/content/education/boomup-2-h3.png"><span class="sr-only">비즈쿨<strong>드림콘서트</strong></span></h3>
				<p>창업게 관심 있는 학생 및 일반으로<br>
					파트를 구성, 해당 분야의 창업페스티벌<br>
					프로그램</p>
				<span class="btn btn-detail"><span class="icon-detail"></span>자세히보기</span>
			</a>
		</div>
	</div>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>