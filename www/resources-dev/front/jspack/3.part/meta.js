function getCookie(name) {
    var cookies = document.cookie.split(";");
    for(var i=0; i<cookies.length; i++) {
        if(cookies[i].indexOf("=") == -1) {
            if(name == cookies[i])
                return "";
        }
        else {
            var crumb = cookies[i].split("=");
            if(name == crumb[0].trim())
                return unescape(crumb[1].trim());
        }
    }
};
var desktopModeTF = getCookie("DesktopMode")
var Scale = getCookie("DesktopModeScale")
if (desktopModeTF == "true") {
    document.write('<meta name="viewport" content="width=1024, user-scalable=no, initial-scale='+Scale+'">');
} else {
    document.write('<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">')
}



(function($) {
    $(document).on("appinit", function() {
        $(window).resize(function(){
            if($(window).width() < 1024){
                if (desktopModeTF != "true") {
                    $(".mode-btn").html(
                        '<button onclick="desktopMode()" class="mode-change mobile">PC버전</button>'
                    );
                }else{
                    $(".mode-btn").html(
                        '<button onclick="undesktopMode()" class="mode-change pc">원래대로</button>'
                    );
                }
            }else{
                if(desktopModeTF == "true"){
                    $(".mode-btn").html(
                        '<button onclick="undesktopMode()" class="mode-change pc">원래대로</button>'
                    );
                }
            }
        });
    });
})(jQuery);

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