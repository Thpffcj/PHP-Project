function up(userid){
    var xmlhttp;
    if (window.XMLHttpRequest) {
        //  IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
        xmlhttp=new XMLHttpRequest();
    }
    else {
        // IE6, IE5 浏览器执行代码
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function () {
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
            var up = document.getElementById('up');
            var value = up.innerHTML;
            var value = parseInt(value)+1;
            up.innerHTML = value;
        }
    }
    xmlhttp.open("GET",'http://localhost/PhotographySocial/index.php/user/up/'+userid,true);
    xmlhttp.send();
}

function down(userid){
    var xmlhttp;
    if (window.XMLHttpRequest) {
        //  IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
        xmlhttp=new XMLHttpRequest();
    } else {
        // IE6, IE5 浏览器执行代码
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function () {
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
            var down = document.getElementById('down');
            var value = down.innerHTML;
            var value = parseInt(value)+1;
            down.innerHTML = value;
        }
    }
    xmlhttp.open("GET",'http://localhost/PhotographySocial/index.php/user/down/'+userid,true);
    xmlhttp.send();
}