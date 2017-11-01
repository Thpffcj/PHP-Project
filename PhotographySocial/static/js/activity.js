
function validate(target,post){
    var head = document.getElementById('head');
    var phone = document.getElementById('phone');
    var time = document.getElementById('time');
    var body = document.getElementById('body');
    if (head.value == "" || phone.value == "" || time.value == "" || body.value == ""){
        alert("请完整填写");
    }else {
        sendPost(target,post);
    }
}

function reset(){
    var head = document.getElementById('head');
    var body = document.getElementById('body');
    head.setValue("");
    body.setValue("");
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
    // xmlhttp.onreadystatechange=function () {
    //     if (xmlhttp.readyState==4 && xmlhttp.status==200)
    //     {
    //         alert("发布成功！3秒后跳转");
    //         window.location=target;
    //     }
    // }

    alert("发布成功！3秒后跳转");
    window.location=target;

    xmlhttp.open("POST",post,true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    var head = document.getElementById('head');
    var phone = document.getElementById('phone');
    var time = document.getElementById('time');
    var body = document.getElementById('body');
    var postData ="head="+head.value+"&"+"phone="+phone.value+"&"+"time="+time.value+"&"+"body="+body.value;
    xmlhttp.send(postData);

    // var form = document.getElementById("postForm");
    // var head = document.getElementById('head');
    // var phone = document.getElementById('phone');
    // var time = document.getElementById('time');
    // var body = document.getElementById('body');
    //
    // form.action = "<?= base_url() . 'index.php/activity/saveActivity' ?>";
    // form.submit();
}