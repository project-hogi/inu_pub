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
			<div class="tab">
				<ul class="children-count-6">
					<li<?php if(getDepthId($pagePath, 2) == "1" || !getDepthId($pagePath, 2)){ ?> class="active"<?php } ?>><a href="education-experience-1.php"><span>창업경진대회</span></a></li>
					<li<?php if(getDepthId($pagePath, 2) == "2"){ ?> class="active"<?php } ?>><a href="education-experience-2.php"><span>대학생창업캠프</span></a></li>
					<li<?php if(getDepthId($pagePath, 2) == "3"){ ?> class="active"<?php } ?>><a href="education-experience-3.php"><span>비즈쿨 프로그램</span></a></li>
					<li<?php if(getDepthId($pagePath, 2) == "4"){ ?> class="active"<?php } ?>><a href="education-experience-4.php"><span>어린이 창업캠프</span></a></li>
					<li<?php if(getDepthId($pagePath, 2) == "5"){ ?> class="active"<?php } ?>><a href="education-experience-5.php"><span>창업붐업이벤트</span></a></li>
					<li<?php if(getDepthId($pagePath, 2) == "6"){ ?> class="active"<?php } ?>><a href="education-experience-6.php"><span>글로벌 창업</span></a></li>
				</ul>
			</div>
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

	<?php } else if(getDepthId($pagePath, 0) == "advice"){ ?>

	<?php } else if(getDepthId($pagePath, 0) == "news"){ ?>

	<?php } else if(getDepthId($pagePath, 0) == "introduce"){ ?>

	<?php } ?>
	<div id="content">
