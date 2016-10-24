<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page module-content"; ?>
<?php require "part/sitemap.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<div class="bizcool">
	<div class="pre-box">
		<a href="education-experience-3-1.php">
			<h3 class="biz-tit"><img src="<?php echo $config["imageDir"]; ?>/part/content/education/bizcool-1-h3.png"><span class="sr-only">비즈쿨<strong>IP리더</strong></span></h3>
			<p>인천지역 비즈쿨 학생 중 비크줄 <br>
				담당교사의 추천을 받은 자 중 창업지원단의 <br>
				자체 평가에 의해 교육생 선정</p>
			<span class="btn btn-detail"><span class="icon-detail"></span>자세히보기</span>
		</a>
	</div>
	<div class="img-box"><img src="<?php echo $config["imageDir"]; ?>/part/content/education/bizcool-1.jpg" alt="">
		<span class="text">
			<img src="<?php echo $config["imageDir"]; ?>/part/content/education/bizcool-1-1.png" alt="">
			<span class="sr-only">01</span>
		</span>
	</div>
	<div class="pre-box">
		<a href="education-experience-3-2.php">
			<h3 class="biz-tit"><img src="<?php echo $config["imageDir"]; ?>/part/content/education/bizcool-2-h3.png"><span class="sr-only">비즈쿨<strong>드림콘서트</strong></span></h3>
			<p>비즈쿨 중·고등학교의<br>
				담당교사 대상으로 청년CEO 특강,<br>
				학생 창원지원 프로그램</p>
			<span class="btn btn-detail"><span class="icon-detail"></span>자세히보기</span>
		</a>
	</div>
	<div class="img-box"><img src="<?php echo $config["imageDir"]; ?>/part/content/education/bizcool-2.jpg" alt="">
		<span class="text">
			<img src="<?php echo $config["imageDir"]; ?>/part/content/education/bizcool-2-1.png" alt="">
			<span class="sr-only">02</span>
		</span>
	</div>
	<div class="pre-box">
		<a href="education-experience-3-3.php">
			<h3 class="biz-tit"><img src="<?php echo $config["imageDir"]; ?>/part/content/education/bizcool-3-h3.png"><span class="sr-only">비즈쿨<strong>창업현장연수</strong></span></h3>
			<p>인천지역 비즈쿨 고등학생,<br>
				창업보육센터 및 창업아니템 사업화 지원사원<br>
				입주업체 지원을 위한 프로그램</p>
			<span class="btn btn-detail"><span class="icon-detail"></span>자세히보기</span>
		</a>
	</div>
	<div class="img-box"><img src="<?php echo $config["imageDir"]; ?>/part/content/education/bizcool-3.jpg" alt="">
		<span class="text">
			<img src="<?php echo $config["imageDir"]; ?>/part/content/education/bizcool-3-1.png" alt="">
			<span class="sr-only">03</span>
		</span>
	</div>
</div>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>
