function watch(pid){
    var xmlhttp;
    if (window.XMLHttpRequest)
    {
        //  IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
        xmlhttp=new XMLHttpRequest();
    }
    else
    {
        // IE6, IE5 浏览器执行代码
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function () {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            var button = document.getElementById(pid);
            button.setAttribute('disabled',"disabled");
            button.innerHTML="已关注";
        }
    }
    xmlhttp.open("GET",'http://localhost/GoSports/index.php/friend/watch/'+pid,true);
    xmlhttp.send();
}

function unwatch(pid){
    var xmlhttp;
    if (window.XMLHttpRequest)
    {
        //  IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
        xmlhttp=new XMLHttpRequest();
    }
    else
    {
        // IE6, IE5 浏览器执行代码
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function () {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            var button = document.getElementById(pid);
            button.setAttribute('disabled',"disabled");
            button.innerHTML="已取关";
        }
    }
    xmlhttp.open("GET",'http://localhost/GoSports/index.php/friend/unwatch/'+pid,true);
    xmlhttp.send();
}