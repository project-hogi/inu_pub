
<?php if(getDepthId($pagePath, 0) == "education"){ ?>

<?php } else if(getDepthId($pagePath, 0) == "introduce"){ ?>
	<?php if(getDepthId($pagePath, 1) == "greeting"){ ?>

	<?php } else if(getDepthId($pagePath, 1) == "place"){ ?>

	<?php } else if(getDepthId($pagePath, 1) == "vision"){ ?>

	<?php } else if(getDepthId($pagePath, 1) == "history"){ ?>

	<?php } else if(getDepthId($pagePath, 1) == "work"){ ?>

	<?php } else if(getDepthId($pagePath, 1) == "people"){ ?>

	<?php } else if(getDepthId($pagePath, 1) == "way"){ ?>

	<?php } ?>
<?php } ?>

<!-- Sub Footer.html -->
</div>
</div>
<div class="qnb">
	<ul>
		<li class="eq-0 active"><a href="#">BI 입주상담</a></li>
		<li class="eq-1"><a href="#">SK 청년비상</a></li>
		<li class="eq-2"><a href="#">엔젤투자</a></li>
	</ul>
	<style>
		.qnb>ul>li.eq-0>a{
			background-image: url('<?php echo $config["imageDir"]; ?>/part/layout-page/qnb-eq-0.png');
		}
		.qnb>ul>li.eq-0.active>a{
			background-image: url('<?php echo $config["imageDir"]; ?>/part/layout-page/qnb-eq-0-active.png');
		}
		.qnb>ul>li.eq-1>a{
			background-image: url('<?php echo $config["imageDir"]; ?>/part/layout-page/qnb-eq-1.png');
		}
		.qnb>ul>li.eq-1.active>a{
			background-image: url('<?php echo $config["imageDir"]; ?>/part/layout-page/qnb-eq-1-active.png');
		}
		.qnb>ul>li.eq-2>a{
			background-image: url('<?php echo $config["imageDir"]; ?>/part/layout-page/qnb-eq-2.png');
		}
		.qnb>ul>li.eq-2.active>a{
			background-image: url('<?php echo $config["imageDir"]; ?>/part/layout-page/qnb-eq-2-active.png');
		}
	</style>
</div>
<!-- //Sub Footer.html -->
