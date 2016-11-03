<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page module-content"; ?>
<?php require "part/sitemap.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<div class="tab">
	<ul class="children-count-2">
		<li><a href="member-mypage-1.php"><span>나의 상담내역</span></a></li>
		<li class="active"><a href="member-mypage-2.php"><span>개인정보 수정</span></a></li>
	</ul>
</div>
<div class="board-mypage">
	<div class="board-mypage-change">
		<form action="">
			<fieldset>
				<table class="table-board-mypage mypage-change">
					<col width="15.7%">
					<col width="*">
					<tbody>
					<tr>
						<th>회원명</th>
						<td>홍길동</td>
					</tr>
					<tr>
						<th>회원아이디</th>
						<td class="point">member2016</td>
					</tr>
					<tr>
						<th>비밀번호</th>
						<td>
							<button type="button" class="btn btn-button-type">비밀번호 변경</button>
						</td>
					</tr>
					<tr>
						<th>휴대전화</th>
						<td>
							<input type="text" value="010" placeholder="010" class="form-control form-size-102"><label for=""><span class="sr-only"></span></label><span class="bar">-</span>
							<input type="text" value="2222" class="form-control form-size-102"><label for=""><span class="sr-only"></span></label><span class="bar">-</span>
							<input type="text" value="3333" class="form-control form-size-102"><label for=""><span class="sr-only"></span></label>
						</td>
					</tr>
					<tr>
						<th>연락처</th>
						<td>
							<input type="text" value="02" placeholder="02" class="form-control form-size-102"><label for=""><span class="sr-only"></span></label><span class="bar">-</span>
							<input type="text" value="2354" class="form-control form-size-102"><label for=""><span class="sr-only"></span></label><span class="bar">-</span>
							<input type="text" value="3322" class="form-control form-size-102"><label for=""><span class="sr-only"></span></label>
						</td>
					</tr>
					<tr>
						<th>이메일</th>
						<td>
							<input type="text" value="internatioanal21" class="form-control form-size-160"><label for=""><span class="sr-only"></span></label><span class="bar">@</span>
							<input type="text" value="naver.com" class="form-control form-size-160"><label for=""><span class="sr-only"></span></label>
							<select name="" id="" class="form-control form-size-160">
								<option value="">직접입력</option>
								<option value="">naver.com</option>
								<option value="">gamil.com</option>
								<option value="">daum.net</option>
							</select>
							<label for="" class="email-agree"><input type="checkbox" checked>이메일 수신동의</label>
						</td>
					</tr>
					<tr>
						<th>소속 및 기관명</th>
						<td>
							<input type="text" value="인천대학교 창업지원단" class="form-control form-size-525"><label for=""><span class="sr-only">소속 및 기관명</span></label>
							</td>
					</tr>
					<tr>
						<th>직위(급)</th>
						<td>
							<input type="text" value="실장" class="form-control form-size-525"><label for=""><span class="sr-only">직위(급)</span></label>
						</td>
					</tr>
					</tbody>
				</table>
				<div class="btn-box">
					<button type="submit" class="btn btn-board on">저장</button>
					<button type="reset" class="btn btn-board">취소</button>
				</div>
			</fieldset>
		</form>

	</div>

</div>

<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>
