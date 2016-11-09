<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page module-content"; ?>
<?php require "part/sitemap.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>

<img src="<?php echo $config["imageDir"]; ?>/part/content/introduce/people/tree.jpg" alt="">
<div class="next-part-30">
<table class="table-primary">
	<col width="20%">
	<col width="10%">
	<col width="10%">
	<col width="*">
	<thead>
	<tr>
		<td>부서 명</td>
		<td>담당자</td>
		<td>전화번호<br>032)835-</td>
		<td>주요 담당 업무</td>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td style="text-align: left">창업지원단장</td>
		<td>정영식</td>
		<td>9665</td>
		<td style="text-align: left">창업선도대학 육성사업 업무 총괄</td>
	</tr>
	<tr>
		<td style="text-align: left">창업지원부단장</td>
		<td>김기준</td>
		<td>9666</td>
		<td style="text-align: left">창업선도대학 육성사업 운영 전반</td>
	</tr>
	<tr>
		<td style="text-align: left">창업지원단 행정실장</td>
		<td>임송희</td>
		<td>9667</td>
		<td style="text-align: left">창업선도대학 육성사업 실무 총괄</td>
	</tr>
	<tr>
		<td rowspan="2" style="text-align: left">운영지원팀</td>
		<td>서한나</td>
		<td>9669</td>
		<td rowspan="2" style="text-align: left">창업지원단 예·결산, 인사, 행정 업무 - 규정 및 운영위원회 관리 - 인사 및 직원 복지 관리 - 예산 집행 관리 (예·결산) - 대학정보공시, 교수업적평가 관리 - 기자재 관리 - 일반 행정 지원 등</td>
	</tr>
	<tr>
		<td>이주원</td>
		<td>9687</td>
	</tr>
	<tr>
		<td rowspan="2" style="text-align: left">창업확산팀</td>
		<td>장해선</td>
		<td>9642</td>
		<td rowspan="2" style="text-align: left">대학 내·외 창업생태계 조성 및 창업 교육 업무 - 창업강좌 및 창업동아리 운영 - 창업경진대회, 창업한마당투어 - 창업친화적 학제구축 - 청소년 연계 창업 캠프 운영, 비즈쿨 관련 <br> - 창업서포터즈 및 INU 리더스 관리</td>
	</tr>
	<tr>
		<td>차우림</td>
		<td>9644</td>
	</tr>
	<tr>
		<td rowspan="5" style="text-align: left">사업화지원팀</td>
		<td>유다올</td>
		<td>9670</td>
		<td rowspan="5" style="text-align: left">창업아이템사업화 프로그램 - (예비)창업자 발굴 - 선정평가 및 추천 - 시제품제작 지원 - 정산 및 사후관리 - 창업사업화 후속 연계 지원 </td>
	</tr>
	<tr>
		<td>김수진</td>
		<td>9643</td>
	</tr>
	<tr>
		<td>최병조</td>
		<td>4184</td>
	</tr>
	<tr>
		<td>김민영</td>
		<td>4185</td>
	</tr>
	<tr>
		<td>이상문</td>
		<td>4186</td>
	</tr>
	<tr>
		<td rowspan="2" style="text-align: left">기업지원팀</td>
		<td>김태일</td>
		<td>9668</td>
		<td style="text-align: left">지역 거점 창업 활성화 자율프로그램 - 아이디어센터, 멘토링센터 운영 - 기술창업 투자활성화 - INU 글로벌 셀러 - 가족기업 후속 성장 지원</td>
	</tr>
	<tr>
		<td>홍승아</td>
		<td>9683</td>
		<td style="text-align: left">창업보육센터 입주기업 관리업무 - 경영·기술·자금·창업지원 - 기술사업화, 기술개발자금지원 - 창업보육센터 입주 관리</td>
	</tr>
	<tr>
		<td rowspan="2" style="text-align: left">SK청년비상팀</td>
		<td>백상흠</td>
		<td>9689</td>
		<td rowspan="2" style="text-align: left">SK청년비상프로그램<br> - 창업강좌 및 창업동아리 운영 - 창업경진대회</td>
	</tr>
	<tr>
		<td>박지영</td>
		<td>9686</td>
	</tr>
	</tbody>
</table>
</div>


<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>
