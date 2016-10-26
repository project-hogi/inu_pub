<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page module-content"; ?>
<?php require "part/sitemap.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<div class="board-title list-type">
	<strong>본 입주신청은 사전신청으로 입주신청기간 중 담당자가 별도로  연락을 드리겠습니다.</strong>
</div>
<div class="board-title detail-type hidden">
	<strong>본 입주신청은 사전신청으로 입주신청기간 중 담당자가 별도로  연락을 드리겠습니다.</strong>
	<a href="#" class="btn-popup_close"><span class="sr-only">팝업창 닫기</span></a>
</div>
<form action="">
	<filedset>
		<table class="table-form table-hover">
			<tbody>
			<tr>
				<th>입주형태</th>
				<td>
					<input type="checkbox" id="check-1" class="form-control checkbox"><label for="check-1"></label><span class="check-tit">예비창업자</span>
					<input type="checkbox" id="check-2" class="form-control checkbox"><label for="check-2"></label><span class="check-tit">창업자</span></td>
			</tr>
			<tr>
				<th>회원명</th>
				<td><span>홍길동</span></td>
			</tr>
			<tr>
				<th>회원아이디</th>
				<td><span class="point-form">memver2016</span></td>
			</tr>
			<tr>
				<th>연락처1</th>
				<td><input type="text" class="form-control form-size-100"><span class="form-bar">-</span>
					<input type="text" class="form-control form-size-100"><span class="form-bar">-</span>
					<input type="text" class="form-control form-size-100"></td>
			</tr>
			<tr>
				<th>연락처2</th>
				<td><input type="text" class="form-control form-size-100"><span class="form-bar">-</span>
					<input type="text" class="form-control form-size-100"><span class="form-bar">-</span>
					<input type="text" class="form-control form-size-100"></td>
			</tr>
			<tr>
				<th>우편번호</th>
				<td>
					<input type="text" class="form-control form-size-100">
					<button type="button" class="btn btn-custom-style">우편번호</button>
				</td>
			</tr>
			<tr>
				<th>주소</th>
				<td>
					<input type="text" class="form-control form-size-100p">
					<input type="text" class="form-control form-size-100p" placeholder="상세주소 입력">
				</td>
			</tr>
			<tr>
				<th>이메일</th>
				<td>
					<input type="text" class="form-control form-size-160"><span class="form-mail">@</span>
					<input type="text" class="form-control form-size-160">
					<select name="" id="" class="form-control form-size-160">
						<option value="">직접입력</option>
						<option value="">Google.com</option>
						<option value="">Naver.com</option>
						<option value="">Daum.net</option>
					</select>
				</td>
			</tr>
			<tr>
				<th>홈페이지</th>
				<td>
					<input type="text" class="form-control form-size-525" placeholder="http://">
				</td>
			</tr>
			<tr>
				<th>개발(예정)품목</th>
				<td>
					<textarea name="" id="" cols="130" rows="3" class="form-control"></textarea>
				</td>
			</tr>
			<tr>
				<th>제품의 사용분야</th>
				<td>
					<input type="text" class="form-control form-size-525">
					<button type="button" class="btn btn-custom-style">입력</button>
					<p class="add-text">
						개인화서비스
						<button type="button" class="btn btn-delete"><span class="sr-only">지우기</span></button>
					</p>
					<p class="add-text">
						업무자동화서비스
						<button type="button" class="btn btn-delete"><span class="sr-only">지우기</span></button>
					</p>
				</td>
			</tr>
			<tr>
				<th>업종</th>
				<td>
					<input type="text" class="form-control form-size-525">
				</td>
			</tr>
			<tr>
				<th>입주 희망년도</th>
				<td>
					<label for=""><input type="text" class="form-control form-size-160"> <span class="small-font">년도</span></label>
				</td>
			</tr>
			<tr>
				<th>희망 사용면적</th>
				<td>
					<input type="text" class="form-control form-size-160">
					<button type="button" class="icon icon-delete"><span class="sr-only">지우기</span></button>
					<span class="small-font">m<sup>2</sup></span>
					<label for=""><input type="text" class="form-control form-size-40"> <span class="small-font">평</span></label>
				</td>
			</tr>
			</tbody>
		</table>
		<div class="form-buttom-group next-part-30">
			<button type="submit" class="btn btn-lg btn-primary">저장</button>
			<button type="submit" class="btn btn-lg btn-default">취소</button>
		</div>
	</filedset>
</form>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>
