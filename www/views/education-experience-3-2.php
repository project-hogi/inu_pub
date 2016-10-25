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
			<span class="under-line">비즈쿨</span>
		</strong><br>
		<strong>
			<span class="under-line">창업현장연수</span>
		</strong><br>
		<span class="type-block">
			<span class="under-line">안내</span>
		</span>
		<span class="icon-write"></span>
	</h3>
	<h5 class="point-title">
		지원대상
	</h5>
	<ul class="list-style doted">
		<li>인천지역 비즈쿨 고등학생</li>
		<li>창업보육센터 및 창업아이템사업화 지원사업 입주업체</li>
	</ul>
	<h5 class="point-title">
		선정일정 및 인원
	</h5>
	<ul class="list-style doted">
		<li>인천지역 비즈쿨 고등학교 교사의 연수생 추천</li>
		<li>창업보육센터 및 창업아이템사업화 입주업체 수요파악 후 면접을 통한 매칭</li>
	</ul>
	<h5 class="point-title">
		지원내용 및 절차
	</h5>
	<div>
		<img src="<?php echo $config["imageDir"]; ?>/part/content/education/biz-2-1.jpg" alt="인천지역 비즈쿨 고등학교 - 인천대학교 창업지원단 - 송도보육센터 창업아이템 사업화 입주업체">
	</div>

	<h5 class="point-title">
		지원내용
	</h5>

	<ul class="list-style doted">
		<li><strong>연수시간</strong> : 80시간 내외</li>
		<li><strong>연수인원</strong> : 10명</li>
		<li><strong>연수비용</strong> : 500,000원(정부지원금 50%, 대응자금 50%)</li>
		<li><strong>연수내용</strong> : 창업기업의 업무지원</li>
	</ul>

	<h5 class="point-title">
		지원절차
	</h5>
	<table class="table-primary">
		<thead>
		<tr>
			<th>일정</th>
			<th>내용</th>
			<th>비고</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td rowspan="2">2016. 6.</td>
			<td class="text-left">- 사업홍보<br>- 참여업체 모집<br>- 참여업체 요구사항 파악</td>
			<td>창업지원단</td>
		</tr>
		<tr>
			<td class="text-left">- 비즈쿨 추천의뢰 및 모집</td>
			<td>비즈쿨 고등학교</td>
		</tr>
		<tr>
			<td>2016. 7.</td>
			<td class="text-left">- 학생․입주기업간매칭 및 의견 수렴</td>
			<td>창업지원단</td>
		</tr>
		<tr>
			<td rowspan="3">2016 8.</td>
			<td class="text-left">- 오리엔테이션 및 현장학습 약정</td>
			<td>창업지원단</td>
		</tr>
		<tr>
			<td class="text-left">- 현장학습 실시</td>
			<td>입주업체</td>
		</tr>
		<tr>
			<td class="text-left">- 현장학습 종료 및 사후 관리<br>․ 현장학습 출석부 및 업무일지 제출<br>․ 현장학습 애로 및 건의사항 파악</td>
			<td>창업지원단</td>
		</tr>
		</tbody>
	</table>
</div>
<!-- /.push-left -->
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>
