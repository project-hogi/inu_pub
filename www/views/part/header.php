<!-- Header.html -->
<div id="wrap">
	<div id="header">
		<div class="header-wrap">
			<div class="container">
				<h1 class="site-logo"><a href="/"><span class="sr-only"><?php echo $config["sitename"]; ?></span></a></h1>
				<div class="lnb">
					<h2 class="sr-only">메인메뉴</h2>
					<?php echo getNavsToHtml("				", getSitemap($pagePath)); ?>
				</div>
				<div class="gnb-and-tools">
					<ul class="gnb">
						<li><a href="#">Login</a></li>
						<li><a href="#">Join</a></li>
						<li><a href="#">Sitemap</a></li>
					</ul>
					<ul class="tools">
						<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
						<li><a href="#"><strong><i class="fa fa-bars" aria-hidden="true"></i></strong></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="over-panel">
			<div class="container">
				<p class="sr-only"><strong>창업사업화에서 다양한 창업관련 콘텐츠를 제공합니다.</strong><br>
					인천대학교 창업지원단의 창업관련 서비스를 만나보세요!</p>
				<a href="#close" class="close-panel"><span class="sr-only">닫기</span></a>
			</div>
		</div>
	</div>
	<div class="header-over-panel-bg"></div>
	<div id="container">
		<div>
<!-- //Header.html -->
