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
				<span class="under-line">창업<span class="normal">페스티벌</span></span>
			</strong><br>
			<span class="type-block">
			<span class="under-line">안내</span>
		</span>
			<span class="icon-document"></span>
		</h3>
		<h5 class="point-title">
			지원대상
		</h5>
		<ul class="list-style doted">
			<li>창업에 관심 있는 자는 누구나 참여 가능</li>
			<li>학생 및 일반인으로 파트를 구성하여 해당 분야의 창업페스티벌을 참가할 수 있도록 유도</li>
		</ul>
		<h5 class="point-title">
			지원내용 및 절차
		</h5>
		<div class="next-part-20">
			<img src="<?php echo $config["imageDir"]; ?>/part/content/education/boomup-2-1.jpg" alt="인천대학교 창업지원단 비크쿨 드림콘서트">
		</div>
		<h5 class="point-title">
			교내 기관과의 협력을 통한 인천대학교 창업 페스티벌
		</h5>
		<ul class="list-style doted">
			<li>공과대학, 공학교육혁신센터 등 학생들의 창업 수요가 많은 기관과의 협력을 통하여 교내 학생들에게 이슈가 될 수 있는 행사 진행</li>
			<li>취업경력개발센터와 협력하여 학생들의 취․창업분야의 진로 상담 기회 제공</li>
			<li>인천지방중소기업청, 인천창조경제혁신센터, 인천지식재산센터 등 유관기관과의 협력을 통한 지역 창업 페스티벌</li>
		</ul>
		<h5 class="point-title">
			주요 지원내용
		</h5>
		<ul class="list-style doted">
			<li>창업동아리 및 INU리더스 성과전시회</li>
			<li>캡스톤디자인 창업아이템 성과전시회</li>
			<li>진로결정 상담부스 운영(취․창업분야)</li>
			<li>창업지원 관련 멘토링 제공</li>
		</ul>
	</div>
	<!-- /.push-left -->
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>