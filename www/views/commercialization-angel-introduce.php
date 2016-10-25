<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page module-content"; ?>
<?php require "part/sitemap.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<div class="push-left">
	<h3 class="left-title">
		<strong class="point-db">
			<span class="under-line">창업기업<span class="normal">과</span></span>
		</strong><br>
		<strong>
			<span class="under-line">투자기관<span class="normal">연결</span></span>
		</strong><br>
		<span class="type-block">
			<span class="under-line">네트워크</span>
		</span>
		<span class="icon-coin"></span>
	</h3>
	<h5 class="point-title">
		사업목적
	</h5>
	<ul class="list-style doted">
		<li>인천지역 우수한 창업기업의 지속적인 성장을 위해 투자기관과 투자자를 연결하는 네트워크를 구축하고 지역기반의	기술창업 선순환 과정을 마련</li>
	</ul>
	<table class="table-primary">

	</table>
	<ul class="list-style indent-left">
		<li>
			가. 투자유치 전문교육 및 전략수립 지원
			<p>(1)분야별 전문가 멘토링(기술ㆍ회계ㆍ세무ㆍ변리 등)과 투자유치 전문교육을 통해 기술창업자의 투자유치 역량 향상을 지원</p>
			<p>(2)분야 및 종목별 기관투자자(또는 엔젤투자자) 컨설팅을 통해 창업기업 투자유치 전략 마련을 지원</p>
		</li>
		<li>
			나. 투자유치 IR(Investor Relations) 및 투자자 교류회 지원
			<p>(1)투자유치가 가능한 우수 중소기업과 기관투자자(또는 엔젤투자자) 간의 비즈니스 협력 관계를 마련하기 위해 기업당 연 2회 이상 IR기회를 제공</p>
			<p>(2)창업선도대학육성사업 수혜기업 중 투자유치 성공사례를 발굴하고 성과확산을 지원</p>
			<p>(3)인천지역 기반의 투자자 발굴과 양성을 위한 교육 및 워크숍 진행</p>
		</li>
	</ul>
	<h5 class="point-title">
		인천엔젤클럽
	</h5>
	<ul class="list-style doted">
		<li>2013년 인천대학교 창업지원단이 설립한 인천지역 최초의 엔젤클럽으로 우수한 기술을 보유한 창업기업의 엔젤투자유치를 위한 전문교육과 투자자 발굴, IR(Investor Relations)을 위한 Demo Day, 포럼 등을 운영</li>
	</ul>
	<div class="next-part-10">
		<img src="<?php echo $config["imageDir"]; ?>/part/content/commercialization/angel-1-1.jpg" alt="엔젤투자 = 초기기업 및 예비 창업자 + 아이디어 기술력 + 미래성장 가능성 + 엔젤투자 유형">
	</div>
</div>
<!-- /.push-left -->
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>
