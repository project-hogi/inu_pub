<script>if (desktopModeTF == "true") {
	document.write('<button onclick="undesktopMode()" class="version-change">원래대로</button>');
}else{
	document.write('<p onclick="desktopMode()" class="version-change">PC버전</p>');
}</script>
<script>
	function desktopMode() {
		document.cookie="DesktopMode=true";
		document.cookie="DesktopModeScale="+$('html').width()/1024;
		window.scrollTo(0,0);
		location.reload();
	}
	function undesktopMode() {
		document.cookie="DesktopMode=false";
		location.reload();
	}
</script>
<!-- App Footer.html -->
</body>
</html>
<!-- //App Footer.html -->