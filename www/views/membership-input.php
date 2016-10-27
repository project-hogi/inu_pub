<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page module-content"; ?>
<?php require "part/sitemap.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<h3 class="member-title type2">기본정보 입력사항을 입력해주세요.</h3>
<form action="">
	<filedset>
		<table class="table-form table-hover">
			<tbody>
			<tr>
				<th>성명</th>
				<td><span>홍길동</span></td>
			</tr>
			<tr>
				<th>회원아이디</th>
				<td>
					<input type="text" class="form-control form-size-230">
					<button type="button" class="btn btn-custom-style">중복검사 </button>
					<label for="">영문, 숫자, 특수문자 혼합 6자 이상 16자 이내</label>
				</td>
			</tr>
			<tr>
				<th>비밀번호</th>
				<td>
					<input type="password" class="form-control form-size-230">
					<label for="">영문, 숫자, 특수문자 혼합 8자 이상 20자 이내</label>
				</td>
			</tr>
			<tr>
				<th>비밀번호 확인</th>
				<td>
					<input type="password" class="form-control form-size-230">
					<label for="">영문, 숫자, 특수문자 혼합 8자 이상 20자 이내</label>
				</td>
			</tr>
			<tr>
				<th>휴대전화</th>
				<td><input type="text" class="form-control form-size-100"><span class="form-bar">-</span>
					<input type="text" class="form-control form-size-100"><span class="form-bar">-</span>
					<input type="text" class="form-control form-size-100"></td>
			</tr>
			<tr>
				<th>연락처</th>
				<td><input type="text" class="form-control form-size-100"><span class="form-bar">-</span>
					<input type="text" class="form-control form-size-100"><span class="form-bar">-</span>
					<input type="text" class="form-control form-size-100"></td>
			</tr>
			<tr>
				<th>메일</th>
				<td>
					<input type="text" class="form-control form-size-160"><span class="form-mail">@</span>
					<input type="text" class="form-control form-size-160">
					<select name="" id="" class="form-control form-size-160">
						<option value="">직접입력</option>
						<option value="">Google.com</option>
						<option value="">Naver.com</option>
						<option value="">Daum.net</option>
					</select>
					<input type="checkbox" checked><label for="">이메일 수신동의</label>
				</td>
			</tr>
			<tr>
				<th>소속 및 기관명</th>
				<td>
					<input type="text" class="form-control form-size-347">
				</td>
			</tr>
			<tr>
				<th>직위(급) </th>
				<td>
					<input type="text" class="form-control form-size-347">
				</td>
			</tr>
			</tbody>
		</table>
		<div class="form-buttom-group next-part-30">
			<button type="submit" class="btn btn-lg btn-primary">확인</button>
			<button type="submit" class="btn btn-lg btn-default">취소</button>
		</div>
	</filedset>
</form>




<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>
