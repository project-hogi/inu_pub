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
	<div class="board-mypage-list">
		<ul>
			<li>
				<a href="member-mypage-1-1.php">
					<div class="counter">
						<span>08</span>
					</div>
					<div class="title-area">
						<strong class="title">[창업상담] 동시통역 고품질 영상회의 서비스에 대해 상담 신청합니다.</strong>
						<span class="date"><span class="icon icon-clock"></span>2016-09-16 18:26:17</span>
					</div>
					<div class="now">
						<span class="state state-progress">상담중</span>
					</div>
				</a>
			</li>
			<li>
				<a href="member-mypage-1-1.php">
					<div class="counter">
						<span>07</span>
					</div>
					<div class="title-area">
						<strong class="title">[창업상담] 동시통역 고품질 영상회의 서비스에 대해 상담 신청합니다. 동시통역 고품질 영상회의 서비스에 대해 상담 신청합니다. 동시통역 고품질 영상회의 서비스에 대해 상담 신청합니다.</strong>
						<span class="date"><span class="icon icon-clock"></span>2016-09-16 18:26:17</span>
					</div>
					<div class="now">
						<span class="state state-standby">접수중</span>
					</div>
				</a>
			</li>
			<li>
				<a href="member-mypage-1-1.php">
					<div class="counter">
						<span>06</span>
					</div>
					<div class="title-area">
						<strong class="title">[창업상담] 동시통역 고품질 영상회의 서비스에 대해 상담 신청합니다.</strong>
						<span class="date"><span class="icon icon-clock"></span>2016-09-16 18:26:17</span>
					</div>
					<div class="now">
						<span class="state state-finish">상담완료</span>
					</div>
				</a>
			</li>
			<li>
				<a href="member-mypage-1-1.php">
					<div class="counter">
						<span>05</span>
					</div>
					<div class="title-area">
						<strong class="title">[창업상담] 동시통역 고품질 영상회의 서비스에 대해 상담 신청합니다.</strong>
						<span class="date"><span class="icon icon-clock"></span>2016-09-16 18:26:17</span>
					</div>
					<div class="now">
						<span class="state state-return">반려</span>
					</div>
				</a>
			</li>
			<li>
				<a href="member-mypage-1-1.php">
					<div class="counter">
						<span>04</span>
					</div>
					<div class="title-area">
						<strong class="title">[창업상담] 동시통역 고품질 영상회의 서비스에 대해 상담 신청합니다.</strong>
						<span class="date"><span class="icon icon-clock"></span>2016-09-16 18:26:17</span>
					</div>
					<div class="now">
						<span class="state state-finish">상담완료</span>
					</div>
				</a>
			</li>
			<li>
				<a href="member-mypage-1-1.php">
					<div class="counter">
						<span>03</span>
					</div>
					<div class="title-area">
						<strong class="title">[창업상담] 동시통역 고품질 영상회의 서비스에 대해 상담 신청합니다.</strong>
						<span class="date"><span class="icon icon-clock"></span>2016-09-16 18:26:17</span>
					</div>
					<div class="now">
						<span class="state state-finish">상담완료</span>
					</div>
				</a>
			</li>
			<li>
				<a href="member-mypage-1-1.php">
					<div class="counter">
						<span>02</span>
					</div>
					<div class="title-area">
						<strong class="title">[창업상담] 동시통역 고품질 영상회의 서비스에 대해 상담 신청합니다.</strong>
						<span class="date"><span class="icon icon-clock"></span>2016-09-16 18:26:17</span>
					</div>
					<div class="now">
						<span class="state state-return">반려</span>
					</div>
				</a>
			</li>
			<li>
				<a href="member-mypage-1-1.php">
					<div class="counter">
						<span>01</span>
					</div>
					<div class="title-area">
						<strong class="title">[창업상담] 동시통역 고품질 영상회의 서비스에 대해 상담 신청합니다.</strong>
						<span class="date"><span class="icon icon-clock"></span>2016-09-16 18:26:17</span>
					</div>
					<div class="now">
						<span class="state state-progress">상담중</span>
					</div>
				</a>
			</li>
		</ul>

	</div>

	<div class="board-footer">
		<ul class="pagination">
			<li class="active"><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
		</ul>
		<ul class="pager">
			<li><a href="#" class="btn-prev"><span class="sr-only">이전</span></a></li>
			<li><a href="#" class="btn-next"><span class="sr-only">다음</span></a></li>
		</ul>
		<div class="search-box">
			<form action="">
				<fieldset>
					<div class="select select-type-search">
						<a href="#" class="selected"><span>제목+내용</span></a>
						<ul class="list">
							<li><a href="#"><span>제목+내용</span></a></li>
							<li><a href="#"><span>제목</span></a></li>
							<li><a href="#"><span>내용</span></a></li>
							<li><a href="#"><span>본문</span></a></li>
							<li><a href="#"><span>작성자</span></a></li>
						</ul>
					</div>
					<input type="text" class="form-control form-size-160">
					<button type="submit" class="btn btn-board btn-borad-submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				</fieldset>
			</form>

		</div>

	</div>
	<!-- /.board-footer -->
</div>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>
