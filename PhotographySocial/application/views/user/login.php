<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <title>摄影社交 登录</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSS -->
    <link rel="stylesheet" href="http://localhost/PhotographySocial/static/css/login/reset.css">
    <link rel="stylesheet" href="http://localhost/PhotographySocial/static/css/login/supersized.css">
    <link rel="stylesheet" href="http://localhost/PhotographySocial/static/css/login/style.css">
    <link rel="stylesheet" href="http://localhost/PhotographySocial/static/css/login/login.css">


</head>

<body>

<div class="page-container">
    <h1>摄影社交</h1>
    <form id="loginForm" method="post">
        <input type="text" name="username" class="username" placeholder="用户名">
        <input type="password" name="password" class="password" placeholder="密码">
        <button onclick="validate()">登录</button>
        <div class="error"><span>+</span></div>
    </form>
    <div class="connect">
        <a href="" class="register">点击注册</a>
        <p>Or connect with:</p>
        <p>
            <a class="facebook" href=""></a>
            <a class="twitter" href=""></a>
        </p>
    </div>
</div>
<script type="application/javascript">
    function validate() {
        var form = document.getElementById("loginForm");
        var u = form.username.value;
        var p = form.password.value;
        if (!(u == "" || p == "")) {
            form.action = "<?=base_url() . 'index.php/user/login'?>";
        } else {
            alert("不完整");
        }
    }
</script>
</body>
</html>