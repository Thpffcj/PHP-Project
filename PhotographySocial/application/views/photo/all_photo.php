
<div class="nav nav-pills nav-stacked" role="tablist">
</div>
</div>
<div class="g-mn1">
    <div class="g-mn1c">
        <div class="content">
            <div>
                <!-- A wrapper for all the blog posts -->
                <?php if (count($post) != 0):?>
                    <?php foreach($post as $row):?>
                        <ul class="polaroids">
                            <li><a href="#" title="<?= $row['photo_name'] . ' 作者:' . $row['username']?> ">
                                    <img src="<?= base_url() . 'uploads/' . $row['photo_path'] ?>">
                                </a></li>
                        </ul>
                    <?php endforeach;?>
                <?php endif;?>
                <?php if (count($post) == 0):?>
                    <div class="panel panel-info">
                        <div class="panel-body" style="text-align: center">
                            <div class="text-info">
                                <strong><h3>还没有照片哦</h3></strong>
                            </div>
                        </div>
                    </div>
                <?php endif;?>
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