<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page module-content"; ?>
<?php require "part/sitemap.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<div class="board-mento">
	<div class="board-mento-list">
		<div class="comment-box">
		<p class="list-comment">로그인 후 원하시는 멘토에게 <span>상담신청</span>을 하실 수 있습니다.</p>
		<button type="button" class="btn btn-primary btn-mento-join">멘토신청</button>
		</div>
		<ul>
			<li>
				<div class="img-area" style="background-image: url(<?php echo $config["imageDir"]; ?>/part/content/mento/1.jpg);">
				</div>
				<div class="pre-area">
					<h3 class="title"><span class="title-type">멘토명</span><span class="tit">윤인성</span></h3>
					<p class="mento-part">멘토분야 : 사업화/마케팅</p>
					<p class="mento-type">멘토링형태 : 전화 / Online / 대면</p>

					<div class="detail-group">
						<a href="#" class="btn btn-detail-popup" type="button" data-toggle="modal" data-target="#board-mento-detail"><span>이력상세보기</span></a>
					</div>
				</div>
			</li>
			<li>
				<div class="img-area" style="background-image: url(<?php echo $config["imageDir"]; ?>/part/content/mento/2.jpg);">
				</div>
				<div class="pre-area">
					<h3 class="title"><span class="title-type">멘토명</span><span class="tit">최현수</span></h3>
					<p class="mento-part">멘토분야 : 재무관리,기술보증</p>
					<p class="mento-type">멘토링형태 : 전화</p>

					<div class="detail-group">
						<a href="#" class="btn btn-detail-popup" type="button" data-toggle="modal" data-target="#board-mento-detail"><span>이력상세보기</span></a>
					</div>
				</div>
			</li>
			<li>
				<div class="img-area" style="background-image: url(<?php echo $config["imageDir"]; ?>/part/content/mento/3.jpg);">
				</div>
				<div class="pre-area">
					<h3 class="title"><span class="title-type">멘토명</span><span class="tit">이용석</span></h3>
					<p class="mento-part">멘토분야 : 투자IR</p>
					<p class="mento-type">멘토링형태 : 전화l / 대면</p>

					<div class="detail-group">
						<a href="#" class="btn btn-detail-popup" type="button" data-toggle="modal" data-target="#board-mento-detail"><span>이력상세보기</span></a>
					</div>
				</div>
			</li>
			<li>
				<div class="img-area" style="background-image: url(<?php echo $config["imageDir"]; ?>/part/content/mento/4.jpg);">
				</div>
				<div class="pre-area">
					<h3 class="title"><span class="title-type">멘토명</span><span class="tit">오영서</span></h3>
					<p class="mento-part">멘토분야 : 재무관리</p>
					<p class="mento-type">멘토링형태 : Online / 대면</p>

					<div class="detail-group">
						<a href="#" class="btn btn-detail-popup" type="button" data-toggle="modal" data-target="#board-mento-detail"><span>이력상세보기</span></a>
					</div>
				</div>
			</li>
			<li>
				<div class="img-area" style="background-image: url(<?php echo $config["imageDir"]; ?>/part/content/mento/1.jpg);">
				</div>
				<div class="pre-area">
					<h3 class="title"><span class="title-type">멘토명</span><span class="tit">윤인성</span></h3>
					<p class="mento-part">멘토분야 : 사업화/마케팅</p>
					<p class="mento-type">멘토링형태 : 전화 / Online / 대면</p>

					<div class="detail-group">
						<a href="#" class="btn btn-detail-popup" type="button" data-toggle="modal" data-target="#board-mento-detail"><span>이력상세보기</span></a>
					</div>
				</div>
			</li>
			<li>
				<div class="img-area" style="background-image: url(<?php echo $config["imageDir"]; ?>/part/content/mento/2.jpg);">
				</div>
				<div class="pre-area">
					<h3 class="title"><span class="title-type">멘토명</span><span class="tit">최현수</span></h3>
					<p class="mento-part">멘토분야 : 재무관리,기술보증</p>
					<p class="mento-type">멘토링형태 : 전화</p>

					<div class="detail-group">
						<a href="#" class="btn btn-detail-popup" type="button" data-toggle="modal" data-target="#board-mento-detail"><span>이력상세보기</span></a>
					</div>
				</div>
			</li>
			<li>
				<div class="img-area" style="background-image: url(<?php echo $config["imageDir"]; ?>/part/content/mento/3.jpg);">
				</div>
				<div class="pre-area">
					<h3 class="title"><span class="title-type">멘토명</span><span class="tit">이용석</span></h3>
					<p class="mento-part">멘토분야 : 투자IR</p>
					<p class="mento-type">멘토링형태 : 전화l / 대면</p>

					<div class="detail-group">
						<a href="#" class="btn btn-detail-popup" type="button" data-toggle="modal" data-target="#board-mento-detail"><span>이력상세보기</span></a>
					</div>
				</div>
			</li>
			<li>
				<div class="img-area" style="background-image: url(<?php echo $config["imageDir"]; ?>/part/content/mento/4.jpg);">
				</div>
				<div class="pre-area">
					<h3 class="title"><span class="title-type">멘토명</span><span class="tit">오영서</span></h3>
					<p class="mento-part">멘토분야 : 재무관리</p>
					<p class="mento-type">멘토링형태 : Online / 대면</p>

					<div class="detail-group">
						<a href="#" class="btn btn-detail-popup" type="button" data-toggle="modal" data-target="#board-mento-detail"><span>이력상세보기</span></a>
					</div>
				</div>
			</li>
		</ul>
		<div class="board-footer">
			<ul class="pagination">
				<li><a href="#" class="active">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
			</ul>
			<ul class="pager">
				<li><a href="#" class="btn-prev"><span class="sr-only">이전</span></a></li>
				<li><a href="#" class="btn-next"><span class="sr-only">다음</span></a></li>
			</ul>
		</div>
		<!-- /.board-footer -->
	</div>
	<!-- /.board-counsel-list -->

	<!-- Modal -->
	<div class="modal fade" id="board-mento-detail" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<div class="board-title detail-type">
						<strong>멘토이력 상세보기</strong>
						<a href="#" class="btn-popup_close"><span class="sr-only">팝업창 닫기</span></a>
					</div>
				</div>
				<div class="modal-body">
					<div class="info">

					</div>
					<div class="contents">

					</div>
				</div>
				<div class="modal-footer">
					<div class="form-buttom-group next-part-30">
						<button type="button" class="btn btn-lg btn-primary">닫기</button>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- /#board-mento-detail -->
</div>
<!-- /.board-counsel -->
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>
