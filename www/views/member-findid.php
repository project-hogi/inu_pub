<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page module-content"; ?>
<?php require "part/sitemap.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<div class="certify-list">
	<ul>
		<li class="on">
			<a href="#">
				<div class="box-wrap"><span class="icon icon-phone"><span class="sr-only">휴대폰 아이콘</span></span>
					<p class="tit">휴대폰 인증<span class="point">확인</span></p>
					<p class="pre-text">휴대폰인증은 생년월일과<br>
						본인 명의의 휴대폰 정보를 이용한 주민등록<br>
						대체 인증 서비스입니다.</p>
					<div class="btn-box">
						<button type="button" class="btn btn-certify">휴대폰 인증</button>
					</div>
				</div>
			</a>
		</li>
		<li>
			<a href="#">
				<div class="box-wrap"><span class="icon icon-ipin"><span class="sr-only">ipin 아이콘</span></span>
					<p class="tit">I-PIN 인증<span class="point">확인</span></p>
					<p class="pre-text"><span class="point">I-PIN</span>은 주민등록번호 대체수단으로 회원님의<br>
						주민등록번호 대신 식별ID를 행정자치부로부터<br>
						발급받아 본인확인을  하는 서비스 입니다.</p>
					<div class="btn-box">
						<button type="button" class="btn btn-certify">I-PIN 인증</button>
					</div>
				</div>
			</a>
		</li>
	</ul>
</div>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>
