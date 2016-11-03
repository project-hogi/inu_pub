<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page module-content"; ?>
<?php require "part/sitemap.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<div class="push-left">
	<h3 class="left-title">
		<strong class="point-db">
			<span class="under-line">창업아이템<span class="normal">을</span></span>
		</strong><br>
		<strong>
			<span class="under-line">검증받을</span>
		</strong><br>
		<span class="type-block">
			<span class="under-line">기회!</span>
		</span>
		<span class="icon-down"></span>
	</h3>
	<h5 class="point-title">
		추진배경
	</h5>
	<ul class="list-style doted">

		<li>대학생들의 창의적인 아이디어를 발굴하고, 분야별 전문가들의 멘토링을 통해 구체적인 사업화 과정을 학생들이 직접 체험하도록 함으로써 학생들의 창업마인드 고취</li>
		<li>인천창조경제혁신센터와 공동주관으로 인천대학교, 인하대학교, 청운대학교 등 지역 대학과의 연합캠프를 진행함으로써 지역 창업 분위기 확산에 기여</li>
	</ul>
	<h5 class="point-title">
		지원대상
	</h5>

	<ul class="list-style doted">
		<li>인천 및 인천 인근 지역의 대학생</li>
		<li>대학 담당자 및 유관기관의 추천을 받은자</li>
	</ul>


	<h5 class="point-title">
		선정방식 및 인원
	</h5>
	<ul class="list-style doted">
		<li><strong>선정방식</strong> : 별도의 모집 공고를 통해 선정</li>
		<li><strong>선정인원</strong> : 30명</li>
	</ul>
	<h5 class="point-title">
		지원내용
	</h5>
	<ul class="list-style doted">
		<li>아이디어 창업특강 및 팀별 아이디어 경진대회</li>
		<li>한 가지 주제에 부합하는 아이디어 제안</li>
		<li>팀별 발표 시 외부심사위원 평가 및 현장투표 진행 및 시상</li>
	</ul>
	<h5 class="point-title">
		협력기관
	</h5>
	<ul class="list-style doted">
		<li><strong>인천대학교창업지원단</strong> : 인천지역 대학생 창업캠프 주관 및 총괄</li>
		<li><strong>인천창조경제혁신센터</strong> : 인천지역 대학생 창업캠프 공동 주관</li>
		<li><strong>인천지역 대학교</strong> : 홍보 및 모집 협조, 캠프 운영지원 등</li>
	</ul>
	<div class="next-part-30">
		<img src="<?php echo $config["imageDir"]; ?>/part/content/education/diagram-1.jpg" alt="인천지역 대학생 창업챔프">
	</div>
</div>
<!-- /.push-left -->
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>
