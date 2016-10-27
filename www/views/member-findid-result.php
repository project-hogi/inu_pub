<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page module-content"; ?>
<?php require "part/sitemap.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<div class="board-title list-type">
	<strong>회원님께서 분실하신 아이디 정보입니다.</strong>
</div>
<div class="find-result id">
	<div>
		<p class="pre-text"><strong class="point underline">홍길동</strong> 님의 아이디는 <span class="point underline">member21</span> 입니다.</p>
		<div class="btn-box next-part-20">
			<button type="button" class="btn btn-certify on">비밀번호찾기</button>
			<button type="button" class="btn btn-certify">로그인</button>
		</div>
	</div>
</div>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>
