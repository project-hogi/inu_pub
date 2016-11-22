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