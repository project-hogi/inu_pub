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
			<span class="under-line">일반인</span>
		</strong><br>
		<strong>
			<span class="under-line">실천창업강좌</span>
		</strong><br>
		<span class="type-block">
			<span class="under-line">소개합니다.</span>
		</span>
		<span class="icon-board"></span>
	</h3>
	<h4 class="page-pre first-letter">
		<span class="first">인</span>천대학교 창업지원단에서 대학생들의 창업마인드를 고취시키고 학생창업이 활성화를 위한 창업강좌를	소개하고 실천방안 및 활성화방안을 안내합니다.
	</h4>
	<h5 class="point-title">
		운영목표
	</h5>
	<p>
		일반인 실전창업강좌를 창업 진행 단계별로 구분 운영하여 본인의 창업수준에 맞는 강좌를 수강할 수 있도록 하고, 이론 강의보다는 개인별 또는 그룹별 맞춤형 멘토링 위주로 진행하여 고도화된 아이템 개발 및 사업 진행이 가능할 수 있도록 지원하고자 함.<br>
		또한, 인천대학교의 특화산업인 물류 및 유통분야의 특별강좌를 개설하여 지역 산업발전에 이바지함은 물론 우수한 창업자를 발굴 및 육성	하고자 함
	</p>
	<h5 class="point-title">수강생모집</h5>
	<div class="design-box has-side">
		<div class="side-title">
			<span>
				일반인<br>
				실천창업<br>
				강좌<br>
				홍보
			</span>
		</div>
		<div class="main-content">
			<table class="table-design-box">
				<col width="15%">
				<col width="35%">
				<col width="15%">
				<col width="35%">
				<thead>
					<tr>
						<th colspan="2" bgcolor="#27567d">대상</th>
						<th colspan="2" bgcolor="#ff5a6c">홍보방안</th>
					</tr>
				</thead>
				<tbody>
				<tr>
					<th>교내</th>
					<td>
						<ul>
							<li>ㆍ인천대학교 학생</li>
							<li>ㆍ창업동아리</li>
							<li>ㆍ예비창업자 등</li>
						</ul>
					</td>
					<th>온라인</th>
					<td>
						<ul>
							<li>ㆍ홈페이지 공고</li>
							<li>ㆍ사업자 풀을 활용한 메일링</li>
						</ul>
					</td>
				</tr>
				<tr>
					<th>교외</th>
					<td>
						<ul>
							<li>ㆍ인천대학교 창업지원단</li>
						</ul>
						<p>주변 창업클러스터 내부</p>
						<p>유관기관</p>
					</td>
					<th>오프라인</th>
					<td>
						<ul>
							<li>ㆍ홍보포스터 및 안내지 배포</li>
							<li>ㆍ현수막 홍보</li>
							<li>ㆍ전년도 교육생을 통한 바이럴홍보</li>
						</ul>
					</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
	<h5 class="point-title">교육진행</h5>
	<ul class="list-style doted">
		<li>강사풀을 멘토풀로 교차 운영하여 교육생의 수요가 있을 때 즉시 대응하여 지원</li>
		<li>경쟁력있는 사업계획서 작성을 위하여 다양한 후속 지원 프로그램 연계</li>
		<li>수업참여도의 향상을 위하여 교육서비스의 질을 높임</li>
	</ul>
	<h5 class="point-title">지원로드맵</h5>
	<div class="design-box">
		<div class="main-content">
			<table class="table-design-box road-map">
				<col width="25%">
				<col width="25%">
				<col width="25%">
				<col width="25%">
				<thead>
					<tr>
						<th bgcolor="#0abccd">1단계: 사업준비</th>
						<th bgcolor="#27567d">2단계:시제품 설계</th>
						<th bgcolor="#ff5a6c">3단계:시제품 개발</th>
						<th bgcolor="#dedede"></th>
					</tr>
				</thead>
				<tbody class="next-icon">
					<tr>
						<td>창업아이디어 발굴</td>
						<td colspan="2">교육생 지원(창업기업뿌리가꾸기 연계)</td>
						<td>창업아이템사업화<br>
							지원사업 연계</td>
					</tr>
					<tr>
						<td>창업아이디어 상담 및<br>
							사업화 전략 멘토링</td>
						<td>시제품개발 및<br>
							시장분석 지원</td>
						<td>시제품개발 및<br>
							사업화전략 수립</td>
						<td>유관기관 창업지원<br>
							프로그램 연계</td>
					</tr>
					<tr>
						<td colspan="3">특허, 실용방안 등 지식재산권리화 지원</td>
						<td>직접 사업화 기술이전<br>
							수요처 발굴</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- /.push-left -->
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>
