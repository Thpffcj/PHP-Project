
<div class="nav nav-pills nav-stacked" role="tablist">
    <ul class="nav nav-pills nav-stacked" role="tablist" style="width:140px;">
        <li role="presentation" class="active"><a href="<?= base_url() . 'index.php/album/showAllAlbum' ?>">我的相册</a>
        </li>
        <li role="presentation"><a href="<?= base_url() . 'index.php/album/showNewAlbum' ?>">新建相册</a>
        </li>
        <li role="presentation"><a href="<?= base_url() . 'index.php/photo/showPhoto' ?>">我的照片</a>
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
                <?php
                if (count($post) != 0)
                    foreach ($post as $row) {
                        echo '<div class="panel panel-info">';
                        echo '<div class="panel-body">';
                        echo '<div class="row">';
                        echo '<div class="col-md-10">';
                        echo '<h3><strong>' . '<a href="http://localhost/PhotographySocial/index.php/photo/showAlbumPhoto/' . ($row['album_name']) . '">' . $row['album_name'] .'</a>' . '</strong></h3>';
                        echo '<p>' . 'By ' . '<a href="http://localhost/PhotographySocial/index.php/album/showAllAlbum/' . $row['user_id'] . '">' . $userInfo['username'] .'</a>' . '</p>';
                        echo '<p>' . $row['description'] . '</p>';
                        echo '</div>';
                        echo '<div class="col-md-2">';
                        echo '<img height="48" width="48" src="' . base_url() . 'uploads/' . $userInfo['avatar'] . '" style="float:left;">';
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
<script src="<?= base_url() . 'static/js/album.js' ?>"></script>
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="<?= base_url() . 'static/js/bootstrap.min.js' ?>"></script>
</body>
</html>