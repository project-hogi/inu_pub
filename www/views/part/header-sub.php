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
					<li<?php if($nav['children']){ ?> class="has-children"<?php } ?>>
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
					<li<?php if(getDepthId($pagePath, 2) == "student" || !getDepthId($pagePath, 2)){ ?> class="active"<?php } ?>><a href="gallery-chronicling-1.php"><span>대학생창업강좌</span></a></li>
					<li<?php if(getDepthId($pagePath, 2) == "ordinary"){ ?> class="active"<?php } ?>><a href="gallery-chronicling-2.php"><span>일반인실전창업강좌</span></a></li>
				</ul>
			</div>
		<?php } ?>
	<?php } ?>
	<div id="content">
