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
			<span class="under-line">비즈쿨<span class="normal">IP리더</span></span>
		</strong><br>
		<span class="type-block">
			<span class="under-line">안내</span>
		</span>
		<span class="icon-ip"></span>
	</h3>
	<h5 class="point-title">
		지원대상
	</h5>
	<ul class="list-style doted">
		<li>인천지역 비즈쿨 학생 중 비즈쿨 담당교사의 추천을 받은 자 중 창업지원단의 자체 평가에 의해 교육생 선정</li>
	</ul>
	<h5 class="point-title">
		선정일정 및 인원
	</h5>
	<ul class="list-style doted">
		<li><strong>선정일정</strong> : 2016년 7월 중 선정</li>
		<li><strong>선정인원</strong> : 30명</li>
	</ul>
	<h5 class="point-title">
		지원내용 및 절차
	</h5>
	<ul class="list-style doted">
		<li>선정된 교육생을 대상으로 사전 교육 실시(사전 아이템 조사)</li>
		<li>사전 조사를 바탕으로 교육생이 시장 분석 보고서(1p 분량) 작성</li>
		<li>본 교육 3일 동안 무료 변리 출원서 작성 : 강사 및 보조강사 멘토링</li>
		<li>교육 마지막 날 도출된 특허 출원 신청서를 바탕으로 경진대회 진행</li>
		<li>우수출원서의 경우 자율프로그램 INU 아이디어센터 및 INU 멘토링센터와 연계하여 변리사를 통한 빠른 출원이 이루어질 수 있도록 도움</li>
	</ul>
	<div class="next-part-20">
		<img src="<?php echo $config["imageDir"]; ?>/part/content/education/biz-1-1.jpg" alt="인천지역 비즈쿨 고등학교">
	</div>
	<h5 class="point-title">
		세부교육 프로그램
	</h5>
	<table class="table-primary">
		<thead>
		<tr>
			<th></th>
			<th>1일차</th>
			<th>2일차</th>
			<th>3일차</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>07:00~08:00</td>
			<td rowspan="2">-</td>
			<td colspan="2">기상 및 운동</td>
		</tr>
		<tr>
			<td>08:00~09:00</td>
			<td colspan="2" bgcolor="#e7f6ea">아침식사</td>
		</tr>
		<tr>
			<td>09:00~10:00</td>
			<td>입교 및 오리엔테이션</td>
			<td rowspan="3">발명아이디어 시각화<br>(도면 및 도안그리기)</td>
			<td rowspan="3">아이디어경진대회</td>
		</tr>
		<tr>
			<td>10:00~11:00</td>
			<td rowspan="2">초청특강<br>(21세기 경쟁력, 발명과 창업)</td>
		</tr>
		<tr>
			<td>11:00~12:00</td>
		</tr>
		<tr>
			<td>12:00~13:00</td>
			<td colspan="3" bgcolor="#e7f6ea">점심식사</td>
		</tr>
		<tr>
			<td>13:00~14:00</td>
			<td rowspan="2">무료변리소개 및 아이디어 발상</td>
			<td rowspan="2">발명실습<br>(창의적 구조물    설계롤링볼!)</td>
			<td>수료식 및 시상</td>
		</tr>
		<tr>
			<td>14:00~15:00</td>
			<td rowspan="8">귀 가</td>
		</tr>
		<tr>
			<td>15:00~16:00</td>
			<td rowspan="3">발명아이디어<br>수렴화</td>
			<td rowspan="3">무료변리서식 작성1</td>
		</tr>
		<tr>
			<td>16:00~17:00</td>
		</tr>
		<tr>
			<td>17:00~18:00</td>
		</tr>

		<tr>
			<td>18:00~19:00</td>
			<td colspan="2" bgcolor="#e7f6ea">저녁식사</td>
		</tr>
		<tr>
			<td>19:00~20:00</td>
			<td rowspan="2">발명아이디어 멘토링<br>(아이디어확정)</td>
			<td rowspan="2">무료변리서식 작성 2<br>및 결과물 제작</td>
		</tr>
		<tr>
			<td>20:00~21:00</td>
		</tr>
		<tr>
			<td>21:00~22:00</td>
			<td colspan="2">취침</td>
		</tr>
		</tbody>
	</table>
</div>
<!-- /.push-left -->
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>
