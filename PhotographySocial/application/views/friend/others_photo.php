
<div class="nav nav-pills nav-stacked" role="tablist">
    <ul class="nav nav-pills nav-stacked" role="tablist" style="width:140px;">
        <li role="presentation" class="active"><a href="<?= base_url() . 'index.php/friend/getOthersPhoto/' . $userInfo['id'] ?>">他的照片</a>
        </li>
        <li role="presentation"><a href="<?= base_url() . 'index.php/friend/getOthersActivity/' . $userInfo['id']?>">他的活动</a>
        </li>
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
                        <ul class="polaroids">
                            <li><a href="#" title="<?= $row['photo_name'] ?>"><img src="<?= base_url() . 'uploads/' . $row['photo_path'] ?>"></a>
                            </li>
                        </ul>
                    <?php endforeach; ?>
                <?php endif; ?>

                <?php if (count($post) == 0): ?>
                    <div class="panel panel-info">
                        <div class="panel-body" style="text-align: center">
                            <div class="text-info">
                                <strong><h3>他还没有照片哦</h3></strong>
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
<link rel="stylesheet" type="text/css" href="http://localhost/PhotographySocial/static/css/index/style.css">
<script src="<?= base_url() . 'static/js/album.js' ?>"></script>
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="<?= base_url() . 'static/js/bootstrap.min.js' ?>"></script>
</body>
</html>