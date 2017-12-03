<!doctype html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Access-Control-Allow-Origin" content="*" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Easy Life" content="">
    <meta name="description" content="">
    <meta name="author" content="Thpffcj">
    <meta charset="utf-8">
    <title>个人主页</title>
    <link href="<?= base_url() . 'static/css/bootstrap/bootstrap.css' ?>" rel="stylesheet">
    <link href="<?= base_url() . 'static/css/personal/personal.css' ?>" rel="stylesheet">
</head>

<body>
<!--<script src="http://localhost/GoSports/static/js/header.js"></script>-->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= base_url() ?>">Easy Life</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?= base_url() . 'index.php/User/showDetail' ?>">个人信息</a></li>
                <li><a href="<?= base_url() . 'index.php/Album/showAllAlbum' ?>">我的照片</a></li>
                <li><a href="<?= base_url() . 'index.php/activity/showAllActivity' ?>">活动广场</a></li>
                <li><a href="<?= base_url() . 'index.php/friend/getFriends' ?>">朋友们</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="my-header">
    <div class="container">
        <h1>Easy Life</h1>
        <p>记录生活，发现同好</p>
    </div>
</div>

<div class="container">

    <div class="g-bd1 f-cb">
        <div class="g-sd1" style="margin-left: 5px;">
            <article>
                <span class="u-img"><a href="#"><img src="<?= base_url() . 'static/image/image-01.jpg' ?>" alt=""
                                                     style="margin: 5px;"/></a></span>
                <br>
                <div style="padding-left: 15px">
                    <p class="text-info "><strong><?= $userInfo['username'] ?></strong></p>
                    <p class="text-success"><strong>摄影达人</strong></p>
                    <!--                    --><?php
                    //                    if ($_SESSION['userid'] == $userInfo['userid']) {
                    //                        echo '<p class="text-warning">赞<span id="up" class="badge">' . $userInfo['up'] . '</span></p>';
                    //                        echo '<p class="text-success">踩<span id="down" class="badge">' . $userInfo['down'] . '</span></p>';
                    //                    } else {
                    //                        echo '<p class="text-warning"><a onclick="up(' . $userInfo['userid'] . ')">赞</a><span id="up" class="badge">' . $userInfo['up'] . '</span></p>';
                    //                        echo '<p class="text-success"><a onclick="down(' . $userInfo['userid'] . ')">踩</a><span id="down" class="badge">' . $userInfo['down'] . '</span></p>';
                    //                    }
                    //                    ?>
                </div>
            </article>