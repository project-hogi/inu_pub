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
			<span class="under-line">비즈쿨</span>
		</strong><br>
		<strong>
			<span class="under-line">드림콘서트</span>
		</strong><br>
		<span class="type-block">
			<span class="under-line">안내</span>
		</span>
		<span class="icon-shop"></span>
	</h3>
	<h5 class="point-title">
		지원대상
	</h5>
	<ul class="list-style doted">
		<li>비즈쿨 중ㆍ고등학교의 담당교사 신청 시 진행</li>
	</ul>
	<h5 class="point-title">
		지원내용
	</h5>
	<ul class="list-style doted">
		<li>비즈쿨 內 청년CEO 특강, 학생 창업지원 소개</li>
		<li>비즈쿨 창업지원 프로그램 연계(비즈쿨 IP리더, 비즈쿨 창업현장연수 등)</li>
	</ul>
	<div class="next-part-20">
		<img src="<?php echo $config["imageDir"]; ?>/part/content/education/biz-3-1.jpg" alt="인천대학교 창업지원단 비크쿨 드림콘서트">
	</div>

	<h5 class="point-title">
		지원절차
	</h5>

	<ul class="list-style doted">
		<li>각 학교당 최대 2회까지 지원 가능</li>
		<li>특강 분야는 비즈쿨 및 창업지원단 협의 하에 선정</li>
	</ul>
</div>
<!-- /.push-left -->
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>
