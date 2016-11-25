<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page module-content"; ?>
<?php require "part/sitemap.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>

<div class="board-notice">
	<div class="board-notice-list">
		<ul>

			<li>
				<a href="http://naver.com" target="_blank">

					<div class="pre-area">
						<h3 class="title">
											<span class="tit">


													<span class="label label-info">내가 쓴 글</span>

													<span class="label label-info">새 글</span>

												프로그램 소개
											</span>
						</h3>
						<p class="pre">프로그램 소개</p>
						<div class="draftsman">
							<span class="date"><span class="icon icon-clock"></span>15시간 전 ~ 2016-11-30</span>
						</div>
					</div>
				</a>

				<a href="/front/news/programs/read?id=516" class="btn btn-warning">프로그램정보 수정</a>

			</li>

		</ul>
	</div>
	<div class="board-footer">








		<ul class="pagination pagination-sm no-margin pull-left">
			<li>
				<a href="/front/news/programs?page=1"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
			</li>
			<li>
				<a href="/front/news/programs?page=1"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
			</li>

			<li class="active">
				<a href="/front/news/programs?page=1">1</a>
			</li>

			<li>
				<a href="/front/news/programs?page=1"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			</li>
			<li>
				<a href="/front/news/programs?page=1"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
			</li>
		</ul>


	</div>
</div>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>
