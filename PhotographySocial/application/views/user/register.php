<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="author" content="">
    <title>用户注册</title>
    <link href="http://localhost/PhotographySocial/static/css/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="http://localhost/PhotographySocial/static/css/personal/personal.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">Ease life</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="http://localhost/PhotographySocial/index.php/user/showLogin">去登录</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="my-header">
    <div class="container">
        <h1>Ease life</h1>
        <p>记录生活，发现同好</p>
    </div>
</div>

<div class="container">
    <div class="panel panel-info ">
        <div class="panel-heading">
            <div class="panel-title" style="text-align: center">
                欢迎注册Ease life !
            </div>
        </div>
        <div class="panel-body">
            <div class="m-form">
                <form id="registerForm" method="post">
                    <fieldset>
                        <legend style="align-content: center;text-align: center;">欢迎注册账户</legend>
                        <div class="my-register">
                            <div class="formitm">
                                <label class="lab">账号：</label>
                                <div class="ipt">
                                    <input type="text" class="u-ipt" name="username"/><span class="domain">@qq.com</span>
                                    <p>6~8个字符，包括字母，数字，下划线以字母开头，字母或数字结尾</p>
                                </div>
                            </div>
                            <div class="formitm">
                                <label class="lab">初始密码：</label>
                                <div class="ipt">
                                    <input type="password" class="u-ipt" name="password1"/>
                                    <p>6~8个字符，区分大小写</p>
                                </div>
                            </div>
                            <div class="formitm">
                                <label class="lab">确认密码：</label>
                                <div class="ipt">
                                    <input type="password" class="u-ipt" name="password"/>
                                    <p>再次输入密码</p>
                                </div>
                            </div>
                            <div class="formitm">
                                <div class="ipt">
                                    <p class="tip"><input type="checkbox" id="agree"/><label for="agree">同意“服务条款”和“隐私权保护和个人信息利用政策”</label></p>
                                </div>
                            </div>
                            <div class="formitm formitm-1"><button class="u-btn" type="button" onclick="validate()">立即注册</button></div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="application/javascript">
    function validate() {
        var form = document.getElementById("registerForm");
        var username = form.username.value;
        var password1 = form.password1.value;
        var password = form.password.value;
        if (username == "" || password == "" || password1 == ""){
            alert("请完整填写注册信息");
        }else if(password != password1){
            alert("两次密码不一致");
        }else {
            form.action = "<?=base_url().'index.php/user/register'?>";
            form.submit();
        }
    }
</script>
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="<?=base_url().'static/js/bootstrap.min.js'?>"></script>
</body>
</html>