<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page module-content"; ?>
<?php require "part/sitemap.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<div class="member-finish">
	<div>
		<span class="icon icon-people">
			<span class="sr-only">휴대폰 아이콘</span>
		</span>
		<p class="tit next-part-20">
			인천대학교 창업지원단 <span class="point">회원가입</span>을 진심으로 축하합니다.
		</p>
		<p class="pre-text next-part-10">
			2016년 09월 21일 16시 38분에 회원가입이 완료 되었습니다.<br>
			<strong class="point underline">홍길동</strong> 님의 아이디는 <span class="point underline">member21</span> 입니다.
		</p>
		<div class="btn-box">
			<button type="button" class="btn btn-certify on">메인으로 이동</button>
			<button type="button" class="btn btn-certify">로그인</button>
		</div>
	</div>
</div>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>
