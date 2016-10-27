<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page module-content"; ?>
<?php require "part/sitemap.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<div class="board-title list-type">
	<strong>설정하고자 하는 새로운 비밀전호를 입력해 주세요.</strong>
</div>
<div class="find-result pw">
	<form action="">
		<filedset>
			<table class="table-form table-hover">
				<tbody>
				<tr>
					<th>새로운 비밀번호</th>
					<td>
						<input type="password" class="form-control form-size-270"><label for="">(영문, 숫자, 특수문자 조합 8~20자리 이내)</label>
					</td>
				</tr>
				<tr>
					<th>새로운 비밀번호 확인</th>
					<td>
						<input type="password" class="form-control form-size-270"><label for=""> <span class="sr-only">비밀번호 확인 입력창</span></label>
					</td>
				</tr>
				</tbody>
			</table>
			<div class="btn-box next-part-20">
				<button type="button" class="btn btn-certify on">확인</button>
				<button type="button" class="btn btn-certify">취소</button>
			</div>
		</filedset>
	</form>
</div>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>
