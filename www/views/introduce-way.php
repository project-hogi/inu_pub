<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page module-content"; ?>
<?php require "part/sitemap.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<div class="map-area">
	<img src="<?php echo $config["imageDir"]; ?>/part/content/introduce/way/map.jpg" alt="vision mission stratege effect 차트">
</div>
<div class="push-left way">
	<div class="content-left-title">
		<h3 class="way-title">
		<span class="sr-only">
			<span class="point">미래</span>를 향한 첫 발걸음<br>인천대 창업지원단!
		</span>
		</h3>
	</div>
	<ul class="way-list">
		<li>
			<span class="left blue"><span>지하철</span></span>
			<p>인천 1호선 테크노파크역 하차<br>
				4번출구(도보 5분)</p>
		</li>
		<li>
			<span class="left pink"><span>버스</span></span>
			<p>6번(인천대 미래관 하차)<br>
				6-2, 909(테크노파크역 하차)</p>
		</li>
		<li>
			<span class="left orange"><span>주소</span></span>
			<p>인천광역시 연수구 갯벌로 12(송도동, 인천테크노파크)<br>
				인천대학교 미추홀캠퍼스 A동 504호<br>
				연락처 : 032-835-9669, 9687</p>
		</li>
	</ul>
</div>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>
