<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page module-content"; ?>
<?php require "part/sitemap.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>

<table class="table-history table-striped">
	<col width="17.8%">
	<col width="*">

	<tbody>
	<tr>
		<th><img src="<?php echo $config["imageDir"]; ?>/part/content/introduce/history/2010.png" alt=""></th>
		<td>
			<ul>
				<li><strong>03.</strong>인천대학교, 인천전문대 통합에 따른</li>
				<li><strong>03.</strong>송도 및 제물포 창업보육센터 운영</li>
			</ul>
		</td>
	</tr>
	<tr>
		<th><img src="<?php echo $config["imageDir"]; ?>/part/content/introduce/history/2011.png" alt=""></th>
		<td>
			<ul>
				<li><strong>02.</strong>중소기업청 창업선도대학육성사업 주관기관 선정</li>
				<li><strong>03.</strong>창업지원단 정영식 단장 취임</li>
				<li><strong>04.</strong>창업보육센터 운영평가 (S등급)</li>
			</ul>
		</td>
	</tr>
	<tr>
		<th><img src="<?php echo $config["imageDir"]; ?>/part/content/introduce/history/2012.png" alt=""></th>
		<td>
			<ul>
				<li><strong>03.</strong> 2012년 창업선도대학육성사업 (일반형) 선정</li>
			</ul>
		</td>
	</tr>
	<tr>
		<th><img src="<?php echo $config["imageDir"]; ?>/part/content/introduce/history/2013.png" alt=""></th>
		<td>
			<ul>
				<li><strong>03.</strong> 2013년 창업선도대학육성사업 (일반형) 선정</li>
				<li><strong>08.</strong> 인천대학교 미추홀캠퍼스(미추홀타워 별관 A동)로 이전</li>
			</ul>
		</td>
	</tr>
	<tr>
		<th><img src="<?php echo $config["imageDir"]; ?>/part/content/introduce/history/2014.png" alt=""></th>
		<td>
			<ul>
				<li><strong>03.</strong> 2014년 “사관학교식” 창업선도대학 선정</li>
				<li><strong>06.</strong> 창업자 입소공간 및 창업다락 개소</li>
			</ul>
		</td>
	</tr>
	<tr>
		<th><img src="<?php echo $config["imageDir"]; ?>/part/content/introduce/history/2015.png" alt=""></th>
		<td>
			<ul>
				<li><strong>03.</strong> 2015년 창업선도대학육성사업 (거점형) 선정</li>
				<li><strong>12.</strong> SK청년비상프로그램 사업 선정</li>
			</ul>
		</td>
	</tr>
	<tr>
		<th><img src="<?php echo $config["imageDir"]; ?>/part/content/introduce/history/2016.png" alt=""></th>
		<td>
			<ul>
				<li><strong>03.</strong> 2016년 창업선도대학육성사업 (거점형) 선정</li>
				<li><strong>06.</strong> 학생창업공간 “두랩(Do! Lab)" 개소</li>
			</ul>
		</td>
	</tr>
	</tbody>

</table>

<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>
