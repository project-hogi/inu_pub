<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page module-content"; ?>
<?php require "part/sitemap.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<div class="board-notice">
	<div class="board-notice-view">
		<h3 class="title"><span class="title-type">공지</span><span class="tit">51개의 스타트업이 이야기하는 실패 요인 분석하기</span></h3>
		<div class="draftsman">
			<span class="writer"><span class="icon icon-writer"></span>인천대 창업지원단</span>
			<span class="counter">조회 <span>130</span></span>
			<span class="date"><span class="icon icon-clock"></span>2016-09-16 18:26:17</span>
		</div>
		<div class="board-content">
			<p>버즈피아의 멤버들은 한국의 성공적인 IT 분야의 상장 기업 출신으로, 지난 10년간 삼성, LG, 화웨이, 샤프, 보다폰 (Vodafone)과 같은<br>
				국내외 글로벌 스마트폰 제조사와 함께 일해왔습니다. 혜성같이 등장한 안드로이드 기반의 앱과 런처 개발은 최근 몇 년간 우리의 주요 일거리였죠.<br>
				스마트폰이 생겨난 이후 우린 편리함과 동시에 고민할 것들이 더 많아졌습니다. '무슨 어플이 내게 유용한지, 어떻게 하면 더 편리하게 스마트폰을<br>
				우리 라이프 스타일에 맞출 수 있을지..' 우리는 스마트폰을 어떻게 하면, 자연스럽게 내 일상에 편하게 활용할 수 있을지 고민하던 중, 다년간의 경험을<br>
				바탕으로 우리가 직접 시장에 놀라움을 안겨줄 수 있는 무언가를 만들기로 결심했습니다.</p>
			<p>&nbsp;</p>
			<img src="<?php echo $config["imageDir"]; ?>/part/temp/1.jpg" alt="">
		</div>
		<div class="board-view-footer">
			<ul>
				<li><a href="#" class="prev-content"><span class="controler ">이전글</span><strong class="title">‘제조 스타트업이라면 심천으로 오라!’ 헥셀러레이터 벤자민 조프</strong><span class="date">2016-05-24</span></a></li>
				<li><a href="#" class="next-content"><span class="controler">다음글</span><strong class="title">우리나라 개발자들이 스타트업에 가지 않으려는 이유</strong><span class="date">2015-12-22</span></a></li>
			</ul>
		</div>
		<div class="btn-box">
			<a href="#" class="btn btn-lg btn-primary"><i class="fa fa-bars" aria-hidden="true"></i>리스트</a>
		</div>
	</div>
</div>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>




