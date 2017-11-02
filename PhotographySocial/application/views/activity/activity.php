<!doctype html>
<html lang="zh-CN">
<head>
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
                <li><a href="<?= base_url() . 'index.php/personal/showPersonalData' ?>">个人主页</a></li>
                <!--                <li><a href="--><? //= base_url() . 'index.php/post/getPost' ?><!--">大操场</a></li>-->
                <!--                <li><a href="-->
                <? //= base_url() . 'index.php/activity/getAll' ?><!--">比试比试？</a></li>-->
                <!--                <li><a href="-->
                <? //= base_url() . 'index.php/relationship/getFriends' ?><!--">朋友们</a></li>-->
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
                    <!--                    <p class="text-info "><strong>-->
                    <? //= $userInfo['username'] ?><!--</strong></p>-->
                    <p class="text-info "><strong>Thpffcj</strong></p>
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

            <div class="nav nav-pills nav-stacked" role="tablist">
                <ul class="nav nav-pills nav-stacked" role="tablist" style="width:140px;">
                    <li role="presentation" class="active"><a
                                href="<?= base_url() . 'index.php/activity/getActivity' ?>">我的活动</a></li>
<!--                    <li role="presentation"><a href="--><?//= base_url() . 'index.php/post/getMyPublicPost' ?><!--">我的公开动态</a>-->
<!--                    </li>-->
<!--                    <li role="presentation"><a href="--><?//= base_url() . 'index.php/post/getMyPrivatePost' ?><!--">我的私密动态</a>-->
<!--                    </li>-->
                    <li role="presentation"><a href="<?= base_url() . 'index.php/post/showNewActivity' ?>">发布动态</a></li>
                </ul>
            </div>
        </div>
        <div class="g-mn1">
            <div class="g-mn1c">
                <div class="content">
                    <div>
                        <!-- A wrapper for all the blog posts -->
                        <?php
                        if (count($post) != 0)
                            foreach ($post as $row) {
                                echo '<div class="panel panel-info">';
                                echo '<div class="panel-body">';
                                echo '<div class="row">';
                                echo '<div class="col-md-10">';
                                echo '<h3><strong>' . $row['name'] . '</strong></h3>';
                                echo '<p>' . 'By ' . '<a href="http://localhost/GoSports/index.php/activity/showAllActivity/' . $row['sponsor'] . '">' . $row['sponsor'] . '</a> 联系方式:' .  $row['phone'] . ' 时间:'. $row['time'] . '</p>';
                                echo '<p>' . $row['content'] . '</p>';
                                echo '</div>';
                                echo '<div class="col-md-2">';
                                echo '<img height="48" width="48" src="' . base_url() . 'static/image/image-01.jpg" style="float:left;">';
//                                    if ($row['strange'] == 0){
//                                        echo '<button type="button" id ="watchButton" onclick="unwatch(\''.$row['userid'].'\')" class="btn btn-default" style="margin:30px;float: left">取关</button>';
//                                    }else{
//                                        echo '<button type="button" id ="watchButton" onclick="watch(\''.$row['userid'].'\')" class="btn btn-default" style="margin:30px;float: left">关注</button>';
//                                    }
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                            }
                        else {
                            echo '<div class="panel panel-info">';
                            echo '<div class="panel-body" style="text-align: center">';
                            echo '<div class="text-info">';
                            echo '<strong><h3>还没有动态哦</h3></strong>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div><!-- /.container -->
<script src="<?= base_url() . 'static/js/activity.js' ?>"></script>
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="<?= base_url() . 'static/js/bootstrap.min.js' ?>"></script>
</body>
</html>