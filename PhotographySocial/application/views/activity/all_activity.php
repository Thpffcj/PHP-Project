
            <div class="nav nav-pills nav-stacked" role="tablist">
                <ul class="nav nav-pills nav-stacked" role="tablist" style="width:140px;">
                    <li role="presentation"><a
                                href="<?= base_url() . 'index.php/activity/showActivity' ?>">我的活动</a></li>
                    <li role="presentation"><a href="<?= base_url() . 'index.php/activity/showNewActivity' ?>">发布活动</a></li>
                    <li role="presentation" class="active"><a href="<?= base_url() . 'index.php/activity/showAllActivity' ?>">全部活动</a></li>
                </ul>
            </div>
        </div>
        <div class="g-mn1">
            <div class="g-mn1c">
                <div class="content">
                    <div>
                        <!-- A wrapper for all the blog posts -->
                        <?php if (count($post) != 0): ?>
                            <?php foreach ($post as $row): ?>
                                <div class="panel panel-info">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <?php
                                                echo '<h3><strong>' . $row['name'] . '</strong></h3>';
                                                echo '<p>' . 'By ' . '<a href="http://localhost/PhotographySocial/index.php/activity/showAllActivity/' . $row['sponsor'] . '">' . $row['username'] . '</a> 联系方式:' . $row['phone'] . ' 时间:' . $row['time'] . '</p>';
                                                echo '<p>' . $row['content'] . '</p>';
                                                ?>
                                            </div>
                                            <div class="col-md-2">
                                                <img height="48" width="48"
                                                     src="<?= base_url() . 'uploads/' . $row['avatar'] ?>"
                                                     style="float:left;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>

                        <?php if (count($post) == 0): ?>
                            <div class="panel panel-info">
                                <div class="panel-body" style="text-align: center">
                                    <div class="text-info">
                                        <strong><h3>还没有动态哦</h3></strong>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

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