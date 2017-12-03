
<div class="nav nav-pills nav-stacked" role="tablist">
    <ul class="nav nav-pills nav-stacked" role="tablist" style="width:140px;">
        <li role="presentation"><a href="<?= base_url() . 'index.php/album/showAllAlbum' ?>">我的相册</a>
        </li>
        <li role="presentation"><a href="<?= base_url() . 'index.php/album/showNewAlbum' ?>">新建相册</a>
        </li>
        <li role="presentation"><a href="<?= base_url() . 'index.php/photo/showAllPhoto' ?>">我的照片</a>
        </li>
        <li role="presentation"><a href="<?= base_url() . 'index.php/photo/showNewPhoto' ?>">上传照片</a>
        </li>
    </ul>
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
                        <li><a href="#" title="Roelan"><img src="../../static/image/image-01.jpg" alt="Roeland!"></a></li>
                        <li><a href="#" title="Discus"><img src="../../static/image/image-02.jpg" alt="Discussion"></a></li>
                        <li><a href="#" title="A Hear"><img src="../../static/image/image-01.jpg" alt="A Hearty Laugh"></a></li>
                        <li><a href="#" title="Evil M"><img src="../../static/image/image-02.jpg" alt="Evil Matt Coding"></a></li>
                        <li><a href="#" title="Scribb"><img src="../../static/image/image-01.jpg" alt="Scribbles"></a></li>
                        <li><a href="#" title="Amanda"><img src="../../static/image/image-02.jpg" alt="Amanda Glares..."></a></li>
                        <li><a href="#" title="The Do"><img src="../../static/image/image-01.jpg" alt="The Dougernaut"></a></li>
                        <li><a href="#" title="I See "><img src="../../static/image/image-02.jpg" alt="I See You!"></a></li>
                        <li><a href="#" title="Rock H"><img src="../../static/image/image-01.jpg" alt="Rock Hard Balls"></a></li>
                        <li><a href="#" title="Bocce "><img src="../../static/image/image-02.jpg" alt="Bocce Ball"></a></li>
                        <li><a href="#" title="Boris "><img src="../../static/image/image-01.jpg" alt="Boris "Tatooine""></a></li>
                        <li><a href="#" title="Sneake"><img src="../../static/image/image-02.jpg" alt="Sneakers & Stilettos"></a></li>
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