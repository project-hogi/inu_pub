<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page module-content"; ?>
<?php require "part/sitemap.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>

<img src="<?php echo $config["imageDir"]; ?>/part/content/introduce/history/history.png" alt="">
<pre class="sr-only">
2010
03.    인천대학교, 인천전문대 통합에 따른
03.    송도 및 제물포 창업보육센터 운영

2011
02.    중소기업청 창업선도대학육성사업 주관기관 선정
03.    창업지원단 정영식 단장 취임
04.    창업보육센터 운영평가 (S등급)

2012
03.    2012년 창업선도대학육성사업 (일반형) 선정

2013
03.    2013년 창업선도대학육성사업 (일반형) 선정
08.    인천대학교 미추홀캠퍼스(미추홀타워 별관 A동)로 이전

2014
03.    2014년 “사관학교식” 창업선도대학 선정
06.    창업자 입소공간 및 창업다락 개소

2015
03.    2015년 창업선도대학육성사업 (거점형) 선정
12.1    SK청년비상프로그램 사업 선정

2016
03.    2016년 창업선도대학육성사업 (거점형) 선정
06.    학생창업공간 “두랩(Do! Lab)" 개소
</pre>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>
