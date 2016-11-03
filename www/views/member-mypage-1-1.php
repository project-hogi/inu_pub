<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page module-content"; ?>
<?php require "part/sitemap.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<div class="tab">
	<ul class="children-count-2">
		<li class="active"><a href="member-mypage-1.php"><span>나의 상담내역</span></a></li>
		<li><a href="member-mypage-2.php"><span>개인정보 수정</span></a></li>
	</ul>
</div>
<div class="board-mypage">
	<div class="board-mypage-view">
		<form action="">
			<fieldset>
				<table class="table-board-mypage mypage-state">
					<col width="15.7%">
					<col width="34.3%">
					<col width="15.7%">
					<col width="34.3%">
					<tbody>
					<tr>
						<th>상담상태</th>
						<td>
							<span class="state state-standby">접수중</span>
						</td>
						<th>지정 멘토명</th>
						<td>이민호 (<a href="mailto:ceo2331@naver.com" class="link-style">ceo2331@naver.com</a>)</td>
					</tr>
					<tr>
						<th>상담상태</th>
						<td>
							<span class="state state-finish">상담완료</span>
						</td>
						<th>지정 멘토명</th>
						<td>최은주 (<a href="mailto:international@naver.com" class="link-style">international@naver.com</a>)</td>
					</tr>
					<tr>
						<th>상담상태</th>
						<td>
							<span class="state state-progress">상담중</span>
						</td>
						<th>지정 멘토명</th>
						<td>박호민 (<a href="mailto:parkhm@naver.com" class="link-style">parkhm@naver.com</a>)</td>
					</tr>
					</tbody>
				</table>
				<table class="table-board-mypage mypage-content">
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
						<th>연락처</th>
						<td>010-2222-3333</td>
					</tr>
					<tr>
						<th>이메일</th>
						<td>international@naver.com</td>
					</tr>
					<tr>
						<th>신청분야</th>
						<td><label for=""><input type="checkbox">사업화</label> <label for=""><input type="checkbox">마케팅</label> <label for=""><input type="checkbox">재무관리</label> <label for=""><input type="checkbox">보증, 기술금융보증</label> <label for=""><input type="checkbox">투자, IR</label> <label for=""><input type="checkbox">법률, 지재권</label> <label for=""><input type="checkbox">창업교육</label></td>
					</tr>
					<tr>
						<th>상담형태</th>
						<td><label for=""><input type="radio">대면상담</label> <label for=""><input type="radio">온라인 교육상담</label> <label for=""><input type="radio">전화상담</label></td>
					</tr>
					<tr>
						<th>상담희망시간</th>
						<td>2016년 8월31일 가능합니다.</td>
					</tr>
					<tr>
						<th>상담제목</th>
						<td class="title">아이디어 상품 관련 사업화에 관련하여 멘토 면담을 신청합니다.</td>
					</tr>
					<tr>
						<th>상담내용</th>
						<td>
							<p>안녕하세요!!! 멘토 면담을 신청합니다<br>
								혁신이 필요한 우리 기업들이 참고하면 좋을 전 세계 중소기업의 혁신상품을 모은 ‘세계의 번뜩이는 99개 혁신상품’ 보고서가<br>
								나왔다. KOTRA는 126개 해외 전 무역관을 동원해서 발굴한 전 세계 164개 상품 가운데 99개를 선별하여 작성하였다.<br>
								감사합니다.<br>
								<br>
								<br>
								빠른 답변 부탁드립니다.
							</p>
						</td>
					</tr>
					<tr>
						<th>첨부파일</th>
						<td>
							<div class="form-group">
								<input type="text" class="form-control form-size-525"><label for=""></label>
								<input type="file" class="mypage-file-form" id="mypage-file"><label for="mypage-file">찾아보기</label>

							</div>
						</td>
					</tr>
					</tbody>
				</table>
				<div class="btn-box">
					<button type="submit" class="btn btn-board on">확인</button>
					<button type="reset" class="btn btn-board">취소</button>
				</div>
			</fieldset>
		</form>
	</div>

</div>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>











