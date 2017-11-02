
function validate(target,post){
    var name = document.getElementById('name');
    var phone = document.getElementById('phone');
    var time = document.getElementById('time');
    var content = document.getElementById('content');
    if (name.value == "" || phone.value == "" || time.value == "" || content.value == ""){
        alert("请完整填写");
    }else {
        sendPost(target,post);
    }
}

function reset(){
    var name = document.getElementById('name');
    var content = document.getElementById('content');
    name.setValue("");
    content.setValue("");
}

function sendPost(target,post){
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
            alert("发布成功！3秒后跳转");
            window.location=target;
        }
    }

    xmlhttp.open("POST",post,true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    var name = document.getElementById('name');
    var phone = document.getElementById('phone');
    var time = document.getElementById('time');
    var content = document.getElementById('content');
    var postData ="name="+name.value+"&"+"phone="+phone.value+"&"+"time="+time.value+"&"+"content="+content.value;
    xmlhttp.send(postData);

}