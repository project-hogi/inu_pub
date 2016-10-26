<!-- Header Sub.html -->
<div class="visual">
	<?php if(getDepthId($pagePath, 0) == "education"){ ?>
		<p class="sr-only">창업지원단의 체계적인 지원으로 창업단계별 맞춤지원 프로그램!<br> 인천대학교 창업지원단</p>
	<?php } ?>
</div>
<div class="snb">
	<div class="container">
		<ul>
			<li class="home"><a href="#"><span class="sr-only">홈</span></a></li>
			<?php for($i = 1; $i < 10; $i++){ ?>
				<?php
				$nav = getNavByDepth($pagePath, $i);

				if($nav){
					?>
					<li class="has-children">
						<a href="#"><?php echo $nav["name"]; ?></a>
						<?php echo getNavsToHtml("", getNavsByDepth($pagePath, $i - 1), 1); ?>
					</li>
				<?php } ?>
			<?php } ?>
		</ul>
	</div>
</div>
<div class="container">
	<h2 class="page-title"><?php echo getPageName($pagePath, 2); ?></h2>
	<div class="breadcrumb">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">뎁스1</a></li>
			<li><a href="#">뎁스2</a></li>
			<li><a href="#">뎁스3</a></li>
		</ul>
	</div>
	<?php if(getDepthId($pagePath, 0) == "education"){ ?>
		<?php if(getDepthId($pagePath, 1) == "lecture"){ ?>
			<div class="tab">
				<ul class="children-count-2">
					<li<?php if(getDepthId($pagePath, 2) == "student" || !getDepthId($pagePath, 2)){ ?> class="active"<?php } ?>><a href="education-lecture-student.php"><span>대학생창업강좌</span></a></li>
					<li<?php if(getDepthId($pagePath, 2) == "ordinary"){ ?> class="active"<?php } ?>><a href="education-lecture-ordinary.php"><span>일반인실전창업강좌</span></a></li>
				</ul>
			</div>
		<?php } else if(getDepthId($pagePath, 1) == "school_system"){ ?>

		<?php } else if(getDepthId($pagePath, 1) == "society"){ ?>
			<div class="tab">
				<ul class="children-count-3">
					<li<?php if(getDepthId($pagePath, 2) == "program" || !getDepthId($pagePath, 2)){ ?> class="active"<?php } ?>><a href="education-society-program.php"><span>프로그램안내</span></a></li>
					<li<?php if(getDepthId($pagePath, 2) == "introduce"){ ?> class="active"<?php } ?>><a href="education-society-introduce.php"><span>동아리 소개</span></a></li>
					<li<?php if(getDepthId($pagePath, 2) == "inu_readers"){ ?> class="active"<?php } ?>><a href="education-society-inu_readers.php"><span>INU 리더스</span></a></li>
				</ul>
			</div>
		<?php } else if(getDepthId($pagePath, 1) == "experience"){ ?>
			<?php if(getDepthId($pagePath, 2) == "1"){ ?>

			<?php } else if(getDepthId($pagePath, 2) == "2"){ ?>

			<?php } else if(getDepthId($pagePath, 2) == "3"){ ?>
				<div class="tab">
					<ul class="children-count-3">
						<li<?php if(getDepthId($pagePath, 3) == "1" || !getDepthId($pagePath, 3)){ ?> class="active"<?php } ?>><a href="education-experience-3-1.php"><span>비즈쿨IP리더</span></a></li>
						<li<?php if(getDepthId($pagePath, 3) == "2"){ ?> class="active"<?php } ?>><a href="education-experience-3-2.php"><span>비즈쿨 창업현장 연수</span></a></li>
						<li<?php if(getDepthId($pagePath, 3) == "3"){ ?> class="active"<?php } ?>><a href="education-experience-3-3.php"><span>비즈쿨 드림콘서트</span></a></li>
					</ul>
				</div>
			<?php } else if(getDepthId($pagePath, 2) == "4"){ ?>

			<?php } else if(getDepthId($pagePath, 2) == "5"){ ?>
				<div class="tab">
					<ul class="children-count-2">
						<li<?php if(getDepthId($pagePath, 3) == "1" || !getDepthId($pagePath, 3)){ ?> class="active"<?php } ?>><a href="education-experience-5-1.php"><span>한마당투어</span></a></li>
						<li<?php if(getDepthId($pagePath, 3) == "2"){ ?> class="active"<?php } ?>><a href="education-experience-5-2.php"><span>창업페스티벌</span></a></li>
					</ul>
				</div>
			<?php } else if(getDepthId($pagePath, 2) == "6"){ ?>

			<?php } else if(getDepthId($pagePath, 2) == "7"){ ?>

			<?php } ?>


		<?php } else if(getDepthId($pagePath, 1) == "sk"){ ?>
			<div class="tab">
				<ul class="children-count-4">
					<li<?php if(getDepthId($pagePath, 2) == "introduce" || !getDepthId($pagePath, 2)){ ?> class="active"<?php } ?>><a href="education-sk-introduce.php"><span>SK프로그램 소개</span></a></li>
					<li<?php if(getDepthId($pagePath, 2) == "lecture"){ ?> class="active"<?php } ?>><a href="education-sk-lecture.php"><span>SK창업강좌</span></a></li>
					<li<?php if(getDepthId($pagePath, 2) == "society"){ ?> class="active"<?php } ?>><a href="education-sk-society.php"><span>SK창업동아리</span></a></li>
					<li<?php if(getDepthId($pagePath, 2) == "competition"){ ?> class="active"<?php } ?>><a href="education-sk-competition.php"><span>SK창업경진대회</span></a></li>
				</ul>
			</div>
		<?php } ?>
	<?php } else if(getDepthId($pagePath, 0) == "commercialization"){ ?>
		<?php if(getDepthId($pagePath, 1) == "angel"){ ?>
			<div class="tab">
				<ul class="children-count-3">
					<li<?php if(getDepthId($pagePath, 2) == "introduce" || !getDepthId($pagePath, 2)){ ?> class="active"<?php } ?>><a href="commercialization-angel-introduce.php"><span>엔젤클럽 소개</span></a></li>
					<li<?php if(getDepthId($pagePath, 2) == "guide"){ ?> class="active"<?php } ?>><a href="commercialization-angel-guide.php"><span>IR 안내</span></a></li>
					<li<?php if(getDepthId($pagePath, 2) == "cloud"){ ?> class="active"<?php } ?>><a href="commercialization-angel-cloud.php"><span>클라우드펀딩</span></a></li>
				</ul>
			</div>
		<?php } ?>
	<?php } else if(getDepthId($pagePath, 0) == "advice"){ ?>
		<?php if(getDepthId($pagePath, 1) == "counsel"){ ?>
			<div class="tab">
				<ul class="children-count-7">
					<li<?php if(getDepthId($pagePath, 2) == "1" || !getDepthId($pagePath, 2)){ ?> class="active"<?php } ?>><a href="advice-counsel-1.php"><span>전체</span></a></li>
					<li<?php if(getDepthId($pagePath, 2) == "2"){ ?> class="active"<?php } ?>><a href="advice-counsel-2.php"><span>사업화<span class="small">(아이디어구체화/기술)</span></span></a></li>
					<li<?php if(getDepthId($pagePath, 2) == "3"){ ?> class="active"<?php } ?>><a href="advice-counsel-3.php"><span>마케팅<span class="small">(판로개척/홍보전략)</span></span></a></li>
					<li<?php if(getDepthId($pagePath, 2) == "4"){ ?> class="active"<?php } ?>><a href="advice-counsel-4.php"><span>재무관리<span class="small">(회계/세무)</span></span></a></li>
					<li<?php if(getDepthId($pagePath, 2) == "5"){ ?> class="active"<?php } ?>><a href="advice-counsel-5.php"><span>보증/기술금융보증</span></a></li>
					<li<?php if(getDepthId($pagePath, 2) == "6"){ ?> class="active"<?php } ?>><a href="advice-counsel-6.php"><span>투자/IR<span class="small">(투자유치/투자연계)</span></span></a></li>
					<li<?php if(getDepthId($pagePath, 2) == "7"){ ?> class="active"<?php } ?>><a href="advice-counsel-7.php"><span>법률/지재권<span class="small">(특허/창업절차)</span></span></a></li>
				</ul>
			</div>
		<?php } ?>


	<?php } else if(getDepthId($pagePath, 0) == "news"){ ?>

	<?php } else if(getDepthId($pagePath, 0) == "introduce"){ ?>

	<?php } else if(getDepthId($pagePath, 0) == "membership"){ ?>
		<h2 class="page-title">회원가입</h2>
		<div class="breadcrumb">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">뎁스1</a></li>
				<li><a href="#">뎁스2</a></li>
				<li><a href="#">뎁스3</a></li>
			</ul>
		</div>
		<div class="tab">
			<ul class="children-count-4 arrow-type">
				<li<?php if(getDepthId($pagePath, 1) == "terms" || !getDepthId($pagePath, 1)){ ?> class="active"<?php } ?>><a href="membership-terms.php"><span><span class="number">01</span>이용약관</span></a></li>
				<li<?php if(getDepthId($pagePath, 1) == "certify"){ ?> class="active"<?php } ?>><a href="membership-certify.php"><span><span><span class="number">02</span>가입인증</span></a></li>
				<li<?php if(getDepthId($pagePath, 1) == "input"){ ?> class="active"<?php } ?>><a href="membership-input.php"><span><span><span class="number">03</span>정보입력</span></a></li>
				<li<?php if(getDepthId($pagePath, 1) == "finish"){ ?> class="active"<?php } ?>><a href="membership-finish.php"><span><span><span class="number">04</span>가입완료</span></a></li>
			</ul>
		</div>
	<?php } ?>
	<div id="content">
