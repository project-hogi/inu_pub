<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page module-content"; ?>
<?php require "part/sitemap.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<div class="login-area">
	<div class="login-box">
		<img src="<?php echo $config["imageDir"]; ?>/part/layout-page/member-login.png" alt="Member login 창업에 대한 맞춤지원프로그램 인천대학교 창업지원단">
		<form action="" class="next-part-20">
			<fieldset>
					<input type="text" class="form-control login login-id" placeholder="아이디"><label for="" class="sr-only">아이디 입력창</label>
					<input type="password" class="form-control login login-pw" placeholder="비밀번호"><label for="" class="sr-only">비밀번호 입력창</label>
					<div class="next-part-10">
						<input type="checkbox" id="login-idsave-check" class="login-idsave-check"><label for="login-idsave-check"><span class="sr-only">아이디 저장 체크박스</span></label>
						<span class="label">아이디 저장</span>
					</div>
					<div class="btn-box next-part-30">
						<button type="submit" class="btn btn-login">로그인</button>
					</div>
			</fieldset>
		</form>
		<div class="login-menu next-part-10">
			<a href="#">회원가입</a>
			<a href="#">아이디 찾기</a>
			<a href="#">비밀번호 찾기 <span class="icon icon-question"></span></a>
		</div>
	</div>
</div>




<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>
