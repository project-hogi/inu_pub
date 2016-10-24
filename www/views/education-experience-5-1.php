<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page module-content"; ?>
<?php require "part/sitemap.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
	<div class="push-left">
		<h3 class="left-title icon-write">
			<strong class="point-db">
				<span class="under-line">한마당 <span class="normal">투어</span></span>
			</strong><br>
			<span class="type-block">
			<span class="under-line">안내</span>
		</span>
			<span class="icon-world"></span>
		</h3>
		<h5 class="point-title">
			추진배경
		</h5>
		<ul class="list-style doted">
			<li>학생들이 관심 있는 분야의 CEO와 함께 소통할 수 있는 기회의 장 마련</li>
			<li>지원대상(참여대상)
				<p>- 인천지역 중·고등학생 및 인천대학교 학생</p>
				<p>- 이 외, 창업에 관심 있는 청년 누구나 참여 가능</p></li>
		</ul>
		<h5 class="point-title">
			지원내용 및 절차
		</h5>
		<ul class="list-style doted">
			<li>1차 청년창업한마당투어 지원 내용
				<p>- 공 통 : 청년CEO특강</p>
				<p>- 대학생 : 창업지원단 창업지원프로그램, 창업친화적 학사제도 소개, 학생창업자네트워킹</p>
				<p>- 비즈쿨 : 비즈쿨 맞춤형지원 프로그램 소개</p>
			</li>
			<li>2차 청년창업한마당투어 지원 내용
				<p>- 공 통 : 청년CEO특강, 창업기업 전시회</p>
				<p>- 대학생 : 학생창업자네트워킹</p>
				<p>- 비즈쿨 : 2016 비즈쿨 맞춤형지원 프로그램 우수 사례 발표</p>
			</li>
		</ul>
		<h5 class="point-title">
			지원절차
		</h5>
		<ul class="list-style doted">
			<li>별도의 지원형식은 없으며, 누구에게나 오픈된 이벤트 형식으로 청년창업활성화를 통해 창업 붐 확산에 기여</li>
		</ul>
		<div class="list-img-area next-part-10">
			<ul>
				<li><img src="<?php echo $config["imageDir"]; ?>/part/content/education/boomup-1-1.jpg" alt="한마당 투어 사진1"></li>
				<li><img src="<?php echo $config["imageDir"]; ?>/part/content/education/boomup-1-2.jpg" alt="한마당 투어 사진2"></li>
			</ul>
		</div>
	</div>
	<!-- /.push-left -->
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>