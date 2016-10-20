<!-- Header.html -->
<div id="wrap">
	<div id="header">
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
	<div id="container">
		<div>
<!-- //Header.html -->
