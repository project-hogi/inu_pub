<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page module-content"; ?>
<?php require "part/sitemap.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>

<div class="push-left">
	<h3 class="left-title fz34">
		<strong class="point-db">
			<span class="under-line">창업자<span class="normal">를 위한</span></span>
		</strong><br>
		<strong>
			<span class="under-line">지식재산<span class="normal">관리화</span></span>
		</strong><br>
		<span class="type-block">
			<span class="under-line">체계적 지원</span>
		</span>
		<span class="icon-building"></span>
	</h3>
	<h5 class="point-title">
		사업목적
	</h5>
	<ul class="list-style doted">
		<li>기술기반의 (예비)창업자의 창업아이디어와 핵심기술을 보호하고 권리화하여 안정적인 기술사업화 기반을 마련할 수 있도록
			지식재산권리화를 체계적으로 지원</li>
	</ul>
	<h5 class="point-title">
		지원내용 및 절차
	</h5>
	<ul class="list-style doted">
		<li><strong>지원대상</strong> : 창업아이디어 및 기술을 보유한 (예비)창업자
			<p>- 대학생, 비즈쿨, 일반인으로 인천대학교 창업지원단 프로그램에 참여한 예비창업자</p>
			<p>- 지역특화 유망기술(제조, 지식서비스)을 보유하고, 기술분야 전문가 멘토의 추천을 받은 3년 미만의 창업기업</p>
		<li><strong>진행절차</strong></li>
	</ul>

	<div class="design-box-2">
		<div class="main-content">
			<table class="table-design-box arrow-style">
				<col width="33.33%">
				<col width="33.33%">
				<col width="33.33%">
				<tbody>
				<tr>
					<th>발명신고서 제출</th>
					<th>선행기술조사</th>
					<th>발명인터뷰 실시</th>
				</tr>
				<tr>
					<td class="right">(예비·창업자→창업지원단)
						※ 月15일까지 접수</td>
					<td class="right">(창업지원단→특허사무소)</td>
					<td class="down">(예비·창업자↔창업지원단)
						※ 일시 및 장소 개별 안내</td>
				</tr>
				<tr>
					<td rowspan="2" class="th-style">지식재산권리화 지원</td>
					<th>심의 결과 보고</th>
					<th>지식재산권리화 심의위원회 개최</th>
				</tr>
				<tr>
					<td class="left">창업지원단</td>
					<td class="left">(창업지원단↔전문위원)</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
	<ul class="list-style doted next-part-10">
		<li><strong>발명신고서 접수 및 선행기술조사</strong>
			<p>- 발명신고서를 작성하여 창업지원단으로 접수</p>
			<p>- 접수된 발명신고서 권리유형에 따라 선행기술조사를 실시하여 기술의 신규성, 진보성, 산업적 이용가능성을 조사</p>
		</li>
		<li><strong>발명인터뷰 및 전문컨설팅 지원</strong>
			<p>- 변리사 또는 박사급 기술전문 인력을 통해 발명인터뷰를 실시</p>
			<p>- 기술성, 권리성, 시장성 검증과 기술요소를 구체화하고 지식재산권리화 범위를 결정하기 위한 전문컨설팅을 지원</p>
		</li>
		<li><strong>지식재산권리화 및 사업화 지원</strong>
			<p>- 인천대학교 창업지원단이 정한 수수료 지급 기준에 따라 비용을 지원하며, 지식재산 권리는 발명자에게 귀속</p>
			<p>- 우수한 지식재산에 대해 창업뿌리가꾸기 사업을 통해 사업화 지원 기회를 제공</p>
		</li>
	</ul>
	<h5 class="point-title">
		신청기간 및 방법
	</h5>
	<ul class="list-style doted">
		<li><strong>신청기간</strong> : 매달 1일 ~ 15일까지 접수</li>
		<li><strong>신청방법</strong> : 발명신고서 작성 후 제출(<a href="mailto:startup@inu.ac.kr" class="link-style">startup@inu.ac.kr</a>)</li>
	</ul>
	<h5 class="point-title">
		문의처
	</h5>
	<ul class="list-style doted">
		<li>인천대학교 창업지원단 기업지원팀(032-835-9668)</li>
	</ul>
</div>
<!-- /.push-left -->
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>
