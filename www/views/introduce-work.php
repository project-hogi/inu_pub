<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page module-content"; ?>
<?php require "part/sitemap.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<div class="working-list">
	<ul>
		<li>
			<div class="img-area">
				<img src="<?php echo $config["imageDir"]; ?>/part/content/introduce/work/1.png" alt="창업선도대학 육성사업">
			</div>
			<div class="pre-area">
				<h3 class="title"><span class="label label-default-size label-default-color">사업명</span><span class="tit">창업선도대학 육성사업</span></h3>
				<ul class="list">
					<li>
						- 우수한 창업지원 인프라를 갖춘 대학을 ‘창업선도대학’으로 지정하여<br>
						창업교육부터 창업아이템 발굴 및 사업화, 후속지원까지 패키지식 지원을<br>
						통해 대학을 창업의 요람으로 육성
					</li>
					<li>
						- 2016년 현재 총 34개 대학 주관기관 지정 완료
					</li>
				</ul>
			</div>
		</li>
		<li>
			<div class="img-area">
				<img src="<?php echo $config["imageDir"]; ?>/part/content/introduce/work/2.png" alt="창업보육사업">
			</div>
			<div class="pre-area">
				<h3 class="title"><span class="label label-default-size label-default-color">사업명</span><span class="tit">창업보육사업</span></h3>
				<ul class="list">
					<li>
						- 핵심기술과 기술에 대한 기술성/사업성/시장성 등은 가지고 있으나<br>
						시설확보에 어려움이 있는 (예비)창업자에게 시설을 저렴하게 제공하며, 아울러<br>
						경영, 세무, 기술지도등의 지원을 통해 원활한 성장을 유도
					</li>
				</ul>
			</div>
		</li>
		<li>
			<div class="img-area">
				<img src="<?php echo $config["imageDir"]; ?>/part/content/introduce/work/3.png" alt="SK청년비상 프로그램">
			</div>
			<div class="pre-area">
				<h3 class="title"><span class="label label-default-size label-default-color">사업명</span><span class="tit">SK청년비상 프로그램</span></h3>
				<ul class="list">
					<li>
						- 대학생 대상 창업교육, 인큐베이팅, 해외진출 등 체계적인 창업교육 지원을 통한<br>
						청년층 창업활성화 지원
					</li>
					<li>
						- 2016년 현재 총 25개 대학 주관기관 지정 완료
					</li>
				</ul>
			</div>
		</li>
	</ul>
</div>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>
