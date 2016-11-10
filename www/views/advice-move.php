<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page module-content"; ?>
<?php require "part/sitemap.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<div class="img-area">
	<img src="<?php echo $config["imageDir"]; ?>/part/content/advice/move/top-img.jpg" alt="vision mission stratege effect 차트">
</div>
<div class="push-left move">
	<div class="content-left-title">
		<h3 class="move-title">
		<span class="sr-only">
			<span class="point">스타트업</span>을 위한 프로그램 교육 상담전용코너</span>
		</h3>
	</div>
	<p class="move-text">본 상담코너는 인천대학교 창업지원단에서 창업자 및 예비창업자를 위하여 창업지원단 입주 및 창업지원단에서 스타트업을 위한 프로그램 교육에 대한 상담을 위한 전용 상담코너 입니다.<br>
		상담 신청 시 최대한 빠르고 성실함 답변을 해드리겠습니다.<br>
		많은 이용 바랍니다.</p>
	<div class="btn-box text-left next-part-30">
		<button type="button" href="#" class="btn btn-lg btn-join-form"><span class="icon icon-pencel"></span> 입주상담 신청</button>

	</div>
</div>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>
