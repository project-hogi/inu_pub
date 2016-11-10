<div id="top-banner-area">
	<div class="container mobile">
		<ul class="rolling-mobile-content">
			<li>
				<div class="img-box"><img src="<?php echo $config["imageDir"]; ?>/part/temp/topbanner-1.png"></div>
				<dl>
					<dt>제1회 창업선도 대학연합 W-Hackathon모집</dt>
					<dd>팀빌딩을 통해 만들어진 조원들이 함께 24시간 동안 작품을 위한 아이데이션과 기획을 하고 최종적으로 제작...</dd>
				</dl>
				<a href="#"><span class="icon icon-top-banner"></span><span class="link-style">자세히보기</span></a>
			</li>
			<li>
				<div class="img-box"><img src="<?php echo $config["imageDir"]; ?>/part/temp/topbanner-2.png"></div>
				<dl>
					<dt>제4기 INU Startup Frontier 모집 안내</dt>
					<dd>INU Startup Frontier는 인천대학교가 학생창업자 발굴을 위해 사전교육-해외창업교육연수 ...</dd>
				</dl>
				<a href="#"><span class="icon icon-top-banner"></span><span class="link-style">자세히보기</span></a>
			</li>
			<li>
				<div class="img-box"><img src="<?php echo $config["imageDir"]; ?>/part/temp/topbanner-2.png"></div>
				<dl>
					<dt>제4기 INU Startup Frontier 모집 안내</dt>
					<dd>INU Startup Frontier는 인천대학교가 학생창업자 발굴을 위해 사전교육-해외창업교육연수 ...</dd>
				</dl>
				<a href="#"><span class="icon icon-top-banner"></span><span class="link-style">자세히보기</span></a>
			</li>
		</ul>
		<div class="top-banner-button-group">
			<input type="checkbox" name="pop_today" id="pop_today" ><label for="pop_today"><span class="underline">1일간 열지 않음</span></label>
			<a href="#close" class="top-banner-close"><span class="icon icon-top-banner-close"><span class="sr-only">상단배너 닫기 버튼</span></span></a>
		</div>
		<div class="top-banner-pager">
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
		</div>
	</div>
	<div class="container desktop">
		<ul class="rolling-mobile-content">
			<li>
				<ul>
					<li>
						<div class="img-box"><img src="<?php echo $config["imageDir"]; ?>/part/temp/topbanner-1.png"></div>
						<dl>
							<dt>제1회 창업선도 대학연합 W-Hackathon모집</dt>
							<dd>팀빌딩을 통해 만들어진 조원들이 함께 24시간 동안 작품을 위한 아이데이션과 기획을 하고 최종적으로 제작...</dd>
						</dl>
						<a href="#"><span class="icon icon-top-banner"></span><span class="link-style">자세히보기</span></a>
					</li>
					<li>
						<div class="img-box"><img src="<?php echo $config["imageDir"]; ?>/part/temp/topbanner-2.png"></div>
						<dl>
							<dt>제4기 INU Startup Frontier 모집 안내</dt>
							<dd>INU Startup Frontier는 인천대학교가 학생창업자 발굴을 위해 사전교육-해외창업교육연수 ...</dd>
						</dl>
						<a href="#"><span class="icon icon-top-banner"></span><span class="link-style">자세히보기</span></a>
					</li>
				</ul>
			</li>
			<li>
				<ul>
					<li>
						<div class="img-box"><img src="<?php echo $config["imageDir"]; ?>/part/temp/topbanner-1.png"></div>
						<dl>
							<dt>제1회 창업선도 대학연합 W-Hackathon모집</dt>
							<dd>팀빌딩을 통해 만들어진 조원들이 함께 24시간 동안 작품을 위한 아이데이션과 기획을 하고 최종적으로 제작...</dd>
						</dl>
						<a href="#"><span class="icon icon-top-banner"></span><span class="link-style">자세히보기</span></a>
					</li>
					<li>
						<div class="img-box"><img src="<?php echo $config["imageDir"]; ?>/part/temp/topbanner-2.png"></div>
						<dl>
							<dt>제4기 INU Startup Frontier 모집 안내</dt>
							<dd>INU Startup Frontier는 인천대학교가 학생창업자 발굴을 위해 사전교육-해외창업교육연수 ...</dd>
						</dl>
						<a href="#"><span class="icon icon-top-banner"></span><span class="link-style">자세히보기</span></a>
					</li>
				</ul>
			</li>
		</ul>
		<div class="top-banner-pager">
			<a href="#"></a>
			<a href="#"></a>
		</div>
		<div class="top-banner-button-group">
			<input type="checkbox" name="pop_today" id="pop_today" ><label for="pop_today"><span class="underline">1일간 열지 않음</span></label>
			<a href="#close" class="top-banner-close"><span class="icon icon-top-banner-close"><span class="sr-only">상단배너 닫기 버튼</span></span></a>
		</div>
	</div>
</div>
<!-- /.top-banner-area -->
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
						<li><a href="#sitemap" class="open-sitemap">Sitemap</a></li>
					</ul>
					<ul class="tools">
						<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
						<li><a href="#sitemap" class="open-sitemap"><strong><i class="fa fa-bars" aria-hidden="true"></i></strong></a></li>
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
